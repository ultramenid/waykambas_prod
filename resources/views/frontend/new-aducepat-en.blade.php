@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
    <style>
        /* the sliders show part of the neighbouring slides, only the centered slide shows its caption */
        .story-slider .swiper-slide p { transition: opacity .3s; }
        .story-slider .swiper-slide:not(.swiper-slide-active) p { opacity: 0; }
    </style>
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')

    <div class="max-w-5xl mx-auto mt-12 px-4">
        <h1 class="font-satunya text-green-600 font-bold text-2xl uppercase">Feature</h1>
        <h1 class="mt-6 font-semibold text-5xl">{{$text}}</h1>
        <p class="text-xl mt-4" >
            The vast stretches of cogon grass are a sign that the past still hangs over Way Kambas. To beat back this hardy grass, the forest is being regrown. But restoring a forest is no easy task.
        </p>

        <div class="sm:mt-16 mt-8 py-6 border-t border-t-gray-800 border-b border-b-gray-400">
            <h2 class=" italic">Translated in full from:</h2>
            <p><a class="mt-1 underline text-green-600" href="https://auriga.or.id/resource/reference/ekuilibrium_konservasi_menjaga_keseimbangan_di_taman_nasional_way_kambas.pdf" class="mt-2">Ekuilibrium Konservasi: Menjaga Keseimbangan di Taman Nasional Way Kambas</a> (TFCA Sumatera, 2017, in Indonesian)</p>
        </div>
    </div>

    <div class="max-w-2xl mx-auto sm:mt-20 mt-10 px-4">
        <p class="leading-relaxed tracking-wide">The drizzle showed no sign of letting up. It had been falling on
            Way Kambas since morning. Undeterred by the wet weather, the reforestation
            team set off for the heart of the national park. While waiting for the rain to ease,
            Fajar Sandika Negara and his team took shelter in a simple roadside stall. A cup of
            hot coffee kept the reforestation coordinator of the ALeRT–University of Lampung
            Consortium company.</p>
        <p class="leading-relaxed tracking-wide mt-8">
            That day, he was heading for the Rawa Kadut reforestation site in the Toto Projo
            Resort of National Park Management Section (SPTN) II Bungur, Way Kambas
            National Park. Rawa Kadut lies in the middle of a cogon grass plain at the heart of
            the park. To the east of Rawa Kadut stretches lowland forest, and to the west lies a
            string of fragile forest. Although the land is dominated by cogon grass, green forest
            grows along the small streams. These strips of forest form a network like the arms
            of an octopus, spreading in every direction along the tributaries.
        </p>
    </div>

    <div class="max-w-4xl mx-auto px-4 mt-12">
        <p class="font-semibold text-2xl text-center">“Reforestation at Rawa Kadut will link the forest in the east with the forest
            on the western side of the national park.”</p>
    </div>

    {{-- image --}}
    <div x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 1,
            centeredSlides: true,
            centeredSlidesBounds: true,
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
            breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
                initialSlide: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
                initialSlide: 0,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 0,
                initialSlide: 1,
            },
            },
        })"
        class="relative flex flex-row mt-10 "
        >
        <div class="absolute inset-y-0 sm:left-5 left-1 z-30 flex items-center ">
            <button @click="swiper.slidePrev()"
                class="bg-black bg-nav-slide text-white sm:-ml-2 lg:-ml-4 flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12  shadow focus:outline-none">
                {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-8 h-8"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>

            </button>
        </div>
        {{-- <div class="sm:block hidden sm:h-[35rem] h-56 w-[25%] mt-12 bg-black absolute bg-opacity-70 z-20 -ml-4 rounded">
            <div class="inset-y-0 left-0">
            </div>
        </div> --}}

        <div class="swiper-container relative story-slider" x-ref="container">
            <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide px-4 py-12 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/11.png') }}" alt="">
                        <p class=" text-black font-light sm:text-sm text-xs mt-6 text-left tracking-wide">
                            THE FOREST GROWS BACK. Slowly, in the Bambangan restoration area, the national park and AleRT are regrowing the forest of Way Kambas. The ecosystem recovery at Bambangan proves that, with hard work and patience, a forest can grow back.</p>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide px-4 py-12 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/6.png') }}" alt="">
                        <p class=" text-black sm:text-sm text-xs mt-6 text-left tracking-wide">
                            A work camp in the field, used to guard and tend the seedlings and make sure they grow normally. Activity at the camp is also meant to keep poachers out of the national park. Unfortunately, it does not always work. Poachers still set the land on fire to hunt wildlife.
                        </p>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide px-4 py-12 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/12.png') }}" alt="">
                        <p class=" text-black sm:text-sm text-xs mt-6 text-left tracking-wide">Had they not burned, the plants would now be about two meters tall, like the tree shading the motorbike. This row of trees in front of the work camp survived the 2014 fire.</p>
                    </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>

        {{-- <div class="sm:block hidden sm:h-[35rem] h-56 w-[24%]  rounded mt-12 bg-black absolute bg-opacity-70  inset-y-0 right-0 z-20">
        </div> --}}

        <div class="absolute inset-y-0  right-1 z-30 flex items-center">
            <button @click="swiper.slideNext()"
                class="bg-black text-white flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12  shadow focus:outline-none">
                {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-8 h-8"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>

            </button>
        </div>

    </div>

    <div class="max-w-2xl mx-auto  px-4 mt-8">
        <p class="leading-relaxed tracking-wide">The coffee was gone, down to the last drop. Despite the uncertain weather,
            he set off with the group on motorbikes. Their wheels churned up the
            muddy track. After crossing a river on a rickety raft, the group pushed
            through secondary forest. The scent of the forest hung in the air. The trees
            grew close together. Water pooled everywhere, and the path was thick
            with mud.</p>
        <p class="leading-relaxed tracking-wide mt-8">
            Leaving the forest, the group began cutting across a sea of cogon grass. In
            every direction, the feathery grass ruled the landscape. On the horizon,
            the forest stood in sparse lines. Gallery forest grew along the small
            streams. The odd tree that had survived hinted at the forest's former
            glory. All 360 degrees around, cogon grass owned the
            landscape.
        </p>
    </div>

    {{-- <div class="mx-auto max-w-6xl mt-8"> --}}
        <div class="max-w-7xl flex sm:flex-row flex-col-reverse gap-10 ml-auto sm:mt-16 mt-8 sm:px-12 px-4">
            <div class="sm:w-6/12 w-full">
                <p class="leading-relaxed tracking-wide">
                    From the edge of that forest, Rawa Kadut is about 10 kilometers away. “That's a straight
                    line on the map,” Fajar said. On the ground, he travels much further because
                    the track twists and turns. Across the open grassland, the wind blew freely with
                    nothing to stop it. The sky stretched wide. The rain that had just fallen seemed
                    to leave no trace. The water evaporated almost at once.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    This sea of cogon grass is man-made. In the 1970s, Fajar said, a timber
                    company managed the area. Back then, the land that is now the national park
                    was a logging concession, from the 1970s through the
                    1980s.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    After that, illegal loggers kept cutting down trees until the early 2000s. The
                    logging was so relentless that no trees were left. Not even a stump remained.
                    The forest opened up, and the cogon grass moved in.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    Sadly, that was not the final blow. Irresponsible people then used the
                    grassland as a hunting ground. They went after wildlife by setting the land
                    on fire. The cogon grass spread even further, and forest trees found it ever
                    harder to grow. Without anyone quite realizing it, repeated burning created a
                    man-made landscape: a cogon grassland ecosystem.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    Without human interference, the logged forests of Way Kambas could in
                    fact have recovered on their own. With the right soil and young seedlings,
                    nature can carry out natural succession. Forests are naturally
                    resilient: they can bounce back.
                </p>
            </div>
            <div class="sm:w-6/12 w-full relative">
                <img src="{{asset('assets/3.png')}}" alt="" class="h-[45rem] w-full object-cover relative">
                <p class=" text-black text-xs mt-2 text-left ">Towering over the grassland, this tree shows that forest once covered Rawa Kadut. Bringing back the vanished forest now takes hard work.</p>
            </div>
        </div>
    {{-- </div> --}}

    <div class="max-w-2xl mx-auto px-4 sm:mt-16 mt-8">
        <p class="leading-relaxed tracking-wide ">
            Of the national park's 125,621 hectares, only 78,500 hectares, or 60
            percent, is covered by lowland forest. The remaining 40 percent is
            mangrove forest, swamp forest, cogon grass and scrub. According to the
            National Park Office, cogon grass covers 27,000 hectares.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            In the middle of this sea of grass, the ALeRT-UNILA Consortium is working
            to bring back the forest that has been lost. As a member of the consortium,
            the Auriga Foundation leads the reforestation program. That day, Fajar was
            going to inspect the Rawa Kadut reforestation site, which lies roughly in the
            grassland at the center of the national park. It is the middle of nowhere.
            Although it can be reached by motorbike, for the logistics of planting Rawa
            Kadut is remote: far from villages and from the park's management
            posts.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            There were several reasons for choosing such a remote site. “First, we saw
            Rawa Kadut as strategic. Rawa Kadut is right in the middle of the national
            park. That means if we want to continue reforesting in the future, we can go
            in any direction.” In Fajar's view, success at Rawa Kadut can be carried on in
            every direction. The regrown forest would then become a corridor linking
            fragmented wildlife habitats.
        </p>
    </div>

    <div class="max-w-7xl flex sm:flex-row flex-col-reverse gap-10 sm:mt-16 mt-8 sm:px-12 px-4 mb-12">
        <div class="sm:w-6/12 w-full relative">
            <img src="{{asset('assets/5.png')}}" alt="" class="h-full w-full object-cover relative">
            <p class=" text-black  text-xs mt-2 text-left ">Wildfires scorch everything in the grassland. Dry grass catches fire very easily. Once lit, the flames blaze up and consume every form of life.</p>
        </div>
        <div class="sm:w-6/12 w-full">
            <div class="w-full flex sm:justify-end justify-center">
                <h2 class="text-2xl font-bold sm:w-8/12 w-full  mb-12 sm:text-left text-center">“Sadly, when the plants were just 8 - 9 months old, the fire wiped them out.”</h2>

            </div>
            <p class="leading-relaxed tracking-wide mt-8">
                The thinking goes like this. To the east of Rawa Kadut lies a large, relatively
                intact lowland forest, while to the west patches of forest are scattered about. The cogon grassland of Rawa Kadut stretches in between, separating the forests of the east from those of the west.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">
                The hope is that one day reforestation, starting from Rawa Kadut, will join
                the forests in the east and the west. Forest cover on the western side is still
                fairly good, while on the eastern side the forest has thinned out, and also marks the boundary of the national park.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">
                Joining the two sides of the forest would form a vegetation corridor, making
                it easier for wildlife to roam the national park. Second, Fajar went on, Rawa
                Kadut sits at the center of the park's problems, above all poaching. “The
                reforestation program brings more activity to the middle of the national park,
                which can help prevent poaching. So when there are people working at Rawa
                Kadut, poachers will think twice and stay away.” In short, having staff on the
                ground scares poachers off. Those were the non-technical
                considerations.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">
                On the technical side of planting, reforestation has a few requirements:
                the nursery must be close to the planting area, and the seedbed
            </p>
        </div>

    </div>

    <div class="max-w-2xl mx-auto px-4 sm:mt-24 mt-8 ">
        <p class="leading-relaxed tracking-wide mt-8">must get enough sunlight and be easy to reach. Above all
            these, what matters most is a source of water near the nursery.
            Water is the limiting factor for successful planting. Around Rawa
            Kadut, water comes from streams, wells and rain.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">BLADES of cogon grass rippled in the tropical wind. The still-wet leaves
            glinted in the sunlight. Pushing through the grass, the sharp, finely haired
            blades slapped at the knees. Before long, they began to sting. This is no
            football field of soft turf. Picture it: grass growing neck-high, with
            razor-edged leaves and hairs that prickle the skin. After passing through gallery
            forest, the strips of vegetation that grow along small streams, Fajar reached the
            reforestation work camp. Clouds still hung in the sky.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">At the work camp with its loft, Ahmad Tohari and Sutrisno were on
            duty that day. “A regular shift is usually two to four people for eight
            days. After that they go home and others take over,” Fajar explained.
        </p>
    </div>

    <div class="max-w-6xl mx-auto px-4 mt-8 mb-16 relative">
        <img src="{{ asset('assets/8.png') }}" alt="" class="w-full h-full relative">
        <p class=" text-black text-xs mt-2 text-left">Once cogon grass catches fire, the flames rage in every direction. Fire destroyed the reforestation seedlings in 2014. Gusting winds make it harder to stop the fire from spreading.</p>
    </div>

    <div class="max-w-2xl mx-auto px-4 mt-8">
        <p class="leading-relaxed tracking-wide mt-8">WILDFIRE is the biggest challenge in restoring the forest at
            Rawa Kadut. At least 75 percent of the land cover in SPTN II Bungur is
            cogon grass and scrub, so it is no surprise that fire often sweeps through
            the area. Every year, Bungur has the largest area burned in Way Kambas.
            It is this challenge that drains the most energy. Fajar recalled that in 2015
            the team had to replant the 2014 plantings that the fire had wiped out.
            “In the end, we planted all over again. That wasn't just filling in the gaps,” Fajar
            stressed.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">“As long as they don't burn, the plants can actually grow. Technically, the
            planting is fine. In the dry season the plants will still grow, even if they may be
            short of water,” Marcelius added. “Even in a drought we always bring
            water to the planting site. In the dry season, the water disappears
            completely. Even the well at the work camp dries up. Going forward, we need
            to dig a deep well, about 15 meters, at the reforestation site. The wells we
            have now are only 6 - 8 meters deep at most.”
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            From the planning stage, the team chose pioneer species that are relatively
            fire-resistant. “Puspa, sempu and sungkai are fire-resistant pioneer species.
            Once a plant has grown 50 centimeters to 1 meter, its roots are still strong
            enough even if it burns,” said Marcelius. The great fire of 2014
            taught important lessons for restoring the forest at Rawa Kadut
            and the surrounding area.
        </p>
    </div>




     {{-- image --}}
     <div x-data="{swiper: null}"
     x-init="swiper = new Swiper($refs.container, {
         loop: true,
         slidesPerView: 1,
         spaceBetween: 1,
         centeredSlides: true,
         centeredSlidesBounds: true,
         centeredSlides: true,
         pagination: {
             el: '.swiper-pagination',
             dynamicBullets: true,
         },
         breakpoints: {
         640: {
             slidesPerView: 2,
             spaceBetween: 0,
             initialSlide: 0,
         },
         768: {
             slidesPerView: 3,
             spaceBetween: 0,
             initialSlide: 0,
         },
         1024: {
             slidesPerView: 2,
             spaceBetween: 0,
             initialSlide: 1,
         },
         },
     })"
     class="relative flex flex-row mt-10 "
     >
     <div class="absolute inset-y-0 sm:left-5 left-1 z-30 flex items-center ">
         <button @click="swiper.slidePrev()"
             class="bg-black bg-nav-slide text-white sm:-ml-2 lg:-ml-4 flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12  shadow focus:outline-none">
             {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-8 h-8"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> --}}
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
             </svg>

         </button>
     </div>
     {{-- <div class="sm:block hidden sm:h-[35rem] h-56 w-[25%] mt-12 bg-black absolute bg-opacity-70 z-20 -ml-4 rounded">
         <div class="inset-y-0 left-0">
         </div>
     </div> --}}

     <div class="swiper-container relative story-slider" x-ref="container">
         <div class="swiper-wrapper">
                 <!-- Slides -->
                 <div class="swiper-slide px-4 py-12 flex flex-col  bg-newgray-300 relative" >
                     <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/9_1.png') }}" alt="">
                     <p class=" text-black font-light sm:text-sm text-xs mt-6 text-left tracking-wide">
                        Seedlings are collected from within the national park to make sure the species are native.</p>
                 </div>
                 <!-- Slides -->
                 <div class="swiper-slide px-4 py-12 flex flex-col  bg-newgray-300 relative" >
                     <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/9_2.png') }}" alt="">
                     <p class=" text-black sm:text-sm text-xs mt-6 text-left tracking-wide">Seedlings are collected from within the national park to make sure the species are native.</p>
                 </div>
                 <!-- Slides -->
                 <div class="swiper-slide px-4 py-12 flex flex-col  bg-newgray-300 relative" >
                     <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/9_3.png') }}" alt="">
                     <p class=" text-black sm:text-sm text-xs mt-6 text-left tracking-wide">The nursery is out in the field, to help the seedlings adapt and to make it easier to carry them to the planting area.</p>
                 </div>
         </div>

         <div class="swiper-pagination"></div>
     </div>

     {{-- <div class="sm:block hidden sm:h-[35rem] h-56 w-[24%]  rounded mt-12 bg-black absolute bg-opacity-70  inset-y-0 right-0 z-20">
     </div> --}}

     <div class="absolute inset-y-0  right-1 z-30 flex items-center">
         <button @click="swiper.slideNext()"
             class="bg-black text-white flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12  shadow focus:outline-none">
             {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-8 h-8"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg> --}}
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
             </svg>

         </button>
     </div>

 </div>

    <div class="max-w-2xl mx-auto px-4 mt-8">
        <p class="leading-relaxed tracking-wide mt-8">“We learned a few things. First, early detection has to be faster. That
            time, the fire was only detected when it was already very close to the firebreak. Second, after
            a fire is put out, it has to be checked again to make sure the embers are really
            out,” Fajar explained. Fire prevention has been stepped up with regular patrols
            alongside the forest police. “We patrol more and more regularly. Every month there
            can be two or three patrols.”
        </p>
        <p class="leading-relaxed tracking-wide mt-8">There are three patrol routes for protection and security operations. “But
            that time the fire was huge and the wind was strong. The situation was out of
            control. On top of that, the fire broke out at night, which made it even
            harder to mobilize people,” Fajar said. <span class="bg-red-500 h-3 w-3 inline-flex"></span>
        </p>
        <p class="mt-12 text-sm italic text-gray-500">This English version was translated from the original Indonesian text using AI.</p>
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

                    <a href="{{ route($item->slug, app()->getlocale() )}}" class="md:mt-6 mt-3 text-xl font-bold sm:px-6 px-4 flex-shrink-0 flex">{{ localizedField($item, 'title') }}
                    </a>
                    <div class="mt-4 px-6 text-sm mb-6">
                        {{ localizedField($item, 'imgDesc') }}
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    @include('partials.new-footer')

@endsection
