@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
     <!-- content -->
     <div class="flex flex-col  max-w-2xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mt-12">Restorasi Kadut</h1>
        <div class="prose max-w-none mt-6 mb-12">
            {!! $content->textrawakadut !!}
        </div>
    </div>


    @include('partials.new-footer')
@endsection

