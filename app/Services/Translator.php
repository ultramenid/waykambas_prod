<?php

namespace App\Services;

use DeepL\AuthorizationException;
use DeepL\ConnectionException;
use DeepL\DeepLClient;
use DeepL\DeepLException;
use DeepL\MultilingualGlossaryDictionaryEntries;
use DeepL\QuotaExceededException;
use DeepL\TooManyRequestsException;
use Illuminate\Support\Facades\Cache;
use RuntimeException;

// Indonesian -> English translation of CMS content with DeepL
class Translator
{
    // fixed terms, following resources/lang/en.json and the English story pages
    const GLOSSARY = [
        'Restorasi Kadut' => 'Kadut Restoration',
        'Taman Nasional Way Kambas' => 'Way Kambas National Park',
        'Rawa Kadut' => 'Rawa Kadut',
        'Green Diary' => 'Green Diary',
        // a native tree (Schima wallichii), not "flower"
        'puspa' => 'puspa',
        'Puspa' => 'Puspa',
        'ilalang' => 'cogon grass',
        'Ilalang' => 'Cogon grass',
        'alang-alang' => 'cogon grass',
        'Alang-alang' => 'Cogon grass',
        'silvikultur' => 'silviculture',
        'Silvikultur' => 'Silviculture',
        'penanggulangan kebakaran' => 'fire management',
        'Penanggulangan Kebakaran' => 'Fire Management',
        'pelibatan masyarakat' => 'community involvement',
        'Pelibatan Masyarakat' => 'Community Involvement',
    ];

    const GLOSSARY_NAME = 'Restorasi Kadut CMS';

    // helps DeepL pick the right meaning, is not translated and not counted against the quota
    const CONTEXT = 'Website of Kadut Restoration (Restorasi Kadut), an ecosystem restoration program by Auriga Nusantara in Way Kambas National Park, Lampung, Indonesia: reforestation of cogon grass land, fire management and community involvement.';

    public function toEnglish(string $text): string
    {
        return $this->toEnglishMany([$text])[0];
    }

    // translates many texts with as few DeepL requests as possible, the keys of $texts are kept
    public function toEnglishMany(array $texts): array
    {
        if (!$texts) {
            return [];
        }
        $key = config('services.deepl.key');
        if (!$key) {
            throw new RuntimeException('DEEPL_API_KEY is not set in .env');
        }
        $client = $this->client($key);
        $glossaryId = $this->glossaryId($client);

        // html and plain text need different options, and DeepL takes at most 50 texts per request
        $html = array_filter($texts, fn ($text) => $text !== strip_tags($text));
        $plain = array_diff_key($texts, $html);
        $translated = [];
        foreach ([[$html, true], [$plain, false]] as [$group, $isHtml]) {
            foreach (array_chunk($group, 50, true) as $chunk) {
                $results = $this->translate($client, array_values($chunk), $isHtml, $glossaryId);
                $translated += array_combine(array_keys($chunk), $results);
            }
        }
        return array_replace($texts, $translated);
    }

    private function translate(DeepLClient $client, array $texts, bool $html, &$glossaryId)
    {
        $options = [
            'model_type' => 'quality_optimized',
            'context' => self::CONTEXT,
        ];
        if ($html) {
            $options['tag_handling'] = 'html';
        } else {
            // keep line breaks and the caption's own punctuation and capitalisation
            $options['preserve_formatting'] = true;
        }
        if ($glossaryId) {
            $options['glossary'] = $glossaryId;
        }

        try {
            $results = $client->translateText($texts, 'id', 'en-US', $options);
        } catch (AuthorizationException | QuotaExceededException | TooManyRequestsException | ConnectionException $e) {
            throw $e;
        } catch (DeepLException $e) {
            if (!$glossaryId) {
                throw $e;
            }
            // the glossary was deleted in the DeepL account or does not fit this request:
            // translate without it, and make a new one tomorrow
            report($e);
            Cache::put($this->glossaryCacheKey(), false, now()->addDay());
            $glossaryId = false;
            unset($options['glossary']);
            $results = $client->translateText($texts, 'id', 'en-US', $options);
        }
        return array_map(fn ($result) => $result->text, $results);
    }

    protected function client(string $key)
    {
        // free keys (ending in :fx) are sent to api-free.deepl.com automatically
        return new DeepLClient($key, ['timeout' => 60]);
    }

    // the glossary lives in the DeepL account and is reused; DeepL API Free holds only one glossary,
    // so an older version of ours (GLOSSARY changed) is deleted before the new one is created
    private function glossaryId(DeepLClient $client)
    {
        $id = Cache::get($this->glossaryCacheKey());
        if ($id !== null) {
            return $id;
        }
        $name = self::GLOSSARY_NAME.' '.substr(md5(json_encode(self::GLOSSARY)), 0, 8);
        try {
            foreach ($client->listMultilingualGlossaries() as $glossary) {
                if ($glossary->name === $name) {
                    $id = $glossary->glossaryId;
                } elseif (str_starts_with($glossary->name, self::GLOSSARY_NAME)) {
                    $client->deleteMultilingualGlossary($glossary);
                }
            }
            $id = $id ?? $client->createMultilingualGlossary($name, [
                new MultilingualGlossaryDictionaryEntries('id', 'en', self::GLOSSARY),
            ])->glossaryId;
            Cache::forever($this->glossaryCacheKey(), $id);
            return $id;
        } catch (AuthorizationException | TooManyRequestsException | ConnectionException $e) {
            throw $e;
        } catch (DeepLException $e) {
            // DeepL refused the glossary, e.g. the account's one glossary slot holds another glossary:
            // translate without it and try again tomorrow
            report($e);
            Cache::put($this->glossaryCacheKey(), false, now()->addDay());
            return false;
        }
    }

    private function glossaryCacheKey()
    {
        return 'deepl_glossary_'.md5(json_encode(self::GLOSSARY));
    }
}
