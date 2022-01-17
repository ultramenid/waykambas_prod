<!-- diary -->
<div class="max-w-5xl py-6 mx-auto px-4">
    <h1 class="text-5xl text-gray-500  py-12">Green Diary</h1>
    <div class=" border-b border-t border-gray-400 py-8">

        <!-- item 1 -->
        <div x-data="{ item1: false }" class="sm:py-8 py-2 flex sm:flex-row flex-col sm:space-x-6 space-x-0 space-y-6 sm:space-y-0 items-center mx-auto max-w-5xl">
            <div class="sm:w-1/2 w-full px-4">
                <p class="mb-6 text-sm"> Dec 14, 2020</p>
                <h1 class="sm:text-4xl text-2xl font-semibold">Fire Control</h1>
                <p class="mt-4">As most remaining forests in Indonesia, Way Kambas National Park is also not immune to fires. Every year, the park suffers from conflagration and hazardously causes haze that affects local community living near the conservation area.</p>
            </div>
            <div class="sm:w-1/2  w-full  px-4 relative">
                <img src="https://waykambas.restorasi.earth/upload/feature/thumbnails/id/515a6996-79d7-4d37-86c4-23f87474dc3c.jpg" alt="" class="w-full">
                <div @click="item1=!item1" class="z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-90 bottom-4 right-6 h-5 w-5  text-black flex justify-center items-center">
                    <a class="text-sm select-none">i</a>
                </div>
                <div class="absolute inset-x-0 bottom-0 h-16 bg-gray-700 opacity-80" x-show="item1">
                    <div class=" mx-auto text-white flex items-center py-2 px-12 text-sm">
                        Ini adalah text boongan, jangan lupa diganti. Bisa kena api kita !
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b mt-12 mb-12 border-gray-400"></div>

        <!-- item 2 -->
        <div x-data="{item2: false}" class="sm:py-8 py-2 flex sm:flex-row flex-col sm:space-x-6 space-x-0 space-y-6 sm:space-y-0 items-center mx-auto max-w-5xl">
            <div class="sm:w-1/2  w-full  px-4 relative">
                <img src="https://waykambas.restorasi.earth/upload/feature/thumbnails/id/f3ee3fe6-0b47-4263-88c2-0882bbe3d335.jpg" alt="" class="w-full">
                <div @click="item2=!item2" class="z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-90 bottom-4 right-6 h-5 w-5  text-black flex justify-center items-center">
                    <a class="text-sm select-none">i</a>
                </div>
                <div class="absolute inset-x-0 bottom-0 h-16 bg-gray-700 opacity-80" x-show="item2">
                    <div class=" mx-auto text-white flex items-center py-2 px-12 text-sm">
                        Ini adalah text boongan, jangan lupa diganti. Bisa kena api kita !
                    </div>
                </div>
            </div>
            <div class="sm:w-1/2 w-full px-4">
                <p class="mb-6 text-sm"> Dec 14, 2020</p>
                <h1 class="sm:text-4xl text-2xl font-semibold">A-Z Way Kambas Restoration</h1>
                <p class="mt-4">Auriga’s reforestation activity in Way Kambas National Park has been running since 2013. The program itself is an effort to bring back greenery to the park as well as re-creating a home for the endangered wildlife roaming surround the park, such as tiger, rhinoceros, and elephant, that lost their habitat due to illegal logging and annual forest fire.</p>
            </div>

        </div>
    </div>
</div>
