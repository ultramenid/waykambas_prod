@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <div>
        <livewire:cms-diari-component />
    </div>
@endsection
