@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
     <!-- content -->
     <div class="flex flex-col  max-w-2xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mt-12">Way Kambas</h1>

        <div class="prose max-w-none mb-12">
            {!! $content->textwaykambas !!}
        </div>
    </div>





    @include('partials.new-footer')
@endsection

