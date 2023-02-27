<!-- event -->
<div x-data="{event: false}" class="sm:py-28 py-12 flex sm:flex-row flex-col sm:space-x-6 space-x-0 space-y-6 sm:space-y-0 items-center mx-auto max-w-5xl">
    <div class="sm:w-1/2  w-full  px-4 relative">
        <img src="{{ asset('img/eimg.png') }}" alt="" class="w-full">
        <div @click="event =! event" class=" z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-80 bottom-6 right-6 h-5 w-5  text-black flex justify-center items-center">
            <a class="text-sm select-none">i</a>
        </div>
        <div class="absolute inset-x-0 bottom-0 h-16 bg-gray-700 opacity-80" x-show="event">
            <div class=" mx-auto text-white flex items-center py-2 px-12 text-sm">
                Ini adalah text boongan, jangan lupa diganti. Bisa kena api kita !
            </div>
        </div>
    </div>
    <div class="sm:w-1/2 w-full px-4">
        <a class="text-gray-500	font-bold">Event</a>
        <p class="mb-6 text-sm"> Dec 14, 2020</p>
        <h1 class="sm:text-4xl text-2xl font-semibold">Firebreaks maintenance</h1>
        <p class="mt-4">Auriga activity in Way Kambas
            National Park to restoring
            greenery to the park as well
            as re-creating a home for the
            endangered wildlife that lost their
            habitat due to illegal logging and
            annual forest fire.</p>
    </div>
</div>
