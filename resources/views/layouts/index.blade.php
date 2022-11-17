<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    @yield('meta')
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">
    @livewireStyles
    @livewireScripts
    <script src="{{ asset('js/app.js') }}" defer ></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XN84PYKBEZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XN84PYKBEZ');
    </script>

</head>
<body class="font-sans">

    @yield('content')

    @stack('scripts')
</body>
<script>
    Livewire.on('gotoTop', () => {
        window.scrollTo({
            top: 0,
            left: 0,
            behaviour: 'smooth'
        })
    })
    // assume only one video is playing at a time
    var videoPlaying = null;

    const onPlay = function() {
    if (videoPlaying && videoPlaying != this) {
        videoPlaying.pause()
    }
    videoPlaying = this
    }

    // init event handler
    const videos = document.getElementById("video")
    for (let i = 0; i < videos.length; i++) {
    videos[i].addEventListener("play", onPlay)
    }
</script>
</html>
