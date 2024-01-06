@extends('layouts.index')


@section('content')
    @include('partials.topbar')
   @include('partials.new-navbar')

    {{-- diary --}}
    <div class="max-w-5xl mx-auto px-4 sm:mt-16 mt-4">
        <h1 class="font-extrabold font-satunya sm:text-5xl text-2xl">Green Diary</h1>
        @if ($diary[0])
            <div class="flex sm:flex-row flex-col items-center border border-gray-300 mt-4">
                <a href="{{ route('diarycontent', [app()->getLocale(),  $diary[0]->slug]) }}" class="sm:w-7/12 w-full">
                    @if (in_array(pathinfo(asset('storage/files/photos/'.$diary[0]->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                <video class="sm:h-green-diary-1 h-52 w-full  object-cover object-center video-bg" controls >
                                    <source src="{{asset('storage/files/photos/'.$diary[0]->img)}}" type="video/mp4" >
                                </video>
                            @else
                            <img src="{{asset('storage/files/photos/'.$diary[0]->img)}}" alt="" class="sm:h-green-diary-1 h-52 w-full  object-cover object-center">
                    @endif
                </a>
                {{-- <img src="{{ $diary[0]->img }}" alt="" class="w-full h-full"> --}}
                <div class="sm:w-5/12 w-full flex justify-center sm:px-10 px-4 py-4">
                    <div class="flex flex-col gap-5">
                        <a href="{{ route('diarycontent', [app()->getLocale(),  $diary[0]->slug]) }}" class="sm:text-4xl text-xl font-bold">{{$diary[0]->title}}</a>
                        <p class="sm:text-xl text-sm">{{$diary[0]->imgDesc}}</p>
                    </div>
                </div>
            </div>
        @endif


        <div class="flex flex-row  scrollbar-hide overflow-x-scroll h-full   gap-4  md:mt-12 mt-6 snap-x snap-mandatory">
            @foreach ($diary as $key => $item)
                <!-- card -->
                @if ($key > 0)
                <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  border border-gray-300">
                    {{-- <img
                    class="w-full h-52 object-cover"
                    src="{{asset('storage/files/photos/'.$item->img)}}"
                    alt=""> --}}
                    <a href="{{ route('diarycontent', [app()->getLocale(),  $item->slug]) }}" class="sm:w-7/12 w-full">
                        @if (in_array(pathinfo(asset('storage/files/photos/'.$item->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                    <video class="w-full h-52 object-cover object-center video-bg" controls >
                                        <source src="{{asset('storage/files/photos/'.$item->img)}}" type="video/mp4" >
                                    </video>
                                @else
                                <img src="{{asset('storage/files/photos/'.$item->img)}}" alt="" class="w-full h-52 object-cover object-center">
                        @endif
                    </a>

                    <a href="{{ route('diarycontent', [app()->getLocale(),  $item->slug]) }}" class="md:mt-6 mt-3 text-xl font-bold sm:px-6 px-4 flex-shrink-0 flex">{{$item->title}}
                    </a>
                    <div class="mt-4 px-6 text-sm mb-6">
                        {{$item->imgDesc}}
                    </div>
                </div>
                @endif

            @endforeach


        </div>

        <div class="flex justify-center mt-8">
            <a href="{{ route('diary', app()->getlocale() )}}" class="text-xl font-bold bg-green-700 px-12 text-white py-1 font-satunya">more</a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 border-t border-gray-400 mt-6"></div>

    {{-- a to z --}}
    <div class="max-w-3xl mx-auto px-4 mt-16">
        <h1 class="flex justify-center sm:text-5xl text-4xl font-bold text-center">A to Z Restorasi Kadut</h1>
        <p class="flex justify-center text-center mt-6 sm:text-xl text-base">Kenapa di Kadut. Apa urgensi dan nilai pentingnya. Apa-apa saja yang dikerjakan. Kenapa tindakan tertentu dilakukan. Bagaimana pelibatan masyarakat. Dan berbagai hal teknis lainnya.</p>
    </div>

    <div class="max-w-5xl mx-auto px-4  flex gap-6 py-12 scrollbar-hide overflow-x-scroll snap-x snap-mandatory">
        <div class="relative w-56 h-64 sm:flex-shrink flex-shrink-0 snap-center">
            <img src="{{ asset('img/restorasi.jpeg') }}" alt="Way kambas Rawa Kadut" class="relative object-cover object-center h-full w-full">
            <div class="absolute bottom-0 left-0 right-0 top-0 grid place-items-center">
                <a href="new#konteks" class="text-white font-black text-xl">KONTEKS</a>
            </div>
        </div>

        <div class="relative  w-56 h-64 sm:flex-shrink flex-shrink-0 snap-center">
            <img src="{{ asset('img/restorasi.jpeg') }}" alt="Way kambas Rawa Kadut" class="relative object-cover object-center h-full w-full">
            <div class="absolute bottom-0 left-0 right-0 top-0 grid place-items-center">
                <a href="new#silvikultur" class="text-white font-black text-xl">SILVIKULTUR</a>
            </div>
        </div>

        <div class="relative  w-56 h-64 sm:flex-shrink flex-shrink-0 snap-center">
            <img src="{{ asset('img/restorasi.jpeg') }}" alt="Way kambas Rawa Kadut" class="relative object-cover object-center h-full w-full">
            <div class="absolute bottom-0 left-0 right-0 top-0 grid place-items-center">
                <a href="new#penanggulangankebakaran" class="text-white font-black text-xl text-center">PENANGGULANGAN KEBAKARAN</a>
            </div>
        </div>

        <div class="relative  w-56 h-64 sm:flex-shrink flex-shrink-0 snap-center">
            <img src="{{ asset('img/restorasi.jpeg') }}" alt="Way kambas Rawa Kadut" class="relative object-cover object-center h-full w-full">
            <div class="absolute bottom-0 left-0 right-0 top-0 grid place-items-center">
                <a href="new#pelibatanmasyarakat" class="text-white font-black text-xl text-center">PELIBATAN MASYARAKAT</a>
            </div>
        </div>

    </div>

    <div class="max-w-6xl mx-auto px-4 border-t border-gray-400 mt-6"></div>

    {{-- about --}}
    <div class="max-w-5xl mx-auto px-4 sm:mt-16 mt-4 py-12">
        <div class="flex sm:flex-row flex-col justify-between gap-8 ">
            <div class="flex flex-col gap-6 sm:w-4/12 w-full">
                <h1 class="text-5xl font-semibold">about</h1>
                <p>Siapa kami. Sekilas Taman Nasional Way Kambas. Gambaran ringkas Restorasi Kadut.</p>
            </div>
            <div class="flex flex-col gap-6 sm:w-3/12 w-full">
                <div class="flex flex-col gap-6">
                    <h1 class="text-2xl font-bold text-green-700">who we are</h1>
                    <p class="text-sm">Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.</p>
                </div>
                <span class="border-t border-gray-400"></span>
                <div class="flex flex-col gap-6">
                    <h1 class="text-2xl font-bold text-green-700">restorasi rawa kadut</h1>
                    <p class="text-sm">Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.</p>
                </div>
            </div>

            <div class="flex flex-col gap-6 sm:w-3/12 w-full">
                <div class="flex flex-col gap-6">
                    <h1 class="text-2xl font-bold text-green-700">way kambas</h1>
                    <p class="text-sm">Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.</p>
                </div>
                <span class=""></span>

            </div>
        </div>
    </div>

    {{-- story --}}
    <div class="bg-green-600 py-6 mt-12">
        <div class="max-w-3xl mx-auto px-4 mt-4">
            <h1 class="flex justify-center sm:text-5xl text-4xl font-bold text-white text-center">Feature</h1>
            <p class="flex justify-center text-center mt-6 sm:text-2xl text-base text-white mb-48">Cerita dari lapangan. Dikisahkan sendiri atau oleh pihak lain.</p>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 -mt-40">
        <div class="flex sm:flex-row flex-col items-center border border-gray-400 bg-white ">
            <div class="sm:w-6/12 w-full flex flex-col sm:gap-12 gap-4 justify-center items-center sm:px-12 px-4 py-4">
                <h1 class="text-3xl text-center font-bold">{{$story[0]->titleID}}</h1>
                <p class="text-center sm:text-base text-sm">{{$story[0]->imgDescID}}</p>
            </div>
            <img src="{{ asset('storage/files/photos/'.$story[0]->img) }}" alt="" class="sm:w-6/12 w-full sm:h-96 h-full object-cover object-center">
        </div>
        <div class="flex sm:flex-row flex-col items-center border border-gray-400 bg-white  mt-4">
            <img src="{{ asset('storage/files/photos/'.$story[1]->img) }}" alt="" class="sm:w-6/12 w-full sm:h-96 h-full object-cover object-center">

            <div class="sm:w-6/12 w-full flex flex-col sm:gap-12 gap-4 justify-center items-center sm:px-12 px-4 py-4">
                <h1 class="text-3xl text-center font-bold">{{$story[1]->titleID}}</h1>
                <p class="text-center sm:text-base text-sm">{{$story[1]->imgDescID}}</p>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <a href="{{ route('story', app()->getlocale() )}}" class="text-xl font-bold bg-green-700 px-12 text-white py-1 font-satunya">read</a>
        </div>
    </div>

    {{-- footer --}}
    @include('partials.new-footer')


@endsection
