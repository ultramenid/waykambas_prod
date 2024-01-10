@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')

    <div class="flex items-center bg-green-600">
        <img src="{{ asset('assets/herofajar.png') }}" alt="Matikan Api Menjaga Puspa" class="sm:w-6/12 w-full h-[90vh] object-cover object-center">
        <div class="flex flex-col gap-12  sm:w-6/12 w-full">
            <h1 class="font-satunya text-white font-bold text-2xl uppercase">Feature Story</h1>
        </div>
    </div>

    @include('partials.new-footer')

@endsection
