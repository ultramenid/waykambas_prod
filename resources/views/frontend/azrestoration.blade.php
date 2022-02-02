@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
    <div class="py-12 max-w-3xl mx-auto px-4 min-h-screen" x-data="{open : ''}">
        @foreach ($content as $item)
        <div class=" <?php if($item->id ===1){echo 'border-t border-b';}else{ echo 'border-b';} ?>  border-black py-4" >
            <h1 @click = "open = '{{$item->id}}'" class="text-2xl font-semibold select-none cursor-pointer">{{$item->title}}</h1>
            <div x-show="open === '{{$item->id}}'" class="mt-6 prose max-w-none text-sm">
                {!! $item->az !!}
            </div>
        </div>
        @endforeach

    </div>




    @include('partials.footer')
@endsection

