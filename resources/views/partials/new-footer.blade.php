<div class="bg-black py-12 mt-24 text-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="flex sm:flex-row flex-col justify-between gap-12">
            <div class="flex flex-col gap-3">
                <a class="uppercase text-2xl font-black">About</a>
                <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-xl font-satunya font-bold">who we are</a>
                <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-xl font-satunya font-bold">way kambas</a>
                <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-xl font-satunya font-bold">{{ __('restorasi kadut') }}</a>
            </div>
            <div class="flex flex-col gap-3">
                <a href="{{ route('azrestoration', app()->getlocale() )}}" class="uppercase text-2xl font-black">{{ __('A to Z Restorasi Kadut') }}</a>
                <a href="{{ route('a-to-z-restorasi-kadut#konteks', app()->getlocale() )}}" class="text-xl font-satunya font-bold">{{ __('konteks') }}</a>
                <a href="{{ route('a-to-z-restorasi-kadut#silvikultur', app()->getlocale() )}}" class="text-xl font-satunya font-bold">{{ __('silvikultur') }}</a>
                <a href="{{ route('a-to-z-restorasi-kadut#penanggulangankebakaran', app()->getlocale() )}}" class="text-xl font-satunya font-bold">{{ __('penanggulangan kebakaran') }}</a>
                <a href="{{ route('a-to-z-restorasi-kadut#pelibatanmasyarakat', app()->getlocale() )}}" class="text-xl font-satunya font-bold">{{ __('pelibatan masyarakat') }}</a>
            </div>
            <div class="flex flex-col gap-3">
                <a href="{{ route('story', app()->getlocale() )}}" class="uppercase text-2xl font-black">{{ __('Feature') }}</a>
            </div>
            <div class="flex flex-col gap-3">
                <a href="{{ route('diary', app()->getlocale() )}}" class="uppercase text-2xl font-black">Diary</a>
            </div>
            <div class="flex flex-col gap-3">
                <a href="#" class="uppercase text-2xl font-black">{{ __('Kinerja') }}</a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 border-t border-gray-200 mt-12"></div>
    <div class="max-w-7xl mx-auto px-4 border-t border-gray-400 mt-24"></div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="sm:gap-16 gap-6 flex sm:flex-row flex-col mt-6 justify-between items-center">
            <img src="{{ asset('img/rawakadut-logo.png') }}" alt="" class="sm:h-28 h-20 ">
            <div class="">
                <p class="">{{ __('Memulihkan ekosistem Way Kambas sehingga menjadi habitat yang aman dan nyaman bagi satwa setempat, seperti gajah, harimau, badak.') }}</p>
                <div class="flex sm:flex-row flex-col mt-4 text-xs">
                    <a >© 2024 Auriga Nusantara. All rights reserved.</a>

                </div>
            </div>
        </div>
    </div>


</div>
