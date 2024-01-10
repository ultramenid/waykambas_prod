 <!-- hero -->
    <!-- image -->
    <div class=" bg-black  z-50 font-satunya">
        <div class="max-w-7xl px-4 py-6  mx-auto relative  justify-between items-center sm:flex hidden">
            <div class="flex gap-8 items-end">
                <a class="mr-12" href="{{ route('index', app()->getlocale() )}}"><img src="{{ asset('img/rawakadut-logo-atas.png') }}" alt="Waykambas - Rawa Kadut" class="h-16"></a>
                <!-- about -->
                <div class="flex-col flex" x-data="{pages:false}">
                    <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center text-xl font-semibold uppercase" >About
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                        <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Who We Are</a>
                        <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                        <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Restorasi Kadut</a>
                    </div>
                </div>

                {{-- <!-- restorasi -->
                <div class="flex-col flex" x-data="{pages:false}">
                    <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >A-Z Restoration
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                        <a href="{{ route('siteplan', app()->getlocale() )}}" class="text-sm mr-6">Site Plan</a>
                        <a href="{{ route('silvikultur', app()->getlocale() )}}" class="text-sm mr-6">SilviKultur</a>
                        <a href="#" class="text-sm mr-6">Species</a>
                    </div>
                </div> --}}
                <a href="{{ route('azrestoration', app()->getlocale() )}}" class="text-white text-xl font-semibold uppercase">A to Z Restorasi Kadut</a>

                {{-- <a href="#" class="text-white">Kebakaran</a> --}}

                <a href="{{ route('story', app()->getlocale() )}}" class="text-white text-xl font-semibold uppercase">Feature</a>
                <a href="{{ route('diary', app()->getlocale() )}}" class="text-white text-xl font-semibold uppercase">Diary</a>
                <a href="#" class="text-white text-xl font-semibold uppercase">Kinerja</a>
            </div>
            {{-- <div class="flex space-x-4 items-center">
                <button class="bg-green-600 px-8  text-sm font-semibold py-1 text-white hover:bg-white border border-green-600 hover:text-green-600">Donate</button>
            </div> --}}
        </div>
    </div>
    @if ($cssbackground)
        <div class="{{$cssbackground}} py-6">
            <div class="max-w-7xl px-4 py-3  mx-auto relative ">
                <!-- bahasa -->
                {{-- <div class="sm:flex hidden justify-end">
                    <div class="flex space-x-1 text-xs text-gray-400">
                        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="cursor-pointer @if(App::getLocale() == 'id') text-white font-semibold @endif">Indonesia</a>
                        <span class="border-r border-green-600"></span>
                        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="cursor-pointer @if(App::getLocale() == 'en') text-white font-semibold @endif">English</a>
                    </div>
                </div> --}}
                <!-- nav -->



            </div>
        </div>
    @endif

