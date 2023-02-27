@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')

    <!-- content -->
    <div class=" max-w-5xl mx-auto py-4 px-4 ">
        <livewire:frontend-story-component />

    </div>


    @include('partials.footer')
@endsection

