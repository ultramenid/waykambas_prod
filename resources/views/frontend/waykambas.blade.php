@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
     <!-- content -->
     <div class="flex flex-col space-y-6 max-w-5xl mx-auto px-4 py-2">
        <div class="prose max-w-none ">
            {!! $content->textwaykambas !!}
        </div>
    </div>





    @include('partials.footer')
@endsection

