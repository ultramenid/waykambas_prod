<!-- diary -->
<div class="max-w-7xl py-6 mx-auto px-4">
    <a href="{{ route('diary', app()->getlocale() )}}" class="sm:text-5xl text-2xl font-bold text-gray-500 px-4 py-12">Green Diary</a>
    <div class=" border-b border-t border-gray-400 py-4 mt-8">

        <!-- item 1 -->
        <div x-data="{ item1: false }" class="sm:py-8 py-2 flex sm:flex-row flex-col sm:space-x-6 space-x-0 space-y-6 sm:space-y-0 items-center mx-auto max-w-5xl">
            <div class="sm:w-1/2 w-full px-4">
                <p class="mb-6 text-sm"> {{ \Carbon\Carbon::parse($diary[0]->publishdate)->format('Y F d')}}</p>
                <h1 class="sm:text-4xl text-2xl font-semibold">{{ $diary[0]->title }}</h1>
            </div>
            <div class="sm:w-1/2  w-full  px-4 relative">
                <img src="{{asset('storage/files/photos/'.$diary[0]->img)}}" alt="" class="w-full">
                <div @click="item1=!item1" class="z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-90 bottom-4 right-6 h-5 w-5  text-black flex justify-center items-center">
                    <a class="text-sm select-none">i</a>
                </div>
                <div class="absolute inset-x-0 bottom-0 h-full bg-gray-700 opacity-80 overflow-y-auto" x-show="item1">
                    <div class=" mx-auto text-white flex items-center py-2 px-4 text-xs whitespace-pre-line" >
                        {{ $diary[0]->imgDesc}}
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b mt-12 mb-12 border-gray-400"></div>

        <!-- item 2 -->
        <div x-data="{item2: false}" class="sm:py-8 py-2 flex sm:flex-row flex-col sm:space-x-6 space-x-0 space-y-6 sm:space-y-0 items-center mx-auto max-w-5xl">
            <div class="sm:w-1/2  w-full  px-4 relative">
                <img src="{{asset('storage/files/photos/'.$diary[1]->img)}}" alt="" class="w-full">
                <div @click="item2=!item2" class="z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-90 bottom-4 right-6 h-5 w-5  text-black flex justify-center items-center">
                    <a class="text-sm select-none">i</a>
                </div>
                <div class="absolute inset-x-0 bottom-0 h-full bg-gray-700 opacity-80 overflow-y-auto" x-show="item2">
                    <div class=" mx-auto text-white flex items-center py-2 px-4 text-xs whitespace-pre-line" >
                        {{ $diary[1]->imgDesc }}
                    </div>
                </div>
            </div>
            <div class="sm:w-1/2 w-full px-4">
                <p class="mb-6 text-sm"> {{ \Carbon\Carbon::parse($diary[1]->publishdate)->format('Y F d')}}</p>
                <h1 class="sm:text-4xl text-2xl font-semibold">{{ $diary[1]->title }}</h1>
            </div>

        </div>
    </div>
</div>
