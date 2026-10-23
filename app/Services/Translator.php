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

    // helps DeepL pick the right meaning, is not translated and not counted against the quota
    const CONTEXT = 'Website of Kadut Restoration (Restorasi Kadut), an ecosystem restoration program by Auriga Nusantara in Way Kambas National Park, Lampung, Indonesia: reforestation of cogon grass land, fire management and community involvement.';

    public function toEnglish(string $text): string
    {
        $key = config('services.deepl.key');
        if (!$key) {
            throw new RuntimeException('DEEPL_API_KEY is not set in .env');
        }
        $client = $this->client($key);

        $options = [
            'model_type' => 'quality_optimized',
            'context' => self::CONTEXT,
        ];
        if ($text !== strip_tags($text)) {
            $options['tag_handling'] = 'html';
        } else {
            // keep line breaks and the caption's own punctuation and capitalisation
            $options['preserve_formatting'] = true;
        }

        $glossaryId = $this->glossaryId($client);
        if ($glossaryId) {
            $options['glossary'] = $glossaryId;
        }

        try {
            return $client->translateText($text, 'id', 'en-US', $options)->text;
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
            unset($options['glossary']);
            return $client->translateText($text, 'id', 'en-US', $options)->text;
        }
    }

    protected function client(string $key)
    {
        // free keys (ending in :fx) are sent to api-free.deepl.com automatically
        return new DeepLClient($key, ['timeout' => 60]);
    }

    // the glossary is created in the DeepL account once and reused, a changed GLOSSARY creates a new one
    private function glossaryId(DeepLClient $client)
    {
        $id = Cache::get($this->glossaryCacheKey());
        if ($id !== null) {
            return $id;
        }
        try {
            $id = $client->createMultilingualGlossary('Restorasi Kadut CMS', [
                new MultilingualGlossaryDictionaryEntries('id', 'en', self::GLOSSARY),
            ])->glossaryId;
            Cache::forever($this->glossaryCacheKey(), $id);
            return $id;
        } catch (AuthorizationException | QuotaExceededException | TooManyRequestsException | ConnectionException $e) {
            throw $e;
        } catch (DeepLException $e) {
            // DeepL refused the glossary itself: translate without it and try again tomorrow
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
