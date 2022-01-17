 <!-- topbar -->
 <header class="bg-green-ndpe sticky top-0 z-50">
    <div x-data="{ open: false }" class="px-6 py-2 bg-black z-20 sm:hidden block">
        <svg @click="open = true" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        <div class="fixed w-3/4 h-screen z-50 bg-black inset-0 overflow-y-auto " x-show="open"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.outside="open = false"
        x-cloak style="display: none !important">
            <button class="absolute px-6 py-2 focus:outline-none text-gray-300" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="white" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </button>
            <div class="mt-12 space-y-3">
                <div class=" px-6">
                    <a href="index.html"   class="mb-4 px-4 inline-block text-base leading-5 text-gray-300 font-semibold uppercase">Home<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6" x-data="{open1: false}">
                    <div class="flex items-center   px-4 mb-2" @click=" open1 =! open1">
                        <a class=" text-base leading-5 text-gray-300 font-semibold uppercase">About </a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open1" style="display: none !important;">
                        <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Who We Are</a>
                        <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                        <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Rawa Kadut</a>
                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6" x-data="{open2: false}">
                    <div class="flex items-center  px-4 mb-2" @click=" open2 =! open2">
                        <a class=" text-gray-300 font-semibold uppercase">Restorasi </a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open2">
                        <a href="{{ route('siteplan', app()->getlocale() )}}" class="text-sm mr-6">Site Plan</a>
                        <a href="{{ route('silvikultur', app()->getlocale() )}}" class="text-sm mr-6">SilviKultur</a>
                        <a href="#" class="text-sm mr-6">Species</a>
                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6" x-data="{open2: false}">
                    <div class="flex items-center  px-4 mb-2" @click=" open2 =! open2">
                        <a class=" text-gray-300 font-semibold uppercase">Resources </a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open2">
                        <a href="#" class="text-sm mr-6">Green Diary</a>
                        <a href="#" class="text-sm mr-6">Feature Story</a>
                        <a href="#" class="text-sm mr-6">Report</a>
                        <a href="#" class="text-sm mr-6">Galery</a>
                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6">
                    <a href="#"class="mb-4 px-4 inline-block text-base leading-5 text-gray-300 font-semibold uppercase">Event<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class="px-6 flex space-x-2 text-gray-300 text-sm  bottom-10 fixed z-30">
                    <a href="{{ route(Route::currentRouteName(), 'en') }}"  class="cursor-pointer @if(App::getLocale() == 'en') text-white font-bold @endif">English</a>
                    <div class="border-l border-gray-300"></div>
                    <a href="{{ route(Route::currentRouteName(), 'id') }}"  class="cursor-pointer @if(App::getLocale() == 'id') text-white font-bold @endif ">Indonesia</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-6 -py-2 sm:block hidden">
        <div class="flex justify-between px-3">
            <a></a>
        </div>
    </div>
</header>
