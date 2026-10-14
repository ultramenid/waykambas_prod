@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
    @foreach ([
        ['konteks', 'Konteks', $konteks],
        ['silvikultur', 'Silvikultur', $silvikultur],
        ['penanggulangankebakaran', 'Penanggulangan Kebakaran', $penanggulangankebakaran],
        ['pelibatanmasyarakat', 'Pelibatan Masyarakat', $pelibatanmasyarakat],
    ] as [$sectionId, $sectionTitle, $items])
        <div class="max-w-3xl mx-auto py-3 px-4 border-b-2 border-green-600 mt-12" id="{{ $sectionId }}">
            <h1 class="text-green-600 font-bold text-3xl font-satunya">{{ __($sectionTitle) }}</h1>
        </div>
        <div class="max-w-3xl mx-auto mt-12">
            @if ($items)
                @foreach ($items as $item)
                <details class="faq border border-gray-300 hover:border-green-600 mb-4 rounded-md transition-colors">
                    <summary class="flex items-center justify-between gap-4 px-4 py-3 font-bold cursor-pointer select-none hover:text-green-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-green-600 rounded-md">
                        <span>{{ $item->title }}</span>
                        <svg class="faq-icon w-5 h-5 shrink-0 transition-transform duration-200"
                             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </summary>
                    <div class="w-full prose max-w-none px-8 pb-4">
                        {!! $item->az !!}
                    </div>
                </details>
                @endforeach
            @endif
        </div>
    @endforeach
    @include('partials.new-footer')
@endsection
