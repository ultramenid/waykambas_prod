@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <div>
        <livewire:adddiary-component/>
    </div>
@endsection
