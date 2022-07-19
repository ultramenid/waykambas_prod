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
                    <h1 class="lg:text-2xl md:text-1xl text-xl font-bold mb-6">{{ date("Y F d", strtotime($item->publishdate))}}</h1>
                </div>
                <div class="sm:w-10/12 w-full flex flex-wrap border-t border-gray-400 py-4">
                    {{-- loop here --}}
                    @foreach (getContentDiary($item->publishdate) as $list)
                    <div class="sm:w-5/12 w-full sm:mr-8 mr-0 mb-4 " x-data="{item2:false}">
                        {{-- image --}}
                        <a href="{{asset('storage/files/photos/'.$list->img)}}" data-title="{{ date("Y F d", strtotime($list->publishdate))}}"
                            data-description="<b>{{$list->title}}</b> {{ $list->imgDesc}}" class="mt-4 object-cover object-top w-full h-72 glightbox">
                            @if (in_array(pathinfo(asset('storage/files/photos/'.$list->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                        <video class="spect-w-16 aspect-h-9  sm:block hidden bg-cover bg-center" controls>
                                            <source src="{{asset('storage/files/photos/'.$list->img)}}" type="video/mp4" >
                                        </video>
                                    @else
                                    <img src="{{asset('storage/files/photos/'.$list->img)}}" alt="" class="spect-w-16 aspect-h-9  sm:block hidden bg-cover bg-center">
                                    @endif
                        </a>
                        <div class="mt-2">
                            <a class=" font-bold">{{ Str::limit($list->title, 60) }}  </a> <a class="">{{ Str::limit($list->imgDesc, 155) }} </a>
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

