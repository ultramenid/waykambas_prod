@extends('layouts.index')


@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')
        <div class="max-w-3xl mx-auto py-3 px-4 border-b-2 border-green-600 mt-12" id="konteks">
            <h1 class="text-green-600 font-bold text-3xl font-satunya">KONTEKS</h1>
        </div>
        <div class="max-w-3xl mx-auto mt-12" x-data="{ open: '' }">
            @if ($konteks)
                @foreach ($konteks as $item)
                <div class="border border-gray-300 px-4 py-2 mb-4" >
                    <div class="flex gap-1">
                        <template x-if="open==='{{$item->id}}'">
                            <a class="font-bold">-</a>
                        </template>
                        <template x-if="open!=='{{$item->id}}'">
                            <a class="font-bold">+</a>
                        </template>
                        <h1 @click="open = '{{$item->id}}'" class="font-bold">{{$item->title}}</h1>
                    </div>
                    <div x-show="open==='{{$item->id}}'" class="mt-4 px-4" style="display: none !important;">
                        <div  class="w-full prose max-w-none">
                            {!! $item->az !!}
                        </div>
                    </div>

                </div>
                @endforeach
            @endif


        </div>


        <div class="max-w-3xl mx-auto py-3 px-4 border-b-2 border-green-600 mt-12" id="silvikultur">
            <h1 class="text-green-600 font-bold text-3xl font-satunya">Silvikultur</h1>
        </div>
        <div class="max-w-3xl mx-auto mt-12" x-data="{ open: '' }">
            @if ($silvikultur)
                @foreach ($silvikultur as $item)
                <div class="border border-gray-300 px-4 py-2 mb-4" >
                    <div class="flex gap-1">
                        <template x-if="open==='{{$item->id}}'">
                            <a class="font-bold">-</a>
                        </template>
                        <template x-if="open!=='{{$item->id}}'">
                            <a class="font-bold">+</a>
                        </template>
                        <h1 @click="open = '{{$item->id}}'" class="font-bold">{{$item->title}}</h1>
                    </div>
                    <div x-show="open==='{{$item->id}}'" class="mt-4 px-4" style="display: none !important;">
                        <div  class="w-full prose max-w-none">
                            {!! $item->az !!}
                        </div>
                    </div>

                </div>
                @endforeach
            @endif


        </div>

        <div class="max-w-3xl mx-auto py-3 px-4 border-b-2 border-green-600 mt-12" id="penanggulangankebakaran">
            <h1 class="text-green-600 font-bold text-3xl font-satunya">Penanggulangan Kebakaran</h1>
        </div>
        <div class="max-w-3xl mx-auto mt-12" x-data="{ open: '' }">
            @if ($penanggulangankebakaran)
                @foreach ($penanggulangankebakaran as $item)
                <div class="border border-gray-300 px-4 py-2 mb-4" >
                    <div class="flex gap-1">
                        <template x-if="open==='{{$item->id}}'">
                            <a class="font-bold">-</a>
                        </template>
                        <template x-if="open!=='{{$item->id}}'">
                            <a class="font-bold">+</a>
                        </template>
                        <h1 @click="open = '{{$item->id}}'" class="font-bold">{{$item->title}}</h1>
                    </div>
                    <div x-show="open==='{{$item->id}}'" class="mt-4 px-4" style="display: none !important;">
                        <div  class="w-full prose max-w-none">
                            {!! $item->az !!}
                        </div>
                    </div>

                </div>
                @endforeach
            @endif


        </div>


        <div class="max-w-3xl mx-auto py-3 px-4 border-b-2 border-green-600 mt-12" id="pelibatanmasyarakat">
            <h1 class="text-green-600 font-bold text-3xl font-satunya">Pelibatan Masyarakat</h1>
        </div>
        <div class="max-w-3xl mx-auto mt-12" x-data="{ open: '' }">
            @if ($pelibatanmasyarakat)
                @foreach ($pelibatanmasyarakat as $item)
                <div class="border border-gray-300 px-4 py-2 mb-4" >
                    <div class="flex gap-1">
                        <template x-if="open==='{{$item->id}}'">
                            <a class="font-bold">-</a>
                        </template>
                        <template x-if="open!=='{{$item->id}}'">
                            <a class="font-bold">+</a>
                        </template>
                        <h1 @click="open = '{{$item->id}}'" class="font-bold">{{$item->title}}</h1>
                    </div>
                    <div x-show="open==='{{$item->id}}'" class="mt-4 px-4" style="display: none !important;">
                        <div  class="w-full prose max-w-none">
                            {!! $item->az !!}
                        </div>
                    </div>

                </div>
                @endforeach
            @endif


        </div>
    @include('partials.new-footer')
@endsection
