<!-- footer -->
<div class="bg-black py-12  fixed bottom-0 w-full">
    <div class=" max-w-7xl px-4 mx-auto ">
        <div class="sm:flex hidden space-x-4 items-center mb-2 ">
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
                    <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Restorasi Kadut</a>
                </div>
            </div>

            <a href="#" class="text-white">A-Z Restoration</a>

            <a href="#" class="text-white">Story</a>
            <a href="#" class="text-white">Diary</a>
        </div>
        <p class="text-white text-sm mt-1 max-w-xl italic"> Memulihkan ekosistem Way Kambas sehingga menjadi habitat yang aman dan nyaman bagi satwa setempat, seperti gajah, harimau, badak.</p>
    </div>
</div>
