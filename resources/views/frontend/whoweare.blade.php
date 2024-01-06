@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
    <!-- content -->
    <div class="px-4 flex flex-col max-w-2xl mx-auto py-10 ">
        <h1 class="text-3xl font-bold mt-12">Who We Are</h1>
        <div class="prose max-w-none mb-12">
            {!! $content->textwhoweare !!}
        </div>

    </div>





    @include('partials.new-footer')
@endsection

