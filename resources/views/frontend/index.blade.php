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
                <div class="w-full sm:mr-8 mr-0 mb-4 " x-data="{item2:false}">
                    {{-- image --}}
                    <a href="{{ route('diarycontent', [app()->getLocale(),  $list->slug]) }}">
                        @if (in_array(pathinfo(asset('storage/files/photos/'.$list->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                    <video class="spect-w-16 aspect-h-9   bg-cover bg-center" controls>
                                        <source src="{{asset('storage/files/photos/'.$list->img)}}" type="video/mp4" >
                                    </video>
                                @else
                                <img src="{{asset('storage/files/photos/'.$list->img)}}" alt="" class="spect-w-16 aspect-h-9   bg-cover bg-center">
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
        <a class="font-black text-black text-5xl ">Feature Story</a>
        <div class="relative">
            <img src="{{ asset('assets/ilalang.jpg') }}" alt="" class="w-full h-full mt-4 relative">
            <a href="{{ route('Waykambas_tenggelam_dalam_balutan_ilalang', app()->getlocale() )}}" class="absolute sm:bottom-32 bottom-5 px-6 max-w-3xl sm:text-3xl text-white text-xl font-semibold text-left hover:underline">Way Kambas Tenggelam Dalam Balutan Ilalang</a>
        </div>
    </section>
    @include('partials.footer')
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
   // Swiper: Slider
    new Swiper('.swiper-container', {
        nextButton: '#next',
        prevButton: '#prev',
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        loopedSlides: 5,
        watchSlidesVisibility: true,
        breakpoints: {

            1028: {
                slidesPerView:1,
                spaceBetween: 10,
            },
            480: {
                slidesPerView:1,
                spaceBetween: 10,
            }
        }
    });
</script>
@endpush
