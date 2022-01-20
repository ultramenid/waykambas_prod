@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
    <!-- content -->
    <div class="px-4 flex flex-col space-y-6 max-w-5xl mx-auto  py-12">
        <div class="prose max-w-none">
            {!! $content->textwhoweare !!}
        </div>

    </div>





    @include('partials.footer')
@endsection

