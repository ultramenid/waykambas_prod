@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
     <!-- content -->
    <div class="flex flex-col space-y-6 max-w-5xl mx-auto py-12 px-4">
        <div class="prose max-w-none ">
            {!! $content->textsiteplan !!}
        </div>
    </div>




    @include('partials.new-footer')
@endsection

