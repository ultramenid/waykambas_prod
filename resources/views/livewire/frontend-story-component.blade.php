<div>
    <h1 class="font-bold sm:text-5xl text-xl mb-4 mt-6">Feature</h1>
    <div class=" sm:grid-cols-2 grid-cols-1  grid   grid-flow-row gap-6  w-full ">
        @foreach ($story as $item)
            <div class="flex flex-col">
                <img src="{{asset('storage/files/photos/'.$item->img)}}" alt="" class="sm:h-64 h-44 w-full object-center object-cover">
                <div class="bg-black py-4 px-4">
                    <a href="{{ route($item->slug, app()->getlocale() )}}" class="text-white text-xl">{{$item->titleID}}</a>
                </div>
            </div>
        @endforeach


    </div>
</div>
