@extends('layouts.index')


@section('content')
    @include('partials.topbar')
   @include('partials.new-navbar')
    <div class="max-w-2xl mx-auto px-4 mt-28">
        <h1 class="flex justify-center sm:text-5xl text-4xl font-bold text-center">Kinerja</h1>
        <p class="flex justify-center text-center mt-6 sm:text-xl text-base">Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.</p>
    </div>
     {{-- diary --}}
     <div class="max-w-5xl mx-auto px-4 sm:mt-16 mt-4">
        <div>
            <h1 class="text-green-600 text-3xl font-satunya font-bold">2023</h1>
            <div class="flex sm:flex-row flex-col items-center border border-gray-300 mt-2">
                <img src="{{ asset('img/restorasi.jpeg') }}" alt="" class="sm:w-7/12 w-full sm:h-green-diary-1 h-full  object-cover object-center">
                <div class="sm:w-5/12 w-full flex justify-center sm:px-10 px-4 py-4">
                    <div class="flex flex-col gap-5">
                        <a href="{{ route('kinerja2023', app()->getlocale() )}}" class="sm:text-4xl text-xl font-bold">Pengisian media tanam ke dalam polybag untuk pembibitan.</a>
                        <p class="sm:text-xl text-sm">Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="flex flex-row  scrollbar-hide overflow-x-scroll h-full   gap-4  md:mt-12 mt-6 snap-x snap-mandatory">
            <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12 ">
                <h1 class="text-green-600 text-3xl font-satunya font-bold mb-2">2022</h1>
                <div class=" border border-gray-300">
                    <img
                    class="w-full h-52 object-cover object-center"
                    src="{{ asset('img/restorasi.jpeg') }}"
                    alt="">


                    <a href="#" class="md:mt-6 mt-3 text-xl font-bold sm:px-6 px-4 flex-shrink-0 flex">Pengisian media tanam ke dalam polybag untuk pembibitan.
                    </a>
                    <div class="mt-4 px-6 text-sm mb-6">
                        Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.
                    </div>
                </div>
            </div>
            <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12">
                <h1 class="text-green-600 text-3xl font-satunya font-bold mb-2">2021</h1>
                <div class="  border border-gray-300">
                    <img
                    class="w-full h-52 object-cover object-center"
                    src="{{ asset('img/restorasi.jpeg') }}"
                    alt="">


                    <a href="#" class="md:mt-6 mt-3 text-xl font-bold sm:px-6 px-4 flex-shrink-0 flex">Pengisian media tanam ke dalam polybag untuk pembibitan.
                    </a>
                    <div class="mt-4 px-6 text-sm mb-6">
                        Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.
                    </div>
                </div>
            </div>
            <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12">
                <h1 class="text-green-600 text-3xl font-satunya font-bold mb-2">2020</h1>
                <div class="  border border-gray-300">
                    <img
                    class="w-full h-52 object-cover object-center"
                    src="{{ asset('img/restorasi.jpeg') }}"
                    alt="">


                    <a href="#" class="md:mt-6 mt-3 text-xl font-bold sm:px-6 px-4 flex-shrink-0 flex">Pengisian media tanam ke dalam polybag untuk pembibitan.
                    </a>
                    <div class="mt-4 px-6 text-sm mb-6">
                        Pengisian media tanam kedalam polybag kali ini mendapatkan 3400 polybag sudah terisi, dan selanjutnya dilakukan pembibitan di media tanam yang disiapkan.
                    </div>
                </div>
            </div>




        </div>


    </div>

    @include('partials.new-footer')
@endsection
