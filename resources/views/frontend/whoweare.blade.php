@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.hero')
    <!-- content -->
    <div class="px-4 flex flex-col space-y-6 max-w-7xl mx-auto sm:py-32 py-12">
        <h1 class="sm:text-6xl text-5xl font-bold sm:mb-12 mb-4">A glimpse of Way Kambas National Park        </h1>
        <div class="prose max-w-none">
            {!! $content->textwhoweare !!}
        </div>

    </div>





    @include('partials.footer')
@endsection

