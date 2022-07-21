<!-- hero -->
<div class=" bg-black sticky top-0 z-50">
    <div class="max-w-7xl px-4 py-6  mx-auto relative  justify-between items-center sm:flex hidden">
        <div class="flex space-x-4 items-center mb-2">
            <h1 class="text-4xl font-bold text-white mr-6"> <a href="{{ route('index', app()->getlocale() )}}">Rawa Kadut</a> </h1>
            <!-- about -->
            <div class="flex-col flex @if ($nav === 'about') border-b border-white @endif"" x-data="{pages:false}">
                <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >About
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
            <div class="@if ($nav === 'az') border-b border-white @endif">
                <a href="{{ route('azrestoration', app()->getlocale() )}}" class="text-white">A-Z Restoration</a>
            </div>
            {{-- <a href="#" class="text-white">Kebakaran</a> --}}

            <div class="@if ($nav === 'story') border-b border-white @endif">
            <a href="{{ route('Waykambas_tenggelam_dalam_balutan_ilalang', app()->getlocale() )}}" class="text-white">Story</a>
            </div>
            <div class="@if ($nav === 'diary') border-b border-white @endif">
            <a href="{{ route('diary', app()->getlocale() )}}" class="text-white">Diary</a>
            </div>
        </div>
        <div class="flex space-x-4 items-center">
            <button class="bg-green-600 px-8  text-sm font-bold py-1 text-white hover:bg-white border border-green-600 hover:text-green-600">Donate</button>
        </div>
    </div>
</div>
    <div class="{{$cssbackground}} relative" >
        <div class="max-w-7xl px-4 py-3  mx-auto relative ">
            <!-- bahasa -->
            {{-- <div class="sm:flex hidden justify-end">
                <div class="flex space-x-1 text-xs text-gray-400">
                    <a href="{{ route(Route::currentRouteName(), 'id') }}" class="cursor-pointer @if(App::getLocale() == 'id') text-white font-bold @endif">Indonesia</a>
                    <span class="border-r border-green-600"></span>
                    <a href="{{ route(Route::currentRouteName(), 'en') }}" class="cursor-pointer @if(App::getLocale() == 'en') text-white font-bold @endif">English</a>
                </div>
            </div> --}}
        </div>
    </div>


