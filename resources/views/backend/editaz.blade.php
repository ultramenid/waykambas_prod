@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <div>
        <livewire:edit-az-component :idaz=$id />
    </div>
@endsection
