<header class="max-w-6xl px-6 mx-auto pt-4 flex items-center justify-between">
    <div class="flex items-center ">
       <div class="px-2">
            <span class="font-semibold text-2xl tracking-tight text-newgray-900 dark:text-gray-200 "><a href="{{ route('dashboard') }}">Way kambas</a></span>
       </div>
    </div>

    {{-- // responsive pc--}}
    <div class=" flex">
        @include('partials.toogleProfile')
    </div>
 </header>
