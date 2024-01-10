@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')

    <div class="flex sm:flex-row flex-col gap-10 items-center justify-center bg-green-700">
        <img src="{{ asset('assets/Fajar.png') }}" alt="Matikan Api Menjaga Puspa" class="sm:w-6/12 w-full sm:h-[90vh] h-[60vh] object-cover object-left">
        <div class="flex  sm:px-28 px-4 sm:w-6/12 w-full">
            <div class="flex flex-col gap-8 sm:w-8/12 w-full">
                <h1 class="font-satunya text-white font-bold text-2xl uppercase">Feature</h1>
                <h1 class="text-5xl font-black text-white ">Matikan Api Menjaga Puspa</h1>
                <p class="text-white">Fajar Sandhikan dan timnya melawan api yang melahap ladang ilalang di Rawa Kadut, Taman Nasional Way Kambas, Lampung. Hasil kerja mereka berhasil menyelamatkan program reforestasi 100 hektare dengan sekitar 20 ribu pohon.</p>
                <img src="{{ asset('assets/hazeid.png') }}" alt="Matikan Api Menjaga Puspa" class="sm:w-52 w-full mb-12">
            </div>
        </div>
    </div>


    @include('partials.new-footer')

@endsection
