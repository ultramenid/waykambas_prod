@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.hero')
    @include('partials.event')
    @include('partials.diary')
    @include('partials.slider')
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
