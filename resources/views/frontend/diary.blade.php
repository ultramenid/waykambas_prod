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
                    <h1 class="lg:text-2xl md:text-1xl text-xl font-bold mb-6">{{ date("Y m d", strtotime($item->publishdate))}}</h1>
                </div>
                <div class="sm:w-10/12 w-full flex flex-wrap border-t border-gray-400 py-4">
                    {{-- loop here --}}
                    @foreach (getContentDiary($item->publishdate) as $list)
                    <div class="sm:w-5/12 w-full sm:mr-8 mr-0 mb-4 " x-data="{item2:false}">
                        {{-- image --}}
                        <a href="{{asset('storage/files/photos/'.$list->img)}}" data-title="{{ date("Y F d", strtotime($list->publishdate))}}"
                            data-description="<b>{{$list->title}}</b> {{ $list->imgDesc}}" class="mt-4 object-cover object-top w-full h-72 glightbox">
                            <img src="{{asset('storage/files/photos/'.$list->img)}}" alt="{{$list->title}}" />
                        </a>
                        <div class="mt-2">
                            <a class=" font-bold">{{$list->title}}</a> <a class="">{{ $list->imgDesc}}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
        @endforeach
    </div>


    <script>
        const lightbox = GLightbox({
            selector: '.glightbox',
        });
    </script>

    @include('partials.footer')
@endsection

