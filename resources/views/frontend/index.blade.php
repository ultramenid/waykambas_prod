@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.hero')
    {{-- diary --}}
    <section class="max-w-7xl mx-auto px-4 py-12">
        <a href="{{route('diary', app()->getlocale() )}}" class="font-black text-black text-5xl ">Green Diary</a>
        <div class="sm:col-span-3 col-span-1 grid sm:grid-cols-2 grid-cols-1 grid-flow-row gap-6 py-6">
            @foreach ($diary as $list)
                <div class="w-full sm:mr-8 mr-0 mb-4 h-80" x-data="{item2:false}">
                    {{-- image --}}
                    <a href="{{ route('diarycontent', [app()->getLocale(),  $list->slug]) }}">
                        @if (in_array(pathinfo(asset('storage/files/photos/'.$list->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                    <video class="w-full h-80   object-center object-cover video-bg" controls >
                                        <source src="{{asset('storage/files/photos/'.$list->img)}}" type="video/mp4" >
                                    </video>
                                @else
                                <img src="{{asset('storage/files/photos/'.$list->img)}}" alt="" class="w-full h-80   object-center object-cover">
                        @endif
                    </a>
                    <div class="mt-2">
                        <a href="{{ route('diarycontent', [app()->getLocale(),  $list->slug]) }}" class=" font-bold">{{ Str::limit($list->title, 60) }}  </a> <a class="">{{ Str::limit($list->imgDesc, 155) }} </a>
                    </div>

                </div>
            @endforeach

        </div>
    </section>

    {{-- story --}}
    <section class="max-w-7xl mx-auto px-4 py-12">
        <a href="{{ route('story', app()->getlocale() )}}" class="font-black text-black text-5xl ">Feature Story</a>
    <div x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: $refs.next,
                prevEl: $refs.pref,
              },
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
            },
            })"
        class="relative w-full mx-auto py-4"
        >
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()" x-ref="pref"
                    class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                @foreach ($story as $item)
                     <!-- Slides -->
                    <div x-ref="slider" class="swiper-slide">
                        <div class="relative">
                            <img src="{{asset('storage/files/photos/'.$item->img)}}" alt="" class="w-full sm:h-slider h-44 mt-4 relative object-cover">
                            <a href="{{ route($item->slug, app()->getlocale() )}}" class="absolute sm:bottom-32 bottom-5 px-6 max-w-3xl sm:text-3xl text-white text-xl font-semibold text-left hover:underline">{{$item->titleID}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()" x-ref="next"
                    class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
</section>
    @include('partials.footer')
@endsection
