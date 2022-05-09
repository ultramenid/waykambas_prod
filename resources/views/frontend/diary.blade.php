@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.heroPage')
     <!-- content -->
     <div class=" max-w-7xl mx-auto py-12 px-4">
        @foreach ($diary as $item)
            <section class="flex sm:flex-row flex-col mb-12">
                <div class="sm:w-2/12 w-full">
                    <h1 class="lg:text-2xl md:text-1xl text-xl font-bold mb-6">{{ date("Y M d", strtotime($item->publishdate))}}</h1>
                </div>
                <div class="sm:w-10/12 w-full flex flex-wrap border-t border-gray-400">
                    {{-- loop here --}}
                    @foreach (getContentDiary($item->publishdate) as $list)
                    <div class="sm:w-5/12 w-full sm:mr-8 mr-0 mb-4 " x-data="{item2:false}">
                        {{-- image --}}
                        <div class="relative mt-4">
                            <img src="{{asset('storage/files/photos/'.$list->img)}}" alt="" class="object-cover object-top w-full h-72">
                            <div @click="item2=!item2" class="z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-90 bottom-2 right-3 h-4 w-4  text-black flex justify-center items-center">
                                <a class="text-sm select-none">i</a>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-full bg-gray-700 opacity-80 overflow-y-auto" x-show="item2">
                                <div class=" mx-auto text-white flex items-center py-2 px-4 text-xs ">
                                    {{ $list->title}}
                                </div>
                            </div>
                        </div>
                        <p class="text-sm mt-2 text-gray-500">{{$list->diary}}</p>
                    </div>
                    @endforeach

                </div>
            </section>
        @endforeach
    </div>




    @include('partials.footer')
@endsection

