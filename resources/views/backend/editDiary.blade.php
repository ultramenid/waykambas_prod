@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <div>
        <livewire:editdiary-component :idDiary=$id />
    </div>
@endsection
