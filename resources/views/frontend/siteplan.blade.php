@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.hero')
     <!-- content -->
    <div class="flex flex-col space-y-6 max-w-7xl mx-auto sm:py-32 py-12 px-4">
        <h1 class="sm:text-7xl text-5xl font-bold sm:mb-12 mb-4">Site Plan</h1>
        <div class="prose max-w-none">
            {!! $content->textsiteplan !!}
        </div>
    </div>




    @include('partials.footer')
@endsection

