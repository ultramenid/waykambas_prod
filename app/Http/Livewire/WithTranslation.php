<?php

namespace App\Http\Livewire;

use App\Services\Translator;
use DeepL\AuthorizationException;
use DeepL\ConnectionException;
use DeepL\DeepLException;
use DeepL\QuotaExceededException;
use DeepL\TooManyRequestsException;
use RuntimeException;

// "Translate from Indonesian" buttons (partials.translateButton): fills {field}EN with a translation of {field}ID
trait WithTranslation
{
    public function translateToEnglish($field, $source = null)
    {
        // livewire actions do not pass the checkSession middleware, and every translation uses the DeepL quota
        if (!session('id')) {
            abort(403);
        }
        if (!is_string($field) || !property_exists($this, $field.'ID') || !property_exists($this, $field.'EN')) {
            return;
        }
        // rich text editors send their current content, plain inputs are already synced by wire:model
        if (is_string($source)) {
            $this->{$field.'ID'} = $source;
        }
        $text = (string) $this->{$field.'ID'};
        if (trim(html_entity_decode(strip_tags($text)), " \t\n\r\0\x0B\xC2\xA0") === '') {
            $this->emit('toast', 'Fill in the Indonesian text first', 'error');
            return;
        }

        set_time_limit(180);
        try {
            $translation = app(Translator::class)->toEnglish($text);
        } catch (RuntimeException $e) {
            $this->emit('toast', $e->getMessage(), 'error');
            return;
        } catch (AuthorizationException $e) {
            $this->emit('toast', 'The DEEPL_API_KEY in .env is not valid', 'error');
            return;
        } catch (QuotaExceededException $e) {
            $this->emit('toast', 'The free DeepL quota for this month is used up', 'error');
            return;
        } catch (TooManyRequestsException $e) {
            $this->emit('toast', 'Too many translations at once, please try again in a minute', 'error');
            return;
        } catch (ConnectionException $e) {
            report($e);
            $this->emit('toast', 'Could not reach DeepL, please try again', 'error');
            return;
        } catch (DeepLException $e) {
            report($e);
            $this->emit('toast', 'Translation failed, please try again', 'error');
            return;
        }

        $this->{$field.'EN'} = $translation;
        $this->dispatchBrowserEvent('translated', ['field' => $field.'EN', 'value' => $translation]);
        $this->emit('toast', 'Translated, please check the English text before saving', 'success');
    }
}
