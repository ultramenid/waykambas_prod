@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')

    @include('partials.topbar')
    <!-- hero -->
    <section class="relative sm:block hidden" x-data="{hero: false}">
        <div class=" py-6 storyhero" >

            <!-- nav -->
            <div class="max-w-7xl px-4 py-3  mx-auto relative ">
                <!-- bahasa -->
                {{-- <div class="sm:flex hidden justify-end">
                    <div class="flex space-x-1 text-xs text-gray-400">
                        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="cursor-pointer @if(App::getLocale() == 'id') text-white font-bold @endif">Indonesia</a>
                        <span class="border-r border-green-600"></span>
                        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="cursor-pointer @if(App::getLocale() == 'en') text-white font-bold @endif">English</a>
                    </div>
                </div> --}}
                <!-- nav -->
                <div class=" justify-between items-center sm:flex hidden">
                    <div class="flex space-x-4 items-center mb-2">
                        <h1 class="text-4xl font-bold text-white mr-6"> <a href="index.html">Rawa Kadut</a> </h1>
                        <!-- about -->
                        <div class="flex-col flex" x-data="{pages:false}">
                            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >About
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                                <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Who We Are</a>
                                <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                                <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Kadut Restoration</a>
                            </div>
                        </div>

                            <a href="{{ route('azrestoration', app()->getlocale() )}}" class="text-white">A-Z Restoration</a>

                        {{-- <a href="#" class="text-white">Kebakaran</a> --}}
                        <div class="@if ($nav === 'story') border-b border-white @endif">
                            <a href="{{ route('story', app()->getlocale() )}}" class="text-white">Story</a>
                        </div>
                        <a href="{{ route('diary', app()->getlocale() )}}" class="text-white">Diary</a>
                    </div>
                    <div class="flex space-x-4 items-center">
                        <button class="bg-green-600 px-8  text-sm font-bold py-1 text-white hover:bg-white border border-green-600 hover:text-green-600">Donate</button>
                    </div>
                </div>
            </div>
            <div class="flex h-full items-center" >
                <div class=" text-center  text-white max-w-5xl mx-auto flex flex-col">
                    <h1 class=" sm:text-7xl text-5xl font-bold inline-flex justify-center">{{ $text }}</h1>
                    <a class="text-base">{{$publish}}</a>
                </div>
            </div>

            <div @click="hero =! hero" class=" z-20 cursor-pointer absolute rounded-full bg-gray-100 opacity-80 bottom-6 right-6 h-5 w-5  text-black flex justify-center items-center">
                <a class="text-sm select-none">i</a>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-22 bg-gray-600 opacity-70" x-show="hero">
                <div class="max-w-7xl mx-auto text-white flex items-center py-2 px-12 sm:text-normal text-sm">
                    {{$imgdesc}}
                </div>
            </div>
        </div>
        <div class="">

        </div>
    </section>


    <section x-data="{open:0, open2:0}">
        <div class="sm:hidden block">
            <img src="{{ asset('assets/'.$imageHero.'')}}" alt="{{$title}}" class="w-full h-full">
        </div>
        <div class="px-4 mt-4 text-center sm:hidden block">
            <h1 class="text-2xl font-bold ">{{ $text }}</h1>
            <a class="text-base">{{$publish}}</a>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify"  >

            <div class="sm:w-8/12 w-full">
                <p>The motorbike I was riding sped away from the
                    ALeRT Camp in Bungur, in the forest area<sup id="id1"  class="font-bold rounded border-r border-l border-black px-1"><a href="#1" @click="open=1, open2= 1, setTimeout(() => open = 0, 10000)" >1</a></sup> of the national park<sup id="id2" class="font-bold rounded border-r border-l border-black px-1"><a href="#2" @click="open=2 , open2= 2, setTimeout(() => open = 0, 10000)">2</a></sup>
                    of Way Kambas<sup id="id3" class="font-bold rounded border-r border-l border-black px-1"><a href="#3" @click="open=3, open2= 3, setTimeout(() => open = 0, 10000)">3</a></sup>, Lampung Province. Cogon grass
                    soon closed in around me. Shrubs pushed up through it, and bare tree
                    stumps jutted toward the sky.</p>
                <p class="mt-4">But Suprapto, the forest police officer giving me a ride, handled
                    the motorbike nimbly. As if untroubled, this man from Cilacap, who has
                    worked in Way Kambas for two decades, deftly cut his way through
                    the grass.</p>
                <h1 class="font-bold mt-4">Drowning in cogon grass</h1>
                <p class="mt-4">This is the other face of Way Kambas National Park. A face that will
                    never show up in any tourist brochure. Way Kambas is, after all,
                    far better known for its elephants. Here, the largest land animal in
                    the world is an icon.</p>
                <p class="mt-4">Yet the elephant is also the source of a long-running conflict in Way
                    Kambas. It is ironic. On the one hand, it is the number one attraction, even
                    a symbol of Lampung Province<sup id="id4" class="font-bold rounded border-r border-l border-black px-1"><a href="#4" @click="open=4, open2= 4, setTimeout(() => open = 0, 10000)">4</a></sup>. On the other, it causes
                    thorny problems because it often raids the community's farmland.
                    Here, the struggle between wildlife and people for living space
                    is laid bare<sup id="id5" class="font-bold rounded border-r border-l border-black px-1"><a href="#5" @click="open=5, open2= 5, setTimeout(() => open = 0, 10000)">5</a></sup>.</p>
                <p class="mt-4">
                    This conflict between residents and elephants is closely tied to the near absence
                    of a <i>buffer zone</i> around Way Kambas. Most of the
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm" >
                <div id="1" :class="open==1 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" ><p class="text-dark-blue"><a href="#id1" ><sup  class="font-bold rounded border-r border-l border-black px-1">1</sup></a> A forest area (kawasan hutan) is a
                    specific area designated and/or
                    established by the government to be
                    maintained as permanent forest. By
                    this definition, a forest area is not
                    always covered by forest, and that is
                    not uncommon. Indonesia's forest area
                    totals 129,023,378.15 hectares. Of
                    this, only 21,448,000 hectares (16.62%
                    of the total forest area) have been
                    fully gazetted or established.</p>
                </div>
                <div id="2" :class="open==2 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                    <p class="mt-4 text-dark-blue">
                            <a href="#id2"><sup  class="font-bold rounded border-r border-l border-black px-1">2</sup></a> A national park is a nature
                            conservation area with an original
                            ecosystem, managed through a zoning
                            system and used for research,
                            science, education, support for
                            cultivation, tourism and recreation.
                    </p>
                </div>
                <div id="3" :class="open==3 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                    <p class="mt-4 text-dark-blue" >
                        <a href="#id3"><sup  class="font-bold rounded border-r border-l border-black px-1">3</sup></a> Way Kambas National Park
                        (TNWK) is a conservation forest area
                        designated by Minister of Forestry
                        Decree No. 670/Kpts-II/1999 of
                        August 26, 1999, covering
                        125,631.31 hectares. Administratively,
                        TNWK lies in East Lampung Regency,
                        at geographic coordinates
                        between 40<sup>0</sup>37' – 50<sup>0</sup>16' South
                        latitude and between 105<sup>0</sup>33' –
                        105<sup>0</sup>54' East longitude.
                    </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
            <img src="{{ asset('assets/gajah.jpg') }}" alt="" class="w-full h-full">
            <p class="text-xs mt-1">Figure 2. Elephants at the Elephant Training Center
                (PLG) in Way Kambas National Park. It was first set up
                as one way to resolve human–elephant conflict,
                but later grew into a tourist attraction. The
                conflict itself, however, has never died down. @ Timer Manurung / SILVAGAMA</p>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4 ">national park's edge borders directly on
                    villages<sup id="id6" class="font-bold rounded border-r border-l border-black px-1"><a href="#6" @click="open=6, open2= 6, setTimeout(() => open = 0, 10000)">6</a></sup>, so the moment an elephant leaves the park, it walks
                    straight into people's farmland.</p>
                <p class="mt-4">
                    Because forest police<sup id="id7" class="font-bold rounded border-r border-l border-black px-1"><a href="#7" @click="open=7, open2= 7, setTimeout(() => open = 0, 10000)">7</a></sup> patrols are few and far between,
                    people can enter Way Kambas fairly freely. They gather wood,
                    fish, hunt, graze livestock and even farm. This is tied to
                    people's lingering memories of roaming the area freely back
                    when it was a logging concession (HPH)<sup id="id8" class="font-bold rounded border-r border-l border-black px-1"><a href="#8" @click="open=8 , open2= 8, setTimeout(() => open = 0, 10000)">8</a></sup>.
                </p>
                <h1 class="font-bold mt-4">FOREST FIRES (OR FOREST BURNING?)</h1>
                <p class="mt-4">
                    The absence of large stumps seems to say that the trees were
                    wiped out. Perhaps that is what the logging concession did back
                    then. With the trees gone, the area opened up and cogon grass
                    easily took root. On top of that, El Niño followed by La Niña
                    brought massive fires in 1997/1998 that devastated the forest
                    vegetation. The cogon grass took over<sup id="id9" class="font-bold rounded border-r border-l border-black px-1"><a href="#9" @click="open=9, open2= 9, setTimeout(() => open = 0, 10000)">9</a></sup>.
                </p>
                <p class="mt-4">
                    Unfortunately, cogon grass burns easily. It is fuel that catches
                    at the slightest spark. Worse, Way Kambas is so dry in the dry
                    season that even a spark from a cigarette butt can easily set off
                    a huge fire. With no trees and vast open areas, fires are often
                    hard to control, because the wind blows hard and from
                    unpredictable directions.
                </p>
                <p class="mt-4">
                    In fact, fire triggers the growth of fresh grass that animals love.
                    Soon after a burn, animals arrive to graze on the new shoots.
                    Unfortunately, that is exactly what hunters want. A squeeze of the
                    trigger almost always means a dead animal. So perhaps what often
                    happens in Way Kambas is not forest fires but forest
                    burning<sup id="id10" class="font-bold rounded border-r border-l border-black px-1"><a href="#10" @click="open=10, open2= 10, setTimeout(() => open = 0, 10000)">10</a></sup>. And the practice has gone on for a long time. “<i>Hunters are used to trapping animals by burning the forest.
                    After a fire, hunting activity usually goes up,</i>”
                    said Suprapto. No wonder cogon grass seems to be permanent in Way
                    Kambas National Park.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div  :class="open==3 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">Judging by its size, TNWK may not
                    seem a major conservation priority.
                    But that changes when you look at
                    Sumatra as a whole. The enormous
                    pressure to convert land, whether
                    into industrial timber plantations
                    (HTI), estate crops or other farmland,
                    falls above all on Sumatra's lowland
                    forests. And Way Kambas is one of
                    the largest lowland forests left in
                    Sumatra.</p>
                <p class="mt-4 text-dark-blue">
                    Lowland forests are clearly extremely
                    rich in biodiversity, flora included.
                    So is Way Kambas National Park.
                    Apart from the orangutan, all of
                    Sumatra's charismatic megafauna are
                    found in Way Kambas, such as the
                    Sumatran elephant
                    (<i>Elephas maximus sumatranus</i>),
                    Sumatran tiger (<i>Panthera tigris
                    sumatrae</i>), Sumatran rhino
                    (<i>Dicerorhinus sumatrensis</i>) and tapir
                    (<i>Tapirus indicus</i>). There is even an
                    animal that today survives nowhere else
                    in the world but Way Kambas: the
                    white-winged duck
                    (<i>Asarcornis scutulata</i>).
                </p>
                <p class="mt-4 text-dark-blue">
                    Its isolated location, cut off from
                    farmland and bordering directly on
                    the sea, keeps it relatively safe. The
                    same kind of position is what keeps
                    the Javan rhino
                    (<i>Rhinoceros sondaicus</i>) stable in Ujung
                    Kulon National Park. It is the
                    opposite of Bukit Barisan Selatan
                    National Park (TNBBS) in Lampung,
                    which is larger but riddled with
                    encroachment and has even been
                    proposed to be “split” by a highway.
                    Yet the Ministry of Forestry
                    classifies TNBBS as a major park
                    office (balai besar), headed by an
                    echelon II official. So it is no
                    surprise that Way Kambas, headed
                    only by an echelon III official, has
                    more and better-quality wildlife of the
                    same species than Bukit Barisan
                    Selatan National Park, and that is
                    exactly why conservation programs in
                    Way Kambas, including protection,
                    should be a priority.
                </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
                <img src="{{ asset('assets/kebakaran.jpg') }}" alt="" class="w-full h-full">
                <p class="text-xs mt-1">
                    Figure 3. A fire in SPTN II Bungur
                        in October 2013. It took a week
                        to put out. The fire burned some
                        of the forest plants painstakingly
                        planted under the Gerhan program
                        in 2012. @ Wito Dwi Prawiro / SILVAGAMA
                </p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <h1 class="font-bold mt-4"> RESTORATION</h1>
                <p class="mt-4">
                    Regular fires are not only a problem for the managers of Way
                    Kambas National Park, but also for wildlife, as they destroy food
                    sources and disrupt the animals' movements.
                </p>
                <p class="mt-4">
                    Firefighting is of course needed, above all to stop the burned area
                    from spreading. But that alone is not enough. The growth of the
                    cogon grass must be held back, and the grass must even be replaced
                    with trees that support the wildlife and ecosystem of Way Kambas.
                    Once trees grow, their canopy will shade the grass and slow its
                    growth. Little by little, the grass will be pushed out and the land
                    will turn back into wild forest.
                </p>
                <p class="mt-4">
                    Tackling the fires, shrinking and eliminating the cogon grass, and then
                    turning the land back into forest is no easy matter.

                </p>
                <p class="mt-4">
                    <i>First</i>, because it is not only about the technical side of reforestation<sup id="id11" class="font-bold rounded border-r border-l border-black px-1"><a href="#11" @click="open=11, open2= 11, setTimeout(() => open = 0, 10000)">11</a></sup>,
                    but also about the human factor: people actively setting
                    fires. This calls for an effective strategy to monitor and detect
                    people coming in to burn the grass.
                </p>
                <p class="mt-4">
                    <i>Second</i>, because cogon grass is inherently hard to kill. Even
                    fire does not kill it. Soon after a fire, its rhizomes and roots sprout again. Meanwhile, the ash left behind actually helps fertilize the soil.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div  :class="open==3 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">
                    Way Kambas National Park's
                    management area is divided into
                    several SPTNs (National Park
                    Management Sections). Each SPTN is
                    further divided into several resorts.
                </p>
                </div>
                <div id="4" :class="open==4 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue"><a href="#id4"><sup  class="font-bold rounded border-r border-l border-black px-1">4</sup> </a>Forest areas in Lampung Province
                    have been designated since Dutch
                    colonial times. But they have shrunk
                    year after year. In 1991, Lampung's
                    definitive forest area was 1,237,268
                    hectares; it shrank to 1,144,512
                    hectares in 1999 and again to
                    1,004,735 hectares in 2000, with
                    Minister of Forestry Decree
                    No. 256/Kpts-II/2000 of August 23,
                    2000. Besides TNWK, conservation
                    areas in Lampung include Bukit
                    Barisan Selatan National Park
                    (356,800 hectares), Krakatau Nature
                    Reserve (13,735.1 hectares) and Wan
                    Abdul Rahman Grand Forest Park
                    (Tahura) (22,244 hectares).</sup>
                </p>
                </div>
                <div id="5" :class="open==5 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue"><a href="#id5"><sup  class="font-bold rounded border-r border-l border-black px-1">5</sup></a>
                    Every year there are conflicts
                    between residents and elephants
                    around Way Kambas. As an indication
                    of how frequent they are, the Way
                    Kambas Buffer Village Forum (FRDP)
                    recorded 274 elephant incidents
                    between January and May 2012
                    alone.
                </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
            <img src="{{ asset('assets/peta.jpg') }}" alt="" class="w-full h-full">
            <p class="mt-1 text-xs">Figure 4. One of the massive cogon grass
                areas in Way Kambas National Park.
                Consistent reforestation and adequate
                fire control are the keys to restoring
                the area to its original state.
                Digitized with Google Earth Pro by Timer Manurung, 2013</p>

        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4">
                    <i>Third</i>, cogon grass grows faster than forest trees, which makes
                    it hard for tree seedlings to survive. Without intervention, the
                    grass quickly smothers the seedlings, leaving them little sunlight
                    or room to grow.
                </p>
                <p class="mt-4">
                    <i>Fourth</i>, the growth of forest seedlings can also suffer because,
                    on open land, animals move and see more freely and tend to strip
                    the shoots off young trees. The seedlings never get the chance to
                    grow big. Or they grow so slowly that the grass greedily swallows them up.
                </p>
                <p class="mt-4">
                    Aware of these challenges, the Silvagama Foundation<sup id="id12" class="font-bold rounded border-r border-l border-black px-1"><a href="#12" @click="open=12, open2= 12, setTimeout(() => open = 0, 10000)">12</a></sup> deliberately
                    chose Component 1 (<i>Thematic Reforestation, Forest Fire Control
                    and Safeguarding Natural Succession</i>)<sup id="id13" class="font-bold rounded border-r border-l border-black px-1"><a href="#13" @click="open=13, open2= 13, setTimeout(() => open = 0, 10000)">13</a></sup>
                    in the joint program<sup id="id14" class="font-bold rounded border-r border-l border-black px-1"><a href="#14" @click="open=14, open2= 14, setTimeout(() => open = 0, 10000)">14</a></sup> of the ALeRT-Unila Consortium. This component
                    makes the most of funding from TFCA-Sumatera<sup id="id15" class="font-bold rounded border-r border-l border-black px-1"><a href="#15" @click="open=15, open2= 15, setTimeout(() => open = 0, 10000)">15</a></sup>.
                    To complement it, Silvagama has also tapped other sources of
                    support, including making the most of its own internal resources.
                </p>
                <p class="mt-4">
                    We call this whole set of activities restoration. It is not
                    just reforestation, but also restoring the Way Kambas ecosystem
                    as a refuge for <i>wildlife</i> while
                    ensuring ecological support for the surrounding area. That is
                    why, besides anticipating fires through the planting scheme, planting lines and the choice of fire-resistant species, the trees to be
                    planted will also be matched to local species and to wildlife food,
                    especially for Sumatran elephants and rhinos.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div id="6"  :class="open==6 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue"><a href="#id6"><sup  class="font-bold rounded border-r border-l border-black px-1">6</sup> </a>There are 36 villages bordering
                    directly on Way Kambas National
                    Park. This number may well grow,
                    since villages can still be split
                    into new ones even when the original
                    village boundaries are not yet
                    clear.
                </p>
                </div>
                <div id="7"  :class="open==7 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id7"><sup  class="font-bold rounded border-r border-l border-black px-1">7</sup></a>  Polisi Hutan (forest police). The
                    unit responsible for securing the area
                    within the Way Kambas National Park Office.
                </p>
                </div>
                <div id="8"  :class="open==8 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">
                    <a href="#id8"><sup  class="font-bold rounded border-r border-l border-black px-1">8</sup></a>  Short for Hak Pengusahaan
                    Hutan (forest concession rights). An
                    HPH is a timber harvesting (<i>logging</i>)
                    concession in a state forest area.
                    Before it was designated a national
                    park, part of Way Kambas was an
                    HPH concession area.
                </p>
                </div>
                <div id="9"  :class="open==9 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id9"><sup  class="font-bold rounded border-r border-l border-black px-1">9</sup></a>  A rapid digitization by the
                    Silvagama Foundation found a massive
                    expanse of cogon grass covering
                    40,780 hectares in Bungur Resort and
                    its surroundings. This expanse alone
                    covers 32% of TNWK's total area. And
                    there are still several other patches
                    of cogon grass inside TNWK.
                </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
            <img src="{{ asset('assets/ilalang-2.jpg') }}" alt="" class="w-full h-full">
            <p class="text-xs mt-1">
                Figure 5. One of the massive cogon grass
                            areas in Way Kambas National Park.
                            Consistent reforestation and adequate
                            fire control are the keys to restoring
                            the area to its original state.
                            Digitized with Google Earth Pro by Timer Manurung, 2013</p>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4">
                    This restoration is designed to work hand in hand with the programs
                    of the Way Kambas National Park Office. It will also involve local
                    communities in its implementation as much as possible. In the long
                    term, it is meant to serve as a model for drawing up a <i>grand design</i> for ecosystem restoration
                    across all of Way Kambas.
                </p>
                <div >
                    <img src="{{ asset('assets/ilalang-3.jpg') }}" alt="" class="w-full h-full mt-4">
                        <p class="text-xs mt-1">
                            Figure 6. Scorching the tops of the
                            cogon grass does not kill it entirely. Once
                            the fire dies down, new shoots quickly
                            sprout, drawing in wild animals. @ Wito Dwi Prawiro / SILVAGAMA
                        </p>

                </div>
                <h1 class="font-bold mt-12">RAWA KADUT</h1>
                <p class="mt-4">
                    Near the end of that small, furrowed ridge, the cogon grass suddenly
                    ran wild, dense and tangled with thorny shrubs. Their stiff,
                    dangling branches clawed at our faces and hands. Grass leaves
                    wound around the wheels. Hendra, a Way Bungur resident working on
                    restoration for the Silvagama Foundation, had to step in and hack
                    through the shrubs with his machete. Our four motorbikes lurched and stumbled through the thick grass.
                </p>
                <p class="mt-4">
                    But once we broke free of the giant grass and climbed a small
                    ridge, another oasis lifted our spirits. A small river flowed
                    calmly behind a thicket of trees. Its clear water was full of small
                    fish and snakehead fish swimming freely. The locals call it
                    Rawa Kadut.
                </p>
                <div class="mt-4">
                    <img src="{{ asset('assets/kotoran.jpg') }}" alt="" class="w-full h-full">
                    <p class="text-xs mt-1">
                        Figure 7. Elephant dung scattered along
                            the banks of the Kadut River, a sign
                            that wildlife around the restoration
                            area is still healthy. @ Koen Setyawan / SILVAGAMA
                    </p>

                </div>
                <p class="mt-4">
                    The river curves like the letter U through the grassland, lined on
                    both banks by large trees. Everywhere else, the cogon grass grows
                    mercilessly.
                </p>
                <p class="mt-4">
                    We checked the map: Rawa Kadut lies in the middle of the grassland.
                    This is where we would set up a post. The Rawa Kadut Post, as it
                    would be called.
                </p>
                <p class="mt-4">
                    <i>“The site is protected by a river with dense vegetation. Only
                    the end of the river bend is open. All we have to do is draw a
                    straight line about half a kilometer long and turn it into a
                    firebreak,”</i> said Wito Dwi Prawiro, Silvagama's Restoration
                    Coordinator.
                </p>
                <p class="mt-4">
                    Interestingly, Rawa Kadut was not chosen without reason. Starting
                    restoration in the middle of the grassland, even though it is
                    relatively far from villages and management posts, is expected to
                    make it easier to steer and expand later restoration. There are
                    also ponds inside the chosen plot, one fairly small and the other
                    larger. Both can supply water for the plants, and for putting out
                    fires. What's more, its location far to the north of Bungur Resort should make it a point for spotting intruders entering the
                    national park from the north.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div id="10"  :class="open==10 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id10"><sup  class="font-bold rounded border-r border-l border-black px-1">10</sup></a> According to the Way Kambas
                    National Park Office database, fires
                    occur almost every year, over areas of
                    varying size. The worst fire, causing
                    the most extensive damage, was of
                    course in 1997/1998.
                </p>
                <img src="{{ asset('assets/grafik.png') }}" alt="" class="w-full mt-4">
                <p class="text-dark-blue">Chart of forest fires in Way Kambas National Park</p>
                </div>
                <div id="11"  :class="open==11 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">
                    <a href="#id11"><sup  class="font-bold rounded border-r border-l border-black px-1">11</sup></a> Besides the National Forest and
                    Land Rehabilitation Movement (GERHAN),
                    which plants the grasslands with various species every year,
                    another organization, ALeRT (Aliansi Lestari Rimba
                    Terpadu), is also carrying out
                    reforestation in TNWK.
                </p>
                </div>
                <div id="12"  :class="open==12 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id12"><sup  class="font-bold rounded border-r border-l border-black px-1">12</sup></a> A non-governmental organization
                    working on natural resource
                    conservation. Founded on
                    November 12, 2009, with the aim
                    of achieving sustainable natural
                    resources and environmental
                    balance for the continuity of human
                    life. To that end, Silvagama carries
                    out activities intended to: (i)
                    promote concrete, positive action to
                    conserve natural resources and the
                    environment; (ii) eliminate actions
                    that destroy natural resources; (iii)
                    develop activities that improve
                    long-term well-being as the main
                    tool for conserving natural resources
                    and the environment; (iv) bring
                    about policies that favor
                    conservation and better well-being;
                    and (v) build a cadre of
                    conservationists who, individually
                    and/or together with others, take
                    part in conserving natural resources
                    and the environment.
                </p>
                </div>
                <div id="13"  :class="open==13 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                    <p class="mt-4 text-dark-blue">
                        <a href="#id13"><sup  class="font-bold rounded border-r border-l border-black px-1">13</sup></a> This joint program has 4
                        components: Component 1 (thematic
                        reforestation (especially elephant
                        food), forest fire control and
                        safeguarding natural succession),
                        Component 2 (monitoring and
                        protecting the population
                        distribution and vital resources of
                        tigers, rhinos, elephants, tapirs,
                        bears and white-winged ducks),
                        Component 3 (developing a
                        management model for
                        special-interest ecotourism) and
                        Component 4 (developing the
                        creative economy and raising
                        awareness to support the handling
                        of human–wildlife conflict).
                    </p>
                    </div>
                    <div id="14"  :class="open==14 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                        <p  class="mt-4 text-dark-blue">
                            <a href="#id14"><sup  class="font-bold rounded border-r border-l border-black px-1">14</sup></a>  The consortium consists of ALeRT,
                            the University of Lampung (UNILA),
                            the Sumatran Tiger Conservation
                            Program (PKHS), the Way Kambas
                            Buffer Village Forum (FRDP), the
                            Sajogyo Institute (SAINS), the
                            SILVAGAMA Foundation, Saka Wana
                            Bakti Way Kambas and Save
                            Indonesia Endangered Species (SIES).
                        </p>
                        </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
                <img src="{{ asset('assets/hutan.jpg') }}" alt="" class="w-full h-full">
               <p class="text-xs mt-1">
                Figure 8. The small bridge we built
                        takes us across Rawa Kadut, though
                        it is only 30 cm deep. The amount of
                        elephant dung we found shows that
                        herds of elephants often visit this
                        river. Just 50 m from here, we set up
                        the Rawa Kadut Post. One day, we
                        dream, after a hard day of restoration
                        work we will be able to watch
                        elephants drinking at the river. @ Koen Setyawan / SILVAGAMA
               </p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4">
                    We also mapped the outer boundary of the restoration plot. Our
                    planting design, alternating 30-meter strips of planted land and land
                    left to the cogon grass, was quickly adjusted to fit the original landscape.
                    The post will be staffed in rotation by forest police, Silvagama
                    staff and local residents. It will also be equipped with a plant
                    nursery, water tanks, an irrigation system for both plant care and
                    firefighting, appropriate-technology electricity and other supporting
                    facilities.
                </p>
                <div class=" mt-4 ">
                        <img src="{{ asset('assets/tanaman.jpg') }}" alt="" class="w-full">
                        <p class="mt-1 text-xs">
                            Figure 9. Reforestation plants killed and stripped
                                bare by fire in SPTN II Bungur, Way Kambas,
                                in October 2013. Fires like this, which happen
                                almost every year, are one of restoration's main
                                enemies. Effective monitoring and protection are
                                needed so the plants can grow freely. @ Wito Dwi Prawiro / SILVAGAMA
                        </p>
                        <p class="mt-4">
                            Still, it will take hard work before all this comes true.
                            Just getting there, we had to stumble our way through the dense
                            grass. And the vision of thick trees growing back into forest in
                            place of the grassland grew ever stronger in our minds.
                        </p>


                </div>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">


                <div id="15"  :class="open==15 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id15"><sup  class="font-bold rounded border-r border-l border-black px-1">15</sup></a>  TFCA-Sumatera is a
                    debt-for-nature swap program
                    agreed between the Government of
                    the United States and the
                    Government of Indonesia under the
                    Tropical Forest Conservation Act
                    (TFCA), a 1998 United States law on
                    tropical forest conservation. The
                    scheme is designed to protect and
                    restore tropical forests in
                    forest-rich countries by funding
                    forest conservation work by civil
                    society, including non-governmental
                    organizations and universities. In
                    Indonesia, the funding scheme,
                    called TFCA-Sumatera, is
                    administered by the KEHATI
                    Foundation, which channels grants
                    for activities including forest
                    restoration and conservation in 13
                    priority landscapes in Sumatra. These
                    priority landscapes or areas [including buffer zones,
                    corridors and connecting areas]
                    are: (1) Seulawah Heritage Forest, (2)
                    Leuser National Park and the Leuser
                    Ecosystem, (3) Batang Gadis National
                    Park, (4) the Angkola Ecosystem, (5)
                    Batang Toru, (6) the West Toba Watershed, (7) Bukit Tigapuluh National Park, (8) the Siak Kampar Peninsula, (9) the Tesso Nilo Ecosystem, (10) Kerinci Seblat National Park, (11)
                    the Siberut & Mentawai Islands, (12)
                    Bukit Barisan Selatan National Park
                    and (13) Way Kambas National
                    Park.
                </p>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">

            </div>
            <div class="w-4/12 sm:block hidden text-sm"></div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
                <img src="{{ asset('assets/kabut.jpg') }}" alt="" class="w-full h-full">
                <p class="mt-1 text-xs">
                        Figure 10. Morning at the ALeRT restoration site in
                        SPTN II Bungur, Way Kambas. The trees are turning
                        green. If they are spared from fire (some already
                        burned in September 2012), these trees will
                        restore Way Kambas's role as a refuge for
                        wildlife and ensure ecological support
                        for the surrounding area. @ Koen Setyawan / SILVAGAMA
                    </p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify mb-12">
            <div class="sm:w-8/12 w-full">

                <p class="mt-4">
                    <i>“Never give up before you've even tried,”</i> Hendra quipped.
                    He said it as a joke, but it captured our determination
                    exactly. At Rawa Kadut, our hopes are taking shape. <span class="bg-red-500 h-3 w-3 inline-flex"></span>
                </p>
                <p class="mt-12 text-sm italic text-gray-500">This English version was translated from the original Indonesian text using AI.</p>

            </div>
            <div class="w-4/12 sm:block hidden text-sm"></div>
        </div>

        {{-- sidebar numbers  mobile--}}
            {{-- 1 --}}
            <div :class="open2==1 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
                x-show="open2==1"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click.outside="open2 = 0"
                x-cloak style="display: none !important"
                >
                <p><sup  class="font-bold rounded border-r border-l border-black px-1">1</sup> A forest area (kawasan hutan) is a
                    specific area designated and/or
                    established by the government to be
                    maintained as permanent forest. By
                    this definition, a forest area is not
                    always covered by forest, and that is
                    not uncommon. Indonesia's forest area
                    totals 129,023,378.15 hectares. Of
                    this, only 21,448,000 hectares (16.62%
                    of the total forest area) have been
                    fully gazetted or established.
                </p>
            </div>
            {{-- 2 --}}
            <div :class="open2==2 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
                x-show="open2==2"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click.outside="open2 = 0"
                x-cloak style="display: none !important"
                >
                <p><sup  class="font-bold rounded border-r border-l border-black px-1">2</sup> A national park is a nature
                    conservation area with an original
                    ecosystem, managed through a zoning
                    system and used for research,
                    science, education, support for
                    cultivation, tourism and recreation.
                </p>
            </div>
            {{-- 3 --}}
            <div :class="open2==3 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
                x-show="open2==3"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click.outside="open2 = 0"
                x-cloak style="display: none !important"
                >
                <p><sup  class="font-bold rounded border-r border-l border-black px-1">3</sup> Way Kambas National Park
                    (TNWK) is a conservation forest area
                    designated by Minister of Forestry
                    Decree No. 670/Kpts-II/1999 of
                    August 26, 1999, covering
                    125,631.31 hectares. Administratively,
                    TNWK lies in East Lampung Regency,
                    at geographic coordinates
                    between 40<sup>0</sup>37' – 50<sup>0</sup>16' South
                    latitude and between 105<sup>0</sup>33' –
                    105<sup>0</sup>54' East longitude.
                </p>
                <p class="mt-4">Judging by its size, TNWK may not
                    seem a major conservation priority.
                    But that changes when you look at
                    Sumatra as a whole. The enormous
                    pressure to convert land, whether
                    into industrial timber plantations
                    (HTI), estate crops or other farmland,
                    falls above all on Sumatra's lowland
                    forests. And Way Kambas is one of
                    the largest lowland forests left in
                    Sumatra.</p>
                <p class="mt-4">
                    Lowland forests are clearly extremely
                    rich in biodiversity, flora included.
                    So is Way Kambas National Park.
                    Apart from the orangutan, all of
                    Sumatra's charismatic megafauna are
                    found in Way Kambas, such as the
                    Sumatran elephant
                    (<i>Elephas maximus sumatranus</i>),
                    Sumatran tiger (<i>Panthera tigris
                    sumatrae</i>), Sumatran rhino
                    (<i>Dicerorhinus sumatrensis</i>) and tapir
                    (<i>Tapirus indicus</i>). There is even an
                    animal that today survives nowhere else
                    in the world but Way Kambas: the
                    white-winged duck
                    (<i>Asarcornis scutulata</i>).
                </p>
                <p class="mt-4">
                    Its isolated location, cut off from
                    farmland and bordering directly on
                    the sea, keeps it relatively safe. The
                    same kind of position is what keeps
                    the Javan rhino
                    (<i>Rhinoceros sondaicus</i>) stable in Ujung
                    Kulon National Park. It is the
                    opposite of Bukit Barisan Selatan
                    National Park (TNBBS) in Lampung,
                    which is larger but riddled with
                    encroachment and has even been
                    proposed to be “split” by a highway.
                    Yet the Ministry of Forestry
                    classifies TNBBS as a major park
                    office (balai besar), headed by an
                    echelon II official. So it is no
                    surprise that Way Kambas, headed
                    only by an echelon III official, has
                    more and better-quality wildlife of the
                    same species than Bukit Barisan
                    Selatan National Park, and that is
                    exactly why conservation programs in
                    Way Kambas, including protection,
                    should be a priority.
                </p>
                <p class="mt-4">
                    Way Kambas National Park's
                    management area is divided into
                    several SPTNs (National Park
                    Management Sections). Each SPTN is
                    further divided into several resorts.
                </p>
            </div>
             {{-- 4 --}}
            <div :class="open2==4 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==4"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">4</sup> Forest areas in Lampung Province
                have been designated since Dutch
                colonial times. But they have shrunk
                year after year. In 1991, Lampung's
                definitive forest area was 1,237,268
                hectares; it shrank to 1,144,512
                hectares in 1999 and again to
                1,004,735 hectares in 2000, with
                Minister of Forestry Decree
                No. 256/Kpts-II/2000 of August 23,
                2000. Besides TNWK, conservation
                areas in Lampung include Bukit
                Barisan Selatan National Park
                (356,800 hectares), Krakatau Nature
                Reserve (13,735.1 hectares) and Wan
                Abdul Rahman Grand Forest Park
                (Tahura) (22,244 hectares).</sup>
                </p>
            </div>
            {{-- 5 --}}
            <div :class="open2==5 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==5"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">5</sup>
                Every year there are conflicts
                between residents and elephants
                around Way Kambas. As an indication
                of how frequent they are, the Way
                Kambas Buffer Village Forum (FRDP)
                recorded 274 elephant incidents
                between January and May 2012
                alone.
                </p>
            </div>
            {{-- 6 --}}
            <div :class="open2==6 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==6"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">6</sup> There are 36 villages bordering
                directly on Way Kambas National
                Park. This number may well grow,
                since villages can still be split
                into new ones even when the original
                village boundaries are not yet
                clear.
            </div>
            {{-- 7 --}}
            <div :class="open2==7 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==7"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">7</sup>  Polisi Hutan (forest police). The
                unit responsible for securing the area
                within the Way Kambas National Park Office.
             </p>
            </div>
            {{-- 8 --}}
            <div :class="open2==8 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==8"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">8</sup>  Short for Hak Pengusahaan
                Hutan (forest concession rights). An
                HPH is a timber harvesting (<i>logging</i>)
                concession in a state forest area.
                Before it was designated a national
                park, part of Way Kambas was an
                HPH concession area.
             </p>
            </div>
            {{-- 9 --}}
            <div :class="open2==9 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==9"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">9</sup>  A rapid digitization by the
                Silvagama Foundation found a massive
                expanse of cogon grass covering
                40,780 hectares in Bungur Resort and
                its surroundings. This expanse alone
                covers 32% of TNWK's total area. And
                there are still several other patches
                of cogon grass inside TNWK.
             </p>
            </div>
            {{-- 10 --}}
            <div :class="open2==10 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==10"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">10</sup> According to the Way Kambas
                    National Park Office database, fires
                    occur almost every year, over areas of
                    varying size. The worst fire, causing
                    the most extensive damage, was of
                    course in 1997/1998.
                </p>
                <img src="{{ asset('assets/grafik.png') }}" alt="" class="w-full mt-4">
                <p>Chart of forest fires in Way Kambas National Park</p>
                </p>
            </div>
            {{-- 11 --}}
            <div :class="open2==11 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==11"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">11</sup> Besides the National Forest and
                    Land Rehabilitation Movement (GERHAN),
                    which plants the grasslands with various species every year,
                    another organization, ALeRT (Aliansi Lestari Rimba
                    Terpadu), is also carrying out
                    reforestation in TNWK.
                </p>
            </div>
             {{-- 12 --}}
            <div :class="open2==12 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==12"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">12</sup> A non-governmental organization
                    working on natural resource
                    conservation. Founded on
                    November 12, 2009, with the aim
                    of achieving sustainable natural
                    resources and environmental
                    balance for the continuity of human
                    life. To that end, Silvagama carries
                    out activities intended to: (i)
                    promote concrete, positive action to
                    conserve natural resources and the
                    environment; (ii) eliminate actions
                    that destroy natural resources; (iii)
                    develop activities that improve
                    long-term well-being as the main
                    tool for conserving natural resources
                    and the environment; (iv) bring
                    about policies that favor
                    conservation and better well-being;
                    and (v) build a cadre of
                    conservationists who, individually
                    and/or together with others, take
                    part in conserving natural resources
                    and the environment.
                </p>
            </div>
            {{-- 13 --}}
            <div :class="open2==13 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==13"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">13</sup>  This joint program has 4
                    components: Component 1 (thematic
                    reforestation (especially elephant
                    food), forest fire control and
                    safeguarding natural succession),
                    Component 2 (monitoring and
                    protecting the population
                    distribution and vital resources of
                    tigers, rhinos, elephants, tapirs,
                    bears and white-winged ducks),
                    Component 3 (developing a
                    management model for
                    special-interest ecotourism) and
                    Component 4 (developing the
                    creative economy and raising
                    awareness to support the handling
                    of human–wildlife conflict).
                </p>
            </div>
            {{-- 14 --}}
            <div :class="open2==14 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==14"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">14</sup>  The consortium consists of ALeRT,
                    the University of Lampung (UNILA),
                    the Sumatran Tiger Conservation
                    Program (PKHS), the Way Kambas
                    Buffer Village Forum (FRDP), the
                    Sajogyo Institute (SAINS), the
                    SILVAGAMA Foundation, Saka Wana
                    Bakti Way Kambas and Save
                    Indonesia Endangered Species (SIES).
                </p>
                </p>
            </div>
             {{-- 15 --}}
            <div :class="open2==15 ? 'sm:hidden block text-sm fixed w-5/6 h-screen z-50 bg-white  inset-y-0 right-0 overflow-y-auto px-4 py-4' : 'hidden'"
             x-show="open2==15"
             x-transition:enter="transition ease-in-out duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in-out duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click.outside="open2 = 0"
             x-cloak style="display: none !important"
             >
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">15</sup>  TFCA-Sumatera is a
                    debt-for-nature swap program
                    agreed between the Government of
                    the United States and the
                    Government of Indonesia under the
                    Tropical Forest Conservation Act
                    (TFCA), a 1998 United States law on
                    tropical forest conservation. The
                    scheme is designed to protect and
                    restore tropical forests in
                    forest-rich countries by funding
                    forest conservation work by civil
                    society, including non-governmental
                    organizations and universities. In
                    Indonesia, the funding scheme,
                    called TFCA-Sumatera, is
                    administered by the KEHATI
                    Foundation, which channels grants
                    for activities including forest
                    restoration and conservation in 13
                    priority landscapes in Sumatra. These
                    priority landscapes or areas [including buffer zones,
                    corridors and connecting areas]
                    are: (1) Seulawah Heritage Forest, (2)
                    Leuser National Park and the Leuser
                    Ecosystem, (3) Batang Gadis National
                    Park, (4) the Angkola Ecosystem, (5)
                    Batang Toru, (6) the West Toba Watershed, (7) Bukit Tigapuluh National Park, (8) the Siak Kampar Peninsula, (9) the Tesso Nilo Ecosystem, (10) Kerinci Seblat National Park, (11)
                    the Siberut & Mentawai Islands, (12)
                    Bukit Barisan Selatan National Park
                    and (13) Way Kambas National
                    Park.
                </p>
            </div>



            <div x-data="{ open: false }" @scroll.window="open = (window.pageYOffset > 50) ? true : false" >
                <div class="fixed z-40 sm:bottom-10 sm:right-12 bottom-6 right-4 cursor-pointer " x-show="open" x-transition x-cloak style="display: none !important" @click="window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                  })">
                    <div class="sm:px-4 px-2 sm:py-4 py-2 border border-white bg-black rounded-full bgrmi flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                          </svg>
                    </div>
                </div>
            </div>
    </section>

    @include('partials.footer')
@endsection
