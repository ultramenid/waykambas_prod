@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
     <!-- content -->
     <div class="flex flex-col space-y-6 max-w-2xl mx-auto py-12 px-4">
        <div class="prose max-w-none">
            {!! $content->textrawakadut !!}
        </div>
    </div>




    @include('partials.footer')
@endsection

