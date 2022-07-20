 <!-- slider -->
 <div class="bg-stone-100 mt-12  w-full relative">
    <div class="absolute inset-y-0  left-4  sm:top-30 top-40 z-10 flex items-center " >
        <button id="prev"
             class=" bg-gray-800  opacity-50 lg:-ml-4 flex justify-center items-center sm:w-24 w-12 sm:h-24 h-12 shadow focus:outline-none">
        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left sm:w-12 w-6 sm:h-12 h-6 text-white"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        </button>
    </div>

    <div class="">
        <h1 class="text-5xl text-gray-500  py-12 px-4">Feature Story</h1>
        <div class="swiper-container lg:h-screen h-96 w-full ">
            <div class="swiper-wrapper" >
                <div class="swiper-slide flex items-center " style="--tw-bg-opacity: 1;
                background-color: rgb(245 245 244 / var(--tw-bg-opacity)) !important; ">
                    <img src="{{ asset('assets/ilalang.jpg') }}" alt="" class="object-cover  aspect-video sm:h-screen h-full w-full">
                    <a href="{{ route('Waykambas_tenggelam_dalam_balutan_ilalang', app()->getlocale() )}}" class="absolute sm:px-32 px-4 sm:py-0 py-4  max-w-3xl sm:text-3xl text-white text-xl font-semibold text-left hover:underline">Way Kambas Tenggelam Dalam Balutan Ilalang</a>
                </div>

            </div>


        </div>
    </div>
    <div class="absolute inset-y-0 right-4 sm:top-30 top-40 z-10  items-center flex" >
        <button  id="next"  class=" bg-gray-800 opacity-50 lg:-mr-4 flex justify-center items-center sm:w-24 w-12 sm:h-24 h-12  shadow focus:outline-none">
        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right sm:w-12 w-6 sm:h-12 h-6 text-white"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div>
