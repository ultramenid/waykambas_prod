{{-- fills the English field with a translation of the Indonesian one, see App\Http\Livewire\WithTranslation --}}
<button type="button" x-data="{ busy: false }" :disabled="busy" :class="{ 'opacity-50': busy }"
    x-on:click="busy = true; cmsTranslate($wire, '{{ $field }}', $el).finally(() => busy = false)"
    class="inline-flex items-center flex-shrink-0 whitespace-nowrap px-4 py-1 text-sm rounded border border-gray-300 dark:border-opacity-20 text-newgray-900 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-newgray-700">
    <svg x-show="busy" style="display: none" class="animate-spin h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    <span x-text="busy ? 'Translating...' : 'Translate from Indonesian'">Translate from Indonesian</span>
</button>
