@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
        <div class="relative z-10 max-w-3xl mx-auto mt-6 py-12  px-4 mb-20" x-data="{ open: '' }">
            <h1 class="text-center mb-6 text-xl font-bold">{{$text}}</h1>
            <?php foreach($content as $item) : ?>
                <template x-if="open!=='{{$item->id}}'">
                    <div class="<?php if($item->id == 1){ echo 'border-t border-b ';}else{ echo'border-b'; } ?>  cursor-pointer  py-4 px-4 font-bold"
                        style="border-color: #000000"
                        x-data="{ icon:false}"
                        @click="open = '{{$item->id}}'"
                        @mouseover="icon=true"
                        @mouseover.away="icon=false"
                        :class="{ 'bg-gray-100' : open === '{{$item->id}}' }"
                        >
                        <div class="flex justify-between space-x-10">
                            <a class="text-black" >
                            {{$item->title}}
                            </a>
                            <svg x-show="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open==='{{$item->id}}'" class="mt-2">
                            <div  class="mt-6 prose max-w-none text-sm" >
                                {!! $item->az !!}
                            </div>
                        </div>
                    </div>
                </template>
                <template x-if="open==='{{$item->id}}'">
                    <div class="<?php if($item->id == 1){ echo 'border-t border-b';}else{ echo'border-b'; } ?> cursor-pointer  py-4 px-4 "
                        x-data="{ icon:false}"
                        style="border-color: #000000"
                        @click="open = ''"
                        @mouseover="icon=true"
                        @mouseover.away="icon=false"
                        :class="{ 'bg-gray-100' : open === '{{$item->id}}' }"
                        >
                        <div class="flex justify-between space-x-10">
                            <a class="font-bold text-black" >
                                {!! $item->title !!}
                            </a>
                            <svg x-show="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open==='{{$item->id}}'" class="mt-2">
                            <div  class="mt-6 prose max-w-none text-sm" >
                                {!! $item->az !!}
                            </div>
                        </div>
                    </div>
                </template>

            <?php endforeach ?>
        </div>




    @include('partials.footer')
@endsection

