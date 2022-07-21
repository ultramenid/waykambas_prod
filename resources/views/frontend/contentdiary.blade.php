@extends('layouts.index')

@section('meta')
    @include('partials.diaryMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroContent')

    <div class="mx-auto max-w-7xl flex sm:flex-row flex-col justify-between sm:pt-12 pt-4 pb-24 px-4 sm:space-x-4 space-x-0 sm:space-y-0 space-y-4">
        <div class="sm:w-8/12 w-fulll h-full flex justify-center items-center">
            @if (in_array(pathinfo(asset('storage/files/photos/'.$data->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
            <video class="spect-w-16 aspect-h-9   bg-cover bg-center" controls>
                <source src="{{asset('storage/files/photos/'.$data->img)}}" type="video/mp4" >
            </video>
                    @else
                    <img src="{{asset('storage/files/photos/'.$data->img)}}" alt="" class="spect-w-16 aspect-h-9   bg-cover bg-center">
            @endif
        </div>
        <div class="sm:w-4/12 w-full">
            <a class="font-bold"> {{$data->titleID}} </a>
            <p class="leading-relaxed mt-4">{{$data->imgDescID}}</p>
        </div>

    </div>

    @include('partials.footerContent')
@endsection

