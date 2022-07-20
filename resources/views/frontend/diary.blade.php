@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
     <!-- content -->
     <div class=" max-w-7xl mx-auto py-12 px-4">
        <livewire:frontend-diary-component />

    </div>


    <script>
        const lightbox = GLightbox({
            selector: '.glightbox',
        });
    </script>

    @include('partials.footer')
@endsection

