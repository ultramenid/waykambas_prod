<!-- hero -->
<div class="relative " x-data="{hero: false}">
    <!-- image -->
    <div class="bg-black py-6" style="height: 80vh;">
        <div class="max-w-7xl px-4 py-3  mx-auto relative ">
            <!-- bahasa -->
            <div class="sm:flex hidden justify-end">
                <div class="flex space-x-1 text-xs text-gray-400">
                    <a href="{{ route(Route::currentRouteName(), 'id') }}" class="cursor-pointer @if(App::getLocale() == 'id') text-white font-bold @endif">Indonesia</a>
                    <span class="border-r border-green-600"></span>
                    <a href="{{ route(Route::currentRouteName(), 'en') }}" class="cursor-pointer @if(App::getLocale() == 'en') text-white font-bold @endif">English</a>
                </div>
            </div>
            <!-- nav -->
            <div class=" justify-between items-center sm:flex hidden">
                <div class="flex space-x-4 items-center mb-2">
                    <h1 class="text-4xl font-bold text-white mr-6"> <a href="index.html">Rawa Kadut</a> </h1>
                    <!-- about -->
                    <div class="flex-col flex" x-data="{pages:false}">
                        <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >About
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                            <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Who We Are</a>
                            <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                            <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Rawa Kadut</a>
                        </div>
                    </div>

                    <!-- restorasi -->
                    <div class="flex-col flex" x-data="{pages:false}">
                        <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >Restorasi
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                            <a href="{{ route('siteplan', app()->getlocale() )}}" class="text-sm mr-6">Site Plan</a>
                            <a href="{{ route('silvikultur', app()->getlocale() )}}" class="text-sm mr-6">SilviKultur</a>
                            <a href="#" class="text-sm mr-6">Species</a>
                        </div>
                    </div>

                    <!-- recources -->
                    <div class="flex-col flex" x-data="{pages:false}">
                        <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >Resources
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                            <a href="#" class="text-sm mr-6">Green Diary</a>
                            <a href="#" class="text-sm mr-6">Feature Story</a>
                            <a href="#" class="text-sm mr-6">Report</a>
                            <a href="#" class="text-sm mr-6">Galery</a>
                        </div>
                    </div>
                    <a href="#" class="text-white">Event</a>
                </div>
                <div class="flex space-x-4 items-center">
                    <button class="bg-green-600 px-8  text-sm font-bold py-1 text-white hover:bg-white border border-green-600 hover:text-green-600">Donate</button>
                </div>
            </div>

            <div class="relative " style="height: 30vh">
                <div class="absolute inset-x-0 sm:bottom-14 bottom-0 h-16 px-8 max-w-xl">
                    <p class="text-white text-2xl">
                        Auriga activity in Way Kambas National
                        Park to restoring greenery to the park
                        as well as re-creating a home for the
                        endangered wildlife that lost their habitat
                        due to illegal logging and annual forest fire.
                    </p>
                </div>
            </div>
        </div>
    </div>

   <div @click="hero =! hero" class=" z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-80 bottom-6 right-6 h-5 w-5  text-black flex justify-center items-center">
        <a class="text-sm select-none">i</a>
    </div>
    <div class="absolute inset-x-0 bottom-0 h-16 bg-gray-500 opacity-40" x-show="hero">
        <div class="max-w-7xl mx-auto text-white flex items-center py-2 px-12 sm:text-normal text-sm">
            Ini adalah text boongan, jangan lupa diganti. Bisa kena api kita !
        </div>
    </div>

</div>
