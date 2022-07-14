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
                        </div>
                        <div class="mt-2">
                            <a class=" font-bold">{{$list->title}}</a> <a class="text-xs mt-1">{{ $list->imgDesc}}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
        @endforeach
    </div>




    @include('partials.footer')
@endsection

