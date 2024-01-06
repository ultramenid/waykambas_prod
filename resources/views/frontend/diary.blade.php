@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
     <!-- content -->
     <div class=" max-w-7xl mx-auto py-4 px-4">
        <livewire:frontend-diary-component />

    </div>



    @include('partials.new-footer')
@endsection

