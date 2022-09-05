<div>
    <div class="flex sm:justify-end mb-12" wire:ignore x-init="flatpickr('#start', { enableTime: false,dateFormat: 'Y-m-d', disableMobile: 'true'}), flatpickr('#end', { enableTime: false,dateFormat: 'Y-m-d', disableMobile: 'true'});">

        <div class="flex sm:flex-row flex-col justif-between sm:items-center sm:space-x-4 space-x-0 sm:space-y-0 space-y-2 sm:w-6/12 w-full">
            <a class="whitespace-nowrap">Filter Tanggal </a>
            <input id="start" type="text" class="bg-white  text-black rounded w-full border  py-2 px-4 focus:outline-none border-black "  wire:model='start' placeholder="Dari. . .">
            <input id="end" type="text" class="bg-white  text-black rounded w-full border  py-2 px-4 focus:outline-none border-black "  wire:model='end' placeholder="Sampai. . .">
        </div>
    </div>
    @foreach ($diaries as $item)
            <section class="grid sm:grid-cols-4 grid-cols-1 sm:gap-12 gap-0">
                <div class="col-span-1">
                    <h1 class="lg:text-2xl md:text-1xl text-xl font-bold mb-6">{{ date("Y F d", strtotime($item->publishdate))}}</h1>
                </div>
                <div class="sm:col-span-3 col-span-1 grid sm:grid-cols-2 grid-cols-1 grid-flow-row gap-6 border-t border-gray-400 py-4">
                    {{-- loop here --}}
                    @foreach (getContentDiary($item->publishdate) as $list)
                    <div class="w-full sm:mr-8 mr-0 mb-4 " x-data="{item2:false}">
                        {{-- image --}}
                        <a href="{{ route('diarycontent', [app()->getLocale(),  $list->slug]) }}">
                            @if (in_array(pathinfo(asset('storage/files/photos/'.$list->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                        <video class="spect-w-16 aspect-h-9   bg-cover bg-center" controls>
                                            <source src="{{asset('storage/files/photos/'.$list->img)}}" type="video/mp4" >
                                        </video>
                                    @else
                                    <img src="{{asset('storage/files/photos/'.$list->img)}}" alt="" class="spect-w-16 aspect-h-9   bg-cover bg-center">
                            @endif
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('diarycontent', [app()->getLocale(),  $list->slug]) }}" class=" font-bold">{{ Str::limit($list->title, 60) }}  </a> <a class="">{{ Str::limit($list->imgDesc, 155) }} </a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </section>
        @endforeach
        @if ($diaries->hasMorePages())
            <div class="text-center mt-12">
                <button class="bg-black text-white py-2 px-4" wire:click="getMore" wire:loading.remove>
                    Load More
                </button>
                <button wire:loading wire:target='getMore'>
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        @endif
</div>
