@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')
    @include('partials.topbar-lang')
    @include('partials.new-navbar-lang')

    <div class="flex sm:flex-row flex-col gap-10 items-center justify-center bg-green-700">
        <img src="{{ asset('assets/Fajar.png') }}" alt="Matikan Api Menjaga Puspa" class="sm:w-6/12 w-full sm:h-[90vh] h-[60vh] object-cover object-left">
        <div class="flex  sm:px-28 px-4 sm:w-6/12 w-full">
            <div class="flex flex-col gap-8 sm:w-8/12 w-full">
                <h1 class="font-satunya text-white font-bold text-2xl uppercase">Feature</h1>
                <h1 class="text-5xl font-black text-white ">ALL IN A DAYS WORK</h1>
                <p class="text-white">Fajar Sandhika and his team fought fires that were
                    ravaging a weed-tangled field at Rawa Kadut in Way
                    Kambas National Park, Lampung. Their work saved
                    some 22,000 trees in a 100-hectare reforestation
                    program.</p>
                <img src="{{ asset('assets/haze.png') }}" alt="Matikan Api Menjaga Puspa" class="sm:w-52 w-full mb-12">
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4">
        <div class=" py-4  border-b border-b-gray-400">
            <h2 class=" font-bold mb-2">Completely copied from:</h2>
            <p  class="mt-1 mb-2 underline text-green-500">Published by <a href="https://auriga.or.id/resource/reference/matikan-api-menjaga-puspa.pdf" class="font-bold underline text-green-500">Tempo Magazine January 3 2016 edition.</a> Rewritten as the original.</p>
        </div>
    </div>

    <div class="max-w-2xl mx-auto px-4">
        <p class="leading-relaxed tracking-wide mt-8">
            SMOKE billowed up at the southeast end of the Rawa Kadut reforestation
            camp at Way Kambas National Park in Lampung, August 9. It was 9am. Fajar
            Sandhika, reforestation coordinator at the Silvagama Foundation, and his
            colleague Arum Mutasim moved quickly to check out the source of the blaze.
            Hopping on a motorbike, they sped down a trail through dense foliage.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            At the location, they assessed that the fire was heading west and would
            probably pass a spot across the Kadut river behind the camp. Since the wind
            was not blowing hard, they estimated the fire would reach it after 12pm. Fajar
            and Arum raced back to the camp.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            “When we reached camp, we were quickly assigned tasks,” Fajar told Tempo
            at Rawa Kadut two weeks ago. Three colleagues tried to break the fire’s
            path at the logistics road. Fajar and Arum had to go to Bungur, the closest
            neighborhood, to get more help and to coordinate with the Bungur Park
            management.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            Later, Fajar and Arum again sped off on the motorbike down a 12-kilometer,
            wind- ing path through tall grass and another kilometer through dense forest.
            Before reaching Bungur, they had to cross the Sukadana river on a wooden
            raft and travel along a levee. In Bungur, they managed to recruit three people
            willing to help.
        </p>
    </div>

    <div class="max-w-4xl mx-auto px-4 mt-12">
        <h2 class="text-left text-2xl font-bold tracking-wider mb-10 ">“Fajar and his team were a great help. When a fire broke out
            somewhere, we got our first information from them. The replanting
            they did and their sharp monitoring of the area where they worked
            was a big boon for reforestation at Way Kambas.”</h2>
        <a class="font-black text-xl ">Suharno</a>
        <p class="font-semibold ">Junior Superintendent of the Forest Police, Firefighting Coordinator for Way Kambas National Park</p>
    </div>

    <div class="max-w-2xl mx-auto px-4 mt-12">
        <p class="leading-relaxed tracking-wide mt-8">
            ON the way back, they saw that the fire was some four kilometers from
            the Mataram camp belonging to AleRT, the Integrated Forest Conservation
            Alliance. This meant that in less than three hours, the fire had spread seven
            kilometers from the spot they had first seen.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            The team fought the fire with water pumps and branches cut from trees. The
            fire was finally out by 5:15pm. They also succeeded in putting out a fire on
            2.5 hectares of reforestation area. Exhausted, when they got back at around
            8:45pm, another fire was spotted east of the camp. The team went right back
            to work, extinguishing the fire some 45 minutes later.
        </p>
    </div>

    <div class="max-w-7xl mx-auto px-4 mt-12">
        <img src="{{ asset('assets/Fajar_tempo.png') }}" alt="">
        <p class="text-xs text-right mt-1">Fajar team members extinguish a fire in Rawa Kadut, Way Kambas National Park, Lampung, 9 August 2015</p>
    </div>

    <div class="max-w-7xl flex sm:flex-row flex-col-reverse gap-10 ml-auto sm:mt-16 mt-8 sm:px-12 px-4">
        <div class="sm:w-9/12 w-full sm:px-14 border-r border-gray-500">
            <p class="leading-relaxed tracking-wide ">All through August to October, the team at Silvagama Foundation discovered
                this was their additional work: keeping watch over the area, putting out
                fires and preventing flames from spreading. Fajar’s real job is actually doing
                reforestation work.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">The Silvagama Foundation, established on November 12, 2009, is involved in
                nature conservation work. At Way Kambas National Park, Silvagama works
                with the AleRT Consortium to carry out reforestation projects. AleRT gets its
                funding from the Tropical Forest Conservation Action for Sumatra (TFCASumatra).
            </p>
            <p class="leading-relaxed tracking-wide mt-8">Silvagama manages a reforestation area of about 100 hectares at Rawa Kadut,
                with a planting time frame of three years. The area is part of the Bungur SPTN
                II section of the national park. More than 9,200 trees were planted in the
                reforestation program started on February last year. Their target is to plant
                31,200 trees in three years. The trees planted are Schima wallichii evergreens,
                Peronema canescens evergreen bushes and Eugenia, which are all known to
                hold up well after forest fires. While above-ground trunks may be scorched,
                their roots survive and sprout new green branches in time. This is what Tempo
                saw at Rawa Kadut two weeks ago.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">“Our first plot of land was consumed by fire last year,” said Silvagama founder
                Timer Manurung. The area is fire-prone. Most of the fires are set by the
                community who believe burning makes the soil fertile and to flush out wild
                life, making them easier to hunt. Timer tasked Fajar to do the replanting and to
                control any fires. Fajar has been on duty since November 2014.
            </p>
        </div>
        <div class="sm:w-3/12 w-full relative sm:px-4">
            <h1 class="text-2xl font-bold text-green-800 font-satunya">Fajar Sandhika Negara Simanjuntak</h1>
            <p class="mt-2 mb-12"><a class="font-semibold">Date of birth:</a> Pandeglang, February 22, 1986</p>

            <a class="font-semibold">Education:</a>
            <p class="mb-12">Informatics and
                Computer Studies,
                Mathla’ul Anwar
                University, Banten</p>

            <a class="font-semibold">Organisasi:</a>
            <p class="mb-12">- Student Nature Lovers Club
                (Primapala) of Pandeglang,
                High School No.4 <br> - Nature Conservation
                Student Association
                (Himala), Mathla’ul Anwar
                University, Banten</p>

            <a class="font-semibold">Career:</a>
            <p class="">Auriga Nusantara Foundation
                (previously the Silvagama
                Foundation) (2011-to date)</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 mt-12">
        <h2 class="text-left text-2xl font-bold tracking-wider mb-10 ">“The program implementation is good, and he is always on location
            during fires. He coordinates well with the public, officials and the
            forest police on the ground. And he works closely with the head of
            SPTN II.”</h2>
        <a class="font-black text-xl ">Rama Budiana</a>
        <p class="font-semibold ">Coordinator, TFCA-Sumatra AleRT Consortium Program.</p>
    </div>

    <div class="max-w-2xl mx-auto px-4">
        <p class="leading-relaxed tracking-wide mt-8">When Fajar arrived on December a year ago, he decided not to wait for the
            fires to spread. He and his team quickly set up a fire break one kilometer long
            and 30 meters wide at Rawa Kadut. A fire break is land cleared of plants to halt
            the progress of fires. “I want to stop all the fires, so we don’t get a repeat of
            what happened last year, when we lost almost all our reforestation work,” he
            said.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">Fire breaks are effective in fighting fires when resources are limited. Last
            October, a fire broke out in the area at around at 3pm. Fajar, Arum and the
            team worked hard to put it out. However, it was too big and their equipment
            was limited. They decided to use the fire breaks to prevent the fire from
            reaching the reforestation area. That day, the team worked until 2am. At
            around 10am, another blaze was spotted west of camp but was quickly extinguished.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">“It’s great working with Fajar. We coordinate well,” said Arum, whose job
            is to maintain contacts with residents of Bungur. Suharno, a forest police
            superintendent who coordinates firefighting operations at the Way Kambas
            National Park, agreed, as did AleRT coordinator Rama Budhiana and Mukhlisin,
            the Bungur section chief.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">“Every week, four or five of our guys work with Fajar and his team to keep
            guard and handle fires,” said Mukhlisin, “Fajar and his friends are great
            workers.”
        </p>
        <p class="leading-relaxed tracking-wide mt-8">The total land scorched by fire at Way Bungur last August came to about 1,500
            hectares. By October, 2,000 hectares were totally damaged. Nevertheless, Fajar
            and his team’s rapid response has saved about 22,000 evergreen trees and
            shrubs planted by Silvagama on its 22.8 hectares of reforestation land.
        </p>



    </div>

    <div class="max-w-6xl mx-auto border-b border-gray-300 mt-12 mb-12"></div>

    <div class="max-w-5xl mx-auto px-4 md:mt-12 mt-6 ">
        <a class="text-green-600 text-xl font-satunya font-bold uppercase"> More Feature</a>
        <div class="flex flex-row  scrollbar-hide overflow-x-scroll h-full mt-6 gap-4   snap-x snap-mandatory">
            @foreach ($stories as $key => $item)
                <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  border border-gray-300">
                    {{-- <img
                    class="w-full h-52 object-cover"
                    src="{{asset('storage/files/photos/'.$item->img)}}"
                    alt=""> --}}
                    <a href="{{ route($item->slug, app()->getlocale() )}}" class="sm:w-7/12 w-full">
                        @if (in_array(pathinfo(asset('storage/files/photos/'.$item->img), PATHINFO_EXTENSION),['mp4', 'avi', '3gp', 'mov', 'm4a']))
                                    <video class="w-full h-52 object-cover object-center video-bg" controls >
                                        <source src="{{asset('storage/files/photos/'.$item->img)}}" type="video/mp4" >
                                    </video>
                                @else
                                <img src="{{asset('storage/files/photos/'.$item->img)}}" alt="" class="w-full h-52 object-cover object-center">
                        @endif
                    </a>

                    <a href="{{ route($item->slug, app()->getlocale() )}}" class="md:mt-6 mt-3 text-xl font-bold sm:px-6 px-4 flex-shrink-0 flex">{{$item->titleID}}
                    </a>
                    <div class="mt-4 px-6 text-sm mb-6">
                        {{$item->imgDescID}}
                    </div>
                </div>
            @endforeach


        </div>
    </div>


    @include('partials.new-footer')

@endsection
