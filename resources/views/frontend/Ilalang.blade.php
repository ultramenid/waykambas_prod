@extends('layouts.index')

@section('meta')
    @include('partials.indexMeta')
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
                                <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Siapa Kami</a>
                                <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                                <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Restorasi Kadut</a>
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
                <p>Motor yang aku tumpangi melaju kencang meninggalkan
                    Camp ALeRT di Bungur, kawasan hutan<sup id="id1"  class="font-bold rounded border-r border-l border-black px-1"><a href="#1" @click="open=1, open2= 1, setTimeout(() => open = 0, 10000)" >1</a></sup> Taman Nasional<sup id="id2" class="font-bold rounded border-r border-l border-black px-1"><a href="#2" @click="open=2 , open2= 2, setTimeout(() => open = 0, 10000)">2</a></sup>
                    Way Kambas<sup id="id3" class="font-bold rounded border-r border-l border-black px-1"><a href="#3" @click="open=3, open2= 3, setTimeout(() => open = 0, 10000)">3</a></sup> , Propinsi Lampung. Segera ilalang
                    mengepungku. Semak perdu menyeruak dan tunggak-tunggak
                    telanjang pun teracung ke langit.</p>
                <p class="mt-4">Namun, Suprapto, polisi hutan yang memboncengku lincah
                    memacu motor. Seolah tak terganggu, lelaki asal Cilacap yang telah
                    dua dekade bekerja di Way Kambas ini tetap piawai menerobos
                    ilalang.</p>
                <h1 class="font-bold mt-4">Tenggelam dibalut ilalang</h1>
                <p class="mt-4">Inilah wajah lain Taman Nasional Way Kambas. Wajah yang takkan
                    pernah nongol di brosur wisata mana pun. Way Kambas memang
                    lebih kondang dengan gajahnya. Di sini, binatang darat terbesar di
                    dunia ini menjadi ikon.</p>
                <p class="mt-4">Tetapi, gajah jualah sumber konflik berkepanjangan di Way
                    Kambas. Ironis memang. Di satu sisi, dia atraksi nomor satu, bahkan
                    merepresentasikan Propinsi Lampung<sup id="id4" class="font-bold rounded border-r border-l border-black px-1"><a href="#4" @click="open=4, open2= 4, setTimeout(() => open = 0, 10000)">4</a></sup>. Di sisi lain, dia membawa
                    masalah pelik karena kerap menyerang lahan produksi masyarakat.
                    Sungguh, perebutan ruang hidup satwa dengan manusia terpampang
                    telanjang di tempat ini<sup id="id5" class="font-bold rounded border-r border-l border-black px-1"><a href="#5" @click="open=5, open2= 5, setTimeout(() => open = 0, 10000)">5</a></sup>.</p>
                <p class="mt-4">
                    Konflik penduduk dengan gajah ini tak lepas dari nyaris absennya
                    kawasan penyangga (<i>buffer zone</i>) di Way Kambas. Sebagian besar
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm" >
                <div id="1" :class="open==1 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" ><p class="text-dark-blue"><a href="#id1" ><sup  class="font-bold rounded border-r border-l border-black px-1">1</sup></a> Kawasan hutan adalah wilayah
                    tertentu yang ditunjuk dan atau
                    ditetapkan oleh pemerintah untuk
                    dipertahankan keberadaannya
                    sebagai hutan tetap. Dengan defenisi
                    yang demikian, kawasan hutan tidak
                    selalu bertutupan hutan. Dan itu tak
                    jarang terjadi. Luas kawasan hutan
                    Indonesia adalah 129.023.378,15
                    hektar. Dari keseluruhan kawasan
                    tersebut, baru 21.448.000 hektar
                    (setara dengan 16,62% dari total
                    kawasan hutan) yang sudah tuntas
                    dikukuhkan atau ditetapkan.</p>
                </div>
                <div id="2" :class="open==2 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                    <p class="mt-4 text-dark-blue">
                            <a href="#id2"><sup  class="font-bold rounded border-r border-l border-black px-1">2</sup></a> Taman nasional adalah kawasan
                            pelesatarian alam yang mempunyai
                            ekosistem asli, dikelola dengan sistem
                            zonasi yang dimanfaatkan untuk
                            tujuan penelitian, ilmu pengetahuan,
                            pendidikan, menunjang budidaya,
                            pariwisata, dan rekreasi.
                    </p>
                </div>
                <div id="3" :class="open==3 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                    <p class="mt-4 text-dark-blue" >
                        <a href="#id3"><sup  class="font-bold rounded border-r border-l border-black px-1">3</sup></a> Taman Nasional Way Kambas
                        (TNWK) merupakan kawasan hutan
                        konservasi yang ditunjuk melalui Surat
                        Menteri Kehutanan No. 670/Kpts-
                        II/1999 tanggal 26 Agustus 1999
                        dengan luasan mencapai 125.631.31
                        hektar. Secara administratif, TNWK
                        berlokasi di Kabupaten Lampung
                        Timur dengan koordinat geografis
                        antara 40<sup>0</sup>37' – 50<sup>0</sup>16' Lintang
                        Selatan dan antara 105<sup>0</sup>33' –
                        105<sup>0</sup>54' Bujur Timur.
                    </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
            <img src="{{ asset('assets/gajah.jpg') }}" alt="" class="w-full h-full">
            <p class="text-xs mt-1">Gambar 2. Gajah-gajah di Pusat Latihan Gajah
                (PLG) di TN Way Kambas. Awalnya didirikan
                sebagai salah satu solusi mengatasi konflik
                gajah dan manusia tetapi kemudian berkembang
                sebagai atraksi wisata. Tapi konfliknya sendiri
                tak kunjung reda. @ Timer Manurung / SILVAGAMA</p>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4 ">tepi taman nasional berbatas langsung dengan pemukiman
                    penduduk<sup id="id6" class="font-bold rounded border-r border-l border-black px-1"><a href="#6" @click="open=6, open2= 6, setTimeout(() => open = 0, 10000)">6</a></sup> sehingga begitu gajah keluar taman nasional, ia langsung
                    memasuki kawasan budidaya masyarakat.</p>
                <p class="mt-4">
                    Keterbatasan jumlah dan frekuensi patroli polhut<sup id="id7" class="font-bold rounded border-r border-l border-black px-1"><a href="#7" @click="open=7, open2= 7, setTimeout(() => open = 0, 10000)">7</a></sup> mengakibatkan
                    relatif leluasanya manusia memasuki Way Kambas. Mereka
                    mencari kayu, menangkap ikan, berburu, menggembala ternak,
                    bahkan bertani. Hal ini tak lepas dari memori masyarakat yang
                    masih lekat dengan bebasnya melenggang ke kawasan ini ketika
                    dijadikan HPH<sup id="id8" class="font-bold rounded border-r border-l border-black px-1"><a href="#8" @click="open=8 , open2= 8, setTimeout(() => open = 0, 10000)">8</a></sup>.
                </p>
                <h1 class="font-bold mt-4">KEBAKARAN (ATAU PEMBAKARAN?) HUTAN</h1>
                <p class="mt-4">
                    Tiadanya tunggak-tunggak besar seolah bertutur bahwa pepohonan
                    telah dimusnahkan. Mungkin itulah dulu yang dipraktekkan oleh
                    HPH. Pemusnahan pepohonan mengakibatkan kawasan menjadi
                    terbuka sehingga mudah ditumbuhi ilalang. Sudah begitu, dampak
                    El Nino yang dilanjutkan dengan La Nina turut menghadirkan
                    kebakaran hebat pada tahun 1997/1998 yang meluluhlantakkan
                    vegetasi hutan. Ilalang pun mengambil alih<sup id="id9" class="font-bold rounded border-r border-l border-black px-1"><a href="#9" @click="open=9, open2= 9, setTimeout(() => open = 0, 10000)">9</a></sup>.
                </p>
                <p class="mt-4">
                    Sial, ilalang gampang terbakar. Dia bahan bakar yang gampang
                    disulut. Celakanya, iklim kemarau Way Kambas sungguh kering
                    sehingga percik api dari puntung rokok sekali pun mudah memicu
                    kebakaran hebat. Tiadanya pepohonan serta luasnya areal terbuka
                    mengakibatkan api kebakaran kerap sulit dikendalikan karena angin
                    menjadi kencang dan tak terduga arah bertiupnya.
                </p>
                <p class="mt-4">
                    Sejatinya, kebakaran memicu tumbuhnya rerumputan baru yang
                    disukai satwa. Tak lama setelah terbakar, satwa akan berdatangan
                    memangsa pucuk-pucuk baru rerumputan. Sial, justru itulah yang
                    diinginkan pemburu. Tarikan jemari mereka ke pelatuk senjata
                    hampir selalu sama dengan tewasnya sang satwa. Maka, mungkin bukan kebakaran, tapi pembakaranlah yang kerap terjadi di Way
                    Kambas<sup id="id10" class="font-bold rounded border-r border-l border-black px-1"><a href="#10" @click="open=10, open2= 10, setTimeout(() => open = 0, 10000)">10</a></sup>. Dan, praktek ini sudah berlangsung lama. “<i>pemburu terbiasa menjebak satwa dengan membakar hutan.
                    Setelah kebakaran biasanya aktivitas perburuan meningkat,</i>”
                    ungkap Suprapto. Tak heran, ilalang seolah abadi di Taman Nasional
                    Way Kambas.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div  :class="open==3 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">Bila melihat luasnya, terkesan TNWK
                    bukanlah prioritas penting konservasi.
                    Namun, tidak demikian halnya bila
                    melihat secara menyeluruh Pulau
                    Sumatera. Tekanan konversi yang luar
                    biasa besar, baik menjadi HTI,
                    perkebunan, maupun kawasan
                    budidaya lainnya, terutama terjadi
                    terhadap hutan dataran rendah di Sumatera. Dan, Way Kambas adalah
                    salah satu hutan dataran rendah
                    terluas yang tersisa di Sumatera.</p>
                <p class="mt-4 text-dark-blue">
                    Keragaman hayati hutan dataran
                    rendah jelas sedemikian tinggi,
                    termasuk floranya. Demikian halnya
                    Taman Nasional Way Kambas.
                    Kecuali orangutan, semua megafauna
                    kharismatis Sumatera terdapat di
                    Way Kambas, seperti gajah sumatera
                    (<i>Elephas maximus sumatranus</i>),
                    harimau sumatera (<i>Panthera tigris
                    sumatrae</i>) , badak sumatera
                    (<i>Dicerorhinus sumatrensis</i>), dan tapir
                    (<i>Tapirus indicus</i>). Bahkan, terdapat
                    satwa yang di dunia kini hanya tersisa
                    di Way Kambas, yakni mentok rimba
                    (<i>Asrcornis scutulata</i>).
                </p>
                <p class="mt-4 text-dark-blue">
                    Letaknya yang terisolir terpisah dari
                    kawasan budidaya serta berbatas
                    langsung dengan laut membuatnya
                    relatif aman. Posisi seperti ini juga
                    yang membuat badak jawa
                    (<i>Rhinoceros sondaicus</i>) stabil di Taman
                    Nasional Ujung Kulon. Namun,
                    berkebalikan dengan TN Bukit
                    Barisan Selatan (TNBBS) Lampung
                    yang lebih luas tapi penuh dengan
                    perambahan dan bahkan diusulkan
                    akan “dibelah” oleh jalan raya.
                    padahal, bagi kementerian
                    Kehutanan, TNBBS dikategorikan
                    balai besar sehingga dikepalai
                    pejabat setingkat eselon 2. Jadi,
                    jangan heran bila Way Kambas yang
                    hanya dikepalai pejabat eselon 3
                    memiliki kuantitas dan kualitas satwa
                    sejenis yang lebih baik dibanding TN
                    Bukit Barisan Selatan, dan oleh
                    karena itu semestinyalah program
                    konservasi, termasuk proteksi, Way
                    Kambas diprioritaskan.
                </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
                <img src="{{ asset('assets/kebakaran.jpg') }}" alt="" class="w-full h-full">
                <p class="text-xs mt-1">
                    Gambar 3. Kebakaran yang terjadi di
                        SPTN II Bungur pada Oktober 2013.
                        Butuh waktu seminggu untuk
                        memadamkan api. Peristiwa ini
                        menghanguskan sebagian tanaman
                        hutan yang telah susah payah ditanam
                        melalui program Gerhan pada 2012. @ Wito Dwi Prawiro / SILVAGAMA
                </p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <h1 class="font-bold mt-4"> RESTORASI</h1>
                <p class="mt-4">
                    Kebakaran yang rutin tentu tak hanya mengganggu pengelola
                    Taman Nasional Way Kambas, tetapi juga satwa karena mematikan
                    pakan dan mengganggu pergerakannya.
                </p>
                <p class="mt-4">
                    Pemadaman tentu saja diperlukan, terutama untuk menghalangi
                    perluasan lahan yang terbakar. Tetapi, itu saja tidak cukup. Ilalang
                    harus dihambat pertumbuhannya dan bahkan harus diganti dengan
                    vegetasi pepohonan yang menunjang kehidupan satwa dan
                    ekosistem Way Kambas. Bila pepohonan tumbuh, tajuknya akan
                    menaungi dan menghambat pertumbuhan ilalang. Akibatnya,
                    sedikit demi sedikit ilalang tergusur dan berubah kembali menjadi
                    belantara.
                </p>
                <p class="mt-4">
                    Bukan perkara mudah mengatasi kebakaran, mempersempit dan
                    menghilangkan ilalang, lalu mengembalikannya menjadi hutan.

                </p>
                <p class="mt-4">
                    <i>Pertama</i>, karena tak semata berurusan dengan teknis reforestasi<sup id="id11" class="font-bold rounded border-r border-l border-black px-1"><a href="#11" @click="open=11, open2= 11, setTimeout(() => open = 0, 10000)">11</a></sup>,
                    tetapi juga adanya faktor manusia yang aktif melakukan
                    pembakaran. Terhadap hal seperti ini, tentu perlu strategi efektif
                    untuk memonitor untuk mendeteksi masuknya para pembakar
                    ilalang.
                </p>
                <p class="mt-4">
                    <i>Kedua</i>, karena pada dasarnya ilalang sulit dimatikan. Bahkan
                    kebakaran pun tak mematikannya. Tak lama setelah kebakaran, umbi dan akarnya segera tumbuh. Di sisin lain, abu bekas pun justru turut menyuburkan tanah.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div  :class="open==3 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">
                    Wilayah pengelolaan Taman
                    Nasional Way Kambas dibagi menjadi beberapa SPTN (Seksi
                    Pengelolaan Taman Nasional).
                    Selanjutnya SPTN dibagi lagi menjadi
                    beberapa resort.
                </p>
                </div>
                <div id="4" :class="open==4 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue"><a href="#id4"><sup  class="font-bold rounded border-r border-l border-black px-1">4</sup> </a>Kawasan hutan di Propinsi Lampung
                    telah ditunjuk sejak zaman Kolonial
                    Belanda. Akan tetapi dari tahun ke
                    tahun luasnya kian menyusut. Pada
                    tahun 1991, luas defenitif kawasan
                    hutan Lampung seluas 1.237.268
                    hektar, yang menyusut menjadi
                    1.144.512 hektar pada tahun
                    1999 dan menyusut lagi menjadi
                    1.004.735 hektar pada tahun 2000
                    seiring terbitnya SK Menteri
                    Kehutanan No. 256/Kpts-II/2000
                    tanggal 23 Agustus 2000. Selain
                    TNWK, kawasan konservasi yang ada
                    di Lampung antara lain Taman
                    Nasional Bukit Barisan Selatan
                    (356.800 hektar), Cagar Alam
                    Krakatau (13.735,1 hektar), dan
                    Taman Hutan Raya (Tahura) Wan
                    Abdul Rahman (22.244 hektar).</sup>
                </p>
                </div>
                <div id="5" :class="open==5 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue"><a href="#id5"><sup  class="font-bold rounded border-r border-l border-black px-1">5</sup></a>
                    Setiap tahun selalu ada konflik
                    penduduk dengan gajah di sekitar
                    Way Kambas. Sebagai gambaran
                    tingginya konflik tersebut terlihat dari
                    rekaman Forum Rembug Desa
                    Penyangga (FRDP) Way Kambas
                    yang mencatat terjadinya 274 kali
                    gangguan gajah hanya pada rentang
                    Bulan Januari – Mei 2012 saja.
                </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
            <img src="{{ asset('assets/peta.jpg') }}" alt="" class="w-full h-full">
            <p class="mt-1 text-xs">Gambar 4. Salah satu kawasan masif
                ilalang di TN. Way Kambas.
                Konsistensi penghutanan kembali serta
                penanggulangan kebakaran yang
                memadai menjadi kunci keberhasilan
                restorasi kawasan agar kembali seperti
                sedia kala. Didigitasi dengan Google Earth Pro oleh Timer Manurung. 2013</p>

        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4">
                    <i>Ketiga</i>, kecepatan pertumbuhan ilalang yang melebihi pertumbuhan
                    pepohonan hutan menjadi penghalang bertahan hidupnya anakan
                    vegetasi pepohonan. Tanpa intervensi, ilalang akan dengan cepat
                    melalap anakan vegetasi yang membuatnya sulit mendapatkan sinar
                    matahari dan ruang pertumbuhan.
                </p>
                <p class="mt-4">
                    <i>Keempat</i>, pertumbuhan anakan vegetasi hutan juga dapat terganggu
                    karena lahan yang terbuka mengakibatkan pergerakan dan
                    pandangan satwa lebih leluasa sehingga cenderung merenggut
                    pucuk-pucuk pohon muda. Tak sempatlah anakan ini besar. Atau
                    pertumbuhannya sangat lambat, dan ilalang pun rakus melahapnya.
                </p>
                <p class="mt-4">
                    Menyadari tantangan inilah, Yayasan Silvagama<sup id="id12" class="font-bold rounded border-r border-l border-black px-1"><a href="#12" @click="open=12, open2= 12, setTimeout(() => open = 0, 10000)">12</a></sup> secara sengaja
                    memilih Komponen 1 (<i>Reforestasi Tematik, Pengendalian
                    Kebakaran Hutan, dan Pengamanan Suksesi Alami</i>) dalam<sup id="id13" class="font-bold rounded border-r border-l border-black px-1"><a href="#13" @click="open=13, open2= 13, setTimeout(() => open = 0, 10000)">13</a></sup>
                    program bersama<sup id="id14" class="font-bold rounded border-r border-l border-black px-1"><a href="#14" @click="open=14, open2= 14, setTimeout(() => open = 0, 10000)">14</a></sup> Konsorsium ALeRT-Unila . Komponen ini
                    memaksimalkan dukungan pendanaan TFCA Sumatera<sup id="id15" class="font-bold rounded border-r border-l border-black px-1"><a href="#15" @click="open=15, open2= 15, setTimeout(() => open = 0, 10000)">15</a></sup> .
                    Melengkapinya, Silvagama juga menggali sumber-sumber
                    dukungan lain, termasuk mengoptimalkan sumberdaya internalnya.
                </p>
                <p class="mt-4">
                    Kami menyebut keseluruhan aktivitas ini dengan restorasi. Tak
                    sekedar reforestasi, tapi juga memulihkan ekosistem Way Kambas
                    sebagai penyangga hidupan liar atau alami (<i>wildlife</i>) sekaligus
                    menjamin dukungan ekologis bagi wilayah sekitarnya. Karena
                    itulah, selain mengantisipasi kebakaran melalui skema, jalur tanam,dan pemilihan jenis tahan api, vegetasi pepohonan yang akan
                    ditanam juga akan disesuaikan dengan jenis lokal dan pakan satwa,
                    terutama gajah dan badak sumatera.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div id="6"  :class="open==6 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue"><a href="#id6"><sup  class="font-bold rounded border-r border-l border-black px-1">6</sup> </a>Terdapat 36 desa yang berbatasan
                    langsung dengan Taman Nasional
                    Way Kambas. Jumlah ini sangat
                    mungkin bertambah mengingat
                    terbukanya kemungkinan pemekaran
                    desa bahkan ketika batas desa awal
                    sekalipun belum jelas.
                </p>
                </div>
                <div id="7"  :class="open==7 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id7"><sup  class="font-bold rounded border-r border-l border-black px-1">7</sup></a>  Polisi Hutan. Satuan pengamanan
                    kawasan di dalam organisasi kerja
                    Balai Taman Nasional Way Kambas.
                </p>
                </div>
                <div id="8"  :class="open==8 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">
                    <a href="#id8"><sup  class="font-bold rounded border-r border-l border-black px-1">8</sup></a>  Singkatan dari Hak Pengusahaan
                    Hutan. HPH merupakan konsesi
                    pemanenan kayu (<i>logging</i>) dalam
                    kawasan hutan negara. Sebelum
                    ditunjuk menjadi taman nasional,
                    sebagian kawasan Way Kambas
                    merupakan areal HPH
                </p>
                </div>
                <div id="9"  :class="open==9 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id9"><sup  class="font-bold rounded border-r border-l border-black px-1">9</sup></a>  Digitasi cepat Yayasan Silvagama
                    mencatat eksisnya hamparan ilalang
                    masif seluas 40.780 hektar di Resort
                    Bungur dan sekitarnya. Hamparan ini
                    saja sudah mencakup 32% dari
                    seluruh luas TNWK. Padahal, masih
                    terdapat beberapa spot illalang
                    lainnya di dalam TNWK.
                </p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
            <img src="{{ asset('assets/ilalang-2.jpg') }}" alt="" class="w-full h-full">
            <p class="text-xs mt-1">
                Gambar 5. Salah satu kawasan masif
                            ilalang di TN. Way Kambas.
                            Konsistensi penghutanan kembali serta
                            penanggulangan kebakaran yang
                            memadai menjadi kunci keberhasilan
                            restorasi kawasan agar kembali seperti
                            sedia kala. Didigitasi dengan Google Earth Pro oleh Timer Manurung. 2013</p>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4">
                    Restorasi ini didesain untuk senantiasa sinergis dengan program
                    Balai Taman Nasional Way Kambas. Pun, akan semaksimal
                    mungkin meningkatkan partisipasi masyarakat lokal dalam
                    implementasinya. Dalam jangka panjang, restorasi ini dimaksudkan
                    menjadi model dalam penyusunan <i>grand design </i> restorasi ekosistem
                    di seluruh Way Kambas.
                </p>
                <div >
                    <img src="{{ asset('assets/ilalang-3.jpg') }}" alt="" class="w-full h-full mt-4">
                        <p class="text-xs mt-1">
                            Gambar 6. Hangusnya bagian atas
                            ilalang tak membuat rumputrumputan ini seutuhnya mati. ketika
                            kebakaran reda, tunas-tunas baru
                            segera tumbuh yang memancing
                            kedatangan satwa liar. @ Wito Dwi Prawiro / SILVAGAMA
                        </p>

                </div>
                <h1 class="font-bold mt-12">RAWA KADUT</h1>
                <p class="mt-4">
                    Di dekat penghujung punggungan beralur kecil itu, tiba-tiba ilalang
                    tumbuh menggila, lebat dengan balutan semak-semak berduri.
                    Ranting-rantingnya yang kaku menjuntai segera mencakar wajah
                    dan tangan kami. Daun-daun ilalang membelit roda. Hendra,
                    penduduk Way Bungur yang menjadi pekerja restorasi Yayasan
                    Silvagama pun harus turun tangan menebas semak-semak dengan
                    parangnya. Empat motor yang kami tumpangi pun berjalan terseokseok menerobos lebatnya ilalang.
                </p>
                <p class="mt-4">
                    Tetapi setelah lepas dari hadangan rumput raksasa itu dan mendaki
                    punggungan bukit kecil, ada oase lain yang menghibur. Sungai kecil
                    mengalir dengan tenang di balik kerimbunan pohon. Bening airnya
                    dipenuhi ikan kecil dan ikan gabus yang berenang bebas.
                    Masyarakat setempat menyebutnya sebagai Rawa Kadut.
                </p>
                <div class="mt-4">
                    <img src="{{ asset('assets/kotoran.jpg') }}" alt="" class="w-full h-full">
                    <p class="text-xs mt-1">
                        Gambar 7. Kotoran-kotoran gajah yang
                            berserak di tepian Sungai kadut,
                            menandakan masih sehatnya hidupan liar
                            di sekitar areal restorasi. @ Koen Setyawan / SILVAGAMA
                    </p>

                </div>
                <p class="mt-4">
                    Sungai itu meliuk seperti huruf U di antara padang ilalang. Dibatasi
                    kanan kirinya dengan pohon-pohon besar. Sisanya, ilalang tumbuh
                    tanpa ampun.
                </p>
                <p class="mt-4">
                    Kami lihat peta, Rawa Kadut terletak di tengah hamparan ilalang. Di
                    sinilah kami akan mendirikan pos. Pos Rawa Kadut, itulah
                    namanya.
                </p>
                <p class="mt-4">
                    <i>“Lokasinya dilindungi aliran sungai bervegetasi rapat. Hanya di
                    bagian ujung lekukan sungai itu yang terbuka. Kita tinggal menarik
                    garis lurus yang panjangnya sekitar setengah kilometer dan
                    membuatnya jadi sekat bakar,”</i> kata Wito Dwi Prawiro,
                    Koordinator Restorasi Silvagama.
                </p>
                <p class="mt-4">
                    Menarik, karena pemilihan Rawa Kadut bukan tanpa alasan.
                    Kegiatan restorasi yang dimulai di tengah hamparan ilalang,
                    meskipun relatif jauh dari pemukiman dan atau pos pengelolaan,
                    diharapkan memudahkan arah dan perluasan restorasi berikutnya.
                    Selain itu, ada kolam air di dalam plot yang dipilih tersebut. Satu
                    agak kecil, sedang satunya lebih besar. Keduanya bisa menjadi
                    sumber air untuk menyiram tanaman. Bisa pula untuk memadamkan
                    api apabila terjadi kebakaran. Tak hanya itu, lokasinya yang jauh ke Utara Resort Bungur diharapkan sebagai titik identifikasi penerobos
                    taman nasional dari arah Utara.
                </p>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">
                <div id="10"  :class="open==10 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id10"><sup  class="font-bold rounded border-r border-l border-black px-1">10</sup></a> Menurut data base Balai Taman
                    Nasional Way Kambas, kebakaran
                    selalu terjadi hampir setiap tahun,
                    dengan luasan areal bervariasi.
                    Kebakaran terherbat dan
                    mengakibatkan kerusakan terluas
                    tentulah terjadi pada 1997/1998.
                </p>
                <img src="{{ asset('assets/grafik.png') }}" alt="" class="w-full mt-4">
                <p class="text-dark-blue">Grafik kebakaran hutan di TN Way Kambas</p>
                </div>
                <div id="11"  :class="open==11 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p class="mt-4 text-dark-blue">
                    <a href="#id11"><sup  class="font-bold rounded border-r border-l border-black px-1">11</sup></a> Selain Gerakan Rehabilitasi Hutan
                    dan Lahan (GERHAN) setiap tahun
                    menanami padang ilalang dengan berbagai jenis tanaman. Organisasi
                    lainnya, ALeRT (Aliansi Lestari Rimba
                    Terpadu) pun tak ketinggalan
                    melakukan reforestasi di TNWK.
                </p>
                </div>
                <div id="12"  :class="open==12 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id12"><sup  class="font-bold rounded border-r border-l border-black px-1">12</sup></a> Organisasi non pemerintah yang
                    bergerak di bidang pelestarian
                    sumberdaya alam. Didirikan pada
                    tanggal 12 November 2009 dengan
                    tujuan mengupayakan terwujudnya
                    kelestarian sumberdaya alam dan
                    keseimbangan lingkungan demi
                    kelangsungan kehidupan manusia.
                    Untuk mencapai tujuan tersebut,
                    Silvagama melaksanakan kegiatankegiatan dengan maksud: (i)
                    Mempromosikan aksi-aksi nyata dan
                    positif dalam pelestarian
                    sumberdaya alam dan lingkungan; (ii)
                    Mengeliminir aksi-aksi destruktif
                    1
                    sumber daya alam; (iii)
                    Mengembangkan aktivitas-aktivitas
                    yang mendorong peningkatan
                    kesejahteraan dalam jangka panjang
                    sebagai tools utama pelestarian
                    sumberdaya alam dan lingkungan;
                    (iv) Melahirkan kebijakan -kebijakan
                    yang berpihak pada konservasi dan
                    peningkatan kesejahteraan; (v)
                    Membentuk kader-kader pelestari
                    sumberdaya alam sehingga baik
                    secara pribadi dan dan atau
                    bersama-sama dengan pihak lain
                    terlibat dalam upaya pelestarian
                    sumberdaya alam dan lingkungan.
                </p>
                </div>
                <div id="13"  :class="open==13 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                    <p class="mt-4 text-dark-blue">
                        <a href="#id13"><sup  class="font-bold rounded border-r border-l border-black px-1">13</sup></a> Program bersama ini terdiri atas 4
                        komponen, yang masing-masing
                        adalah Komponen 1 (Reforestasi
                        tematik (terutama pakan gajah), dalkarhut dan pengamanan suksesi
                        alami), Komponen 2 (Pemantauan dan
                        Perlindungan distribusi populasi dan
                        kondisi sumber daya vital harimau,
                        badak, gajah, tapir, beruang dan
                        mentok rimba), Komponen 3
                        (
                        Mengembangkan model
                        pengelolaan ekowisata minat khusus),
                        Komponen 4 (Pengembangan
                        ekonomi kreatif dan penyadartahuan
                        sebagai dukungan penanganan
                        konflik satwa-manusia).
                    </p>
                    </div>
                    <div id="14"  :class="open==14 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                        <p  class="mt-4 text-dark-blue">
                            <a href="#id14"><sup  class="font-bold rounded border-r border-l border-black px-1">14</sup></a>  Konsorsium ini terdiri atas ALeRT,
                            Universitas Lampung (UNILA),
                            Program Konser vasi Harimau
                            Sumatera (PKHS), Forum Rembug
                            Desa Penyangga (FRDP) Way
                            Kambas, Sajogyo Institute (SAINS),
                            Yayasan SILVAGAMA, Saka Wana
                            Bakti Way Kambas, dan Save
                            Indonesia Endangered Species (SIES).
                        </p>
                        </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-col px-4 mt-4 ">
                <img src="{{ asset('assets/hutan.jpg') }}" alt="" class="w-full h-full">
               <p class="text-xs mt-1">
                Gambar 8. Jembatan kecil yang kami
                        bangun mengantarkan kami melintasi
                        Rawa Kadut. Meski dalamnya hanya 30 cm.
                        Banyaknya kotoran gajah yang kami
                        temukan, menandakan sungai ini sering
                        dikunjungi kelompok gajah. Dan hanya 50
                        m dari sini, kami dirikan Pos Rawa Kadut.
                        Kelak, kami bermimpi, setelah lelah
                        merestorasi kami bisa menikmati
                        pemandangan gajah yang minum di sungai. @ Koen Setyawan / SILVAGAMA
               </p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify">
            <div class="sm:w-8/12 w-full">
                <p class="mt-4">
                    Batas terluar plot restorasi pun kami petakan. Desain penanaman
                    yang kami rancang berbentuk lapisan berselang-seling 30 meter
                    antara bagian yang ditanami dan yang dibiarkan ditumbuhi alangalang segera disesuaikan dengan bentang alam (landscape) aslinya.
                    Pos ini kelak akan akan dihuni secara bergilir oleh petugas yang
                    terdiri atas polhut dan staf Silvagama berikut masyarakat lokal.
                    Juga akan dilengkapi dengan fasilitas pembibitan tanaman, tandon
                    air, instalasi pengairan untuk pemeliharaan sekaligus pemadaman
                    kebakaran, listrik tepat guna, dan berbagai kebutuhan penunjang
                    lainnya.
                </p>
                <div class=" mt-4 ">
                        <img src="{{ asset('assets/tanaman.jpg') }}" alt="" class="w-full">
                        <p class="mt-1 text-xs">
                            Gambar 9. Tanaman reforestasi yang mati
                                meranggas karena terbakar di SPTN II Bungur,
                                Way Kambas pada Oktober 2013. Kebakaran yang
                                terjadi hampir setiap tahun seperti inilah salah satu
                                musuh utama restorasi. Diperlukan pengawasan
                                dan perlindungan yang efektif agar tanaman leluasa tumbuh. @ Wito Dwi Prawiro / SILVAGAMA
                        </p>
                        <p class="mt-4">
                            Betapapun perlu usaha keras sebelum semuanya terwujud.
                            Mencapainya, kami harus tersuruk-suruk menaklukkan kelebatan
                            ilalang. Dan, bayangan pepohonan lebat yang kembali menghutan
                            menggantikan padang ilalang semakin menguat di benak kami.
                        </p>


                </div>
            </div>
            <div class="w-4/12 sm:block hidden text-sm">


                <div id="15"  :class="open==15 ? ' animate-pulse border border-green-500 px-2 py-2' : ''" >
                <p  class="mt-4 text-dark-blue">
                    <a href="#id15"><sup  class="font-bold rounded border-r border-l border-black px-1">15</sup></a>  TFCA-Sumatera merupakan
                    program skema pengalihan utang
                    untuk lingkungan (Debt for-Nature
                    Swap) yang disepakati oleh
                    Pemerintah Amerika Serikat dan
                    Pemerintah Indonesia berdasarkan
                    Tropical Forest Conser vation
                    Act / TFCA (Undang - Undang
                    Pelestarian Hutan Tropis Pemerintah
                    Amerika Serikat tahun 1998). Skema
                    ini dirancang untuk menjaga dan
                    merestorasi hutan tropis di berbagai
                    negera yang mempunyai kekayaan
                    hutan tinggi melalui program
                    pendanaan bagi kegiatan konservasi
                    hutan oleh masyarakat madani,
                    termasuk Lembaga Non-Pemerintah
                    dan perguruan tinggi. Skema pendanaan yang di Indonesia
                    disebut dengan TFCA-Sumatera
                    diadministrasikan oleh Yayasan
                    KEHATI untuk memfasilitasi
                    pendanaan hibah bagi kegiatan yang
                    diantaranya mencakup restorasi dan
                    konservasi hutan di 13 bentang alam
                    prioritas di Sumatera. Bentang alam
                    atau kawasan prioritas [mencakup kawasan penyangga (buffer zone),
                    koridor, dan kawasan-kawasan
                    penghubung] tersebut adalah: (1)
                    Hutan Warisan Seulawah, (2) Taman
                    Nasional Leuser dan Ekosistem Leuser,
                    (3) Taman Nasional Batang Gadis, (4)
                    Ekosistem Angkola, (5) Batang Toru,
                    (6) Daeran Aliran Sungai Toba Barat, (7) Taman Nasional Bukit Tigapuluh, (8) Semenanjung Siak Kampar, (9) Ekosistem Tesso Nilo, (10) Taman Nasional Kerinci-Seblat, (11)
                    Kepulauan Siberut & Mentawai, (12)
                    Taman Nasional Bukit Barisan Selatan,
                    dan (13) Taman Nasional Way
                    Kambas.
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
                        Gambar 10. Pagi menyapa restorasi ALeRT di
                        SPTN II Bungur, Way Kambas. Pepohonan mulai
                        menghijau. Jika terhindar dari kebakaran, karena
                        sebagian telah terbakar pada September 2012,
                        pohon-pohon ini akan mengembalikan fungsi Way
                        Kambas sebagai penyangga hidupan liar atau
                        alami (wildlife) dan menjamin dukungan ekologis
                        bagi wilayah sekitarnya. @ Koen Setyawan / SILVAGAMA
                    </p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex flex-row px-4 mt-4 space-x-12 text-justify mb-12">
            <div class="sm:w-8/12 w-full">

                <p class="mt-4">
                    <i>“Jangan pernah menyerah sebelum mencobanya,”</i> seloroh Hendra.
                    Bernada kelakar memang dia, tapi tepat menggambarkan tekad
                    kami. Di Rawa Kadut harapan kami menggumpal. <span class="bg-red-500 h-3 w-3 inline-flex"></span>
                </p>

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
                <p><sup  class="font-bold rounded border-r border-l border-black px-1">1</sup> Kawasan hutan adalah wilayah
                    tertentu yang ditunjuk dan atau
                    ditetapkan oleh pemerintah untuk
                    dipertahankan keberadaannya
                    sebagai hutan tetap. Dengan defenisi
                    yang demikian, kawasan hutan tidak
                    selalu bertutupan hutan. Dan itu tak
                    jarang terjadi. Luas kawasan hutan
                    Indonesia adalah 129.023.378,15
                    hektar. Dari keseluruhan kawasan
                    tersebut, baru 21.448.000 hektar
                    (setara dengan 16,62% dari total
                    kawasan hutan) yang sudah tuntas
                    dikukuhkan atau ditetapkan.
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
                <p><sup  class="font-bold rounded border-r border-l border-black px-1">2</sup> Taman nasional adalah kawasan
                    pelesatarian alam yang mempunyai
                    ekosistem asli, dikelola dengan sistem
                    zonasi yang dimanfaatkan untuk
                    tujuan penelitian, ilmu pengetahuan,
                    pendidikan, menunjang budidaya,
                    pariwisata, dan rekreasi.
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
                <p><sup  class="font-bold rounded border-r border-l border-black px-1">3</sup> Taman Nasional Way Kambas
                    (TNWK) merupakan kawasan hutan
                    konservasi yang ditunjuk melalui Surat
                    Menteri Kehutanan No. 670/Kpts-
                    II/1999 tanggal 26 Agustus 1999
                    dengan luasan mencapai 125.631.31
                    hektar. Secara administratif, TNWK
                    berlokasi di Kabupaten Lampung
                    Timur dengan koordinat geografis
                    antara 40<sup>0</sup>37' – 50<sup>0</sup>16' Lintang
                    Selatan dan antara 105<sup>0</sup>33' –
                    105<sup>0</sup>54' Bujur Timur.
                </p>
                <p class="mt-4">Bila melihat luasnya, terkesan TNWK
                    bukanlah prioritas penting konservasi.
                    Namun, tidak demikian halnya bila
                    melihat secara menyeluruh Pulau
                    Sumatera. Tekanan konversi yang luar
                    biasa besar, baik menjadi HTI,
                    perkebunan, maupun kawasan
                    budidaya lainnya, terutama terjadi
                    terhadap hutan dataran rendah di Sumatera. Dan, Way Kambas adalah
                    salah satu hutan dataran rendah
                    terluas yang tersisa di Sumatera.</p>
                <p class="mt-4">
                    Keragaman hayati hutan dataran
                    rendah jelas sedemikian tinggi,
                    termasuk floranya. Demikian halnya
                    Taman Nasional Way Kambas.
                    Kecuali orangutan, semua megafauna
                    kharismatis Sumatera terdapat di
                    Way Kambas, seperti gajah sumatera
                    (<i>Elephas maximus sumatranus</i>),
                    harimau sumatera (<i>Panthera tigris
                    sumatrae</i>) , badak sumatera
                    (<i>Dicerorhinus sumatrensis</i>), dan tapir
                    (<i>Tapirus indicus</i>). Bahkan, terdapat
                    satwa yang di dunia kini hanya tersisa
                    di Way Kambas, yakni mentok rimba
                    (<i>Asrcornis scutulata</i>).
                </p>
                <p class="mt-4">
                    Letaknya yang terisolir terpisah dari
                    kawasan budidaya serta berbatas
                    langsung dengan laut membuatnya
                    relatif aman. Posisi seperti ini juga
                    yang membuat badak jawa
                    (<i>Rhinoceros sondaicus</i>) stabil di Taman
                    Nasional Ujung Kulon. Namun,
                    berkebalikan dengan TN Bukit
                    Barisan Selatan (TNBBS) Lampung
                    yang lebih luas tapi penuh dengan
                    perambahan dan bahkan diusulkan
                    akan “dibelah” oleh jalan raya.
                    padahal, bagi kementerian
                    Kehutanan, TNBBS dikategorikan
                    balai besar sehingga dikepalai
                    pejabat setingkat eselon 2. Jadi,
                    jangan heran bila Way Kambas yang
                    hanya dikepalai pejabat eselon 3
                    memiliki kuantitas dan kualitas satwa
                    sejenis yang lebih baik dibanding TN
                    Bukit Barisan Selatan, dan oleh
                    karena itu semestinyalah program
                    konservasi, termasuk proteksi, Way
                    Kambas diprioritaskan.
                </p>
                <p class="mt-4">
                    Wilayah pengelolaan Taman
                    Nasional Way Kambas dibagi menjadi beberapa SPTN (Seksi
                    Pengelolaan Taman Nasional).
                    Selanjutnya SPTN dibagi lagi menjadi
                    beberapa resort.
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
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">4</sup> Kawasan hutan di Propinsi Lampung
                telah ditunjuk sejak zaman Kolonial
                Belanda. Akan tetapi dari tahun ke
                tahun luasnya kian menyusut. Pada
                tahun 1991, luas defenitif kawasan
                hutan Lampung seluas 1.237.268
                hektar, yang menyusut menjadi
                1.144.512 hektar pada tahun
                1999 dan menyusut lagi menjadi
                1.004.735 hektar pada tahun 2000
                seiring terbitnya SK Menteri
                Kehutanan No. 256/Kpts-II/2000
                tanggal 23 Agustus 2000. Selain
                TNWK, kawasan konservasi yang ada
                di Lampung antara lain Taman
                Nasional Bukit Barisan Selatan
                (356.800 hektar), Cagar Alam
                Krakatau (13.735,1 hektar), dan
                Taman Hutan Raya (Tahura) Wan
                Abdul Rahman (22.244 hektar).</sup>
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
                Setiap tahun selalu ada konflik
                penduduk dengan gajah di sekitar
                Way Kambas. Sebagai gambaran
                tingginya konflik tersebut terlihat dari
                rekaman Forum Rembug Desa
                Penyangga (FRDP) Way Kambas
                yang mencatat terjadinya 274 kali
                gangguan gajah hanya pada rentang
                Bulan Januari – Mei 2012 saja.
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
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">6</sup> Terdapat 36 desa yang berbatasan
                langsung dengan Taman Nasional
                Way Kambas. Jumlah ini sangat
                mungkin bertambah mengingat
                terbukanya kemungkinan pemekaran
                desa bahkan ketika batas desa awal
                sekalipun belum jelas.
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
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">7</sup>  Polisi Hutan. Satuan pengamanan
                kawasan di dalam organisasi kerja
                Balai Taman Nasional Way Kambas.
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
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">8</sup>  Singkatan dari Hak Pengusahaan
                Hutan. HPH merupakan konsesi
                pemanenan kayu (<i>logging</i>) dalam
                kawasan hutan negara. Sebelum
                ditunjuk menjadi taman nasional,
                sebagian kawasan Way Kambas
                merupakan areal HPH
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
             <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">9</sup>  Digitasi cepat Yayasan Silvagama
                mencatat eksisnya hamparan ilalang
                masif seluas 40.780 hektar di Resort
                Bungur dan sekitarnya. Hamparan ini
                saja sudah mencakup 32% dari
                seluruh luas TNWK. Padahal, masih
                terdapat beberapa spot illalang
                lainnya di dalam TNWK.
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
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">10</sup> Menurut data base Balai Taman
                    Nasional Way Kambas, kebakaran
                    selalu terjadi hampir setiap tahun,
                    dengan luasan areal bervariasi.
                    Kebakaran terherbat dan
                    mengakibatkan kerusakan terluas
                    tentulah terjadi pada 1997/1998.
                </p>
                <img src="{{ asset('assets/grafik.png') }}" alt="" class="w-full mt-4">
                <p>Grafik kebakaran hutan di TN Way Kambas</p>
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
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">11</sup> Selain Gerakan Rehabilitasi Hutan
                    dan Lahan (GERHAN) setiap tahun
                    menanami padang ilalang dengan berbagai jenis tanaman. Organisasi
                    lainnya, ALeRT (Aliansi Lestari Rimba
                    Terpadu) pun tak ketinggalan
                    melakukan reforestasi di TNWK.
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
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">12</sup> Organisasi non pemerintah yang
                    bergerak di bidang pelestarian
                    sumberdaya alam. Didirikan pada
                    tanggal 12 November 2009 dengan
                    tujuan mengupayakan terwujudnya
                    kelestarian sumberdaya alam dan
                    keseimbangan lingkungan demi
                    kelangsungan kehidupan manusia.
                    Untuk mencapai tujuan tersebut,
                    Silvagama melaksanakan kegiatankegiatan dengan maksud: (i)
                    Mempromosikan aksi-aksi nyata dan
                    positif dalam pelestarian
                    sumberdaya alam dan lingkungan; (ii)
                    Mengeliminir aksi-aksi destruktif
                    1
                    sumber daya alam; (iii)
                    Mengembangkan aktivitas-aktivitas
                    yang mendorong peningkatan
                    kesejahteraan dalam jangka panjang
                    sebagai tools utama pelestarian
                    sumberdaya alam dan lingkungan;
                    (iv) Melahirkan kebijakan -kebijakan
                    yang berpihak pada konservasi dan
                    peningkatan kesejahteraan; (v)
                    Membentuk kader-kader pelestari
                    sumberdaya alam sehingga baik
                    secara pribadi dan dan atau
                    bersama-sama dengan pihak lain
                    terlibat dalam upaya pelestarian
                    sumberdaya alam dan lingkungan.
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
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">13</sup>  Program bersama ini terdiri atas 4
                    komponen, yang masing-masing
                    adalah Komponen 1 (Reforestasi
                    tematik (terutama pakan gajah), dalkarhut dan pengamanan suksesi
                    alami), Komponen 2 (Pemantauan dan
                    Perlindungan distribusi populasi dan
                    kondisi sumber daya vital harimau,
                    badak, gajah, tapir, beruang dan
                    mentok rimba), Komponen 3
                    (
                    Mengembangkan model
                    pengelolaan ekowisata minat khusus),
                    Komponen 4 (Pengembangan
                    ekonomi kreatif dan penyadartahuan
                    sebagai dukungan penanganan
                    konflik satwa-manusia).
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
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">14</sup>  Konsorsium ini terdiri atas ALeRT,
                    Universitas Lampung (UNILA),
                    Program Konser vasi Harimau
                    Sumatera (PKHS), Forum Rembug
                    Desa Penyangga (FRDP) Way
                    Kambas, Sajogyo Institute (SAINS),
                    Yayasan SILVAGAMA, Saka Wana
                    Bakti Way Kambas, dan Save
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
                <p  class=""><sup  class="font-bold rounded border-r border-l border-black px-1">15</sup>  TFCA-Sumatera merupakan
                    program skema pengalihan utang
                    untuk lingkungan (Debt for-Nature
                    Swap) yang disepakati oleh
                    Pemerintah Amerika Serikat dan
                    Pemerintah Indonesia berdasarkan
                    Tropical Forest Conser vation
                    Act / TFCA (Undang - Undang
                    Pelestarian Hutan Tropis Pemerintah
                    Amerika Serikat tahun 1998). Skema
                    ini dirancang untuk menjaga dan
                    merestorasi hutan tropis di berbagai
                    negera yang mempunyai kekayaan
                    hutan tinggi melalui program
                    pendanaan bagi kegiatan konservasi
                    hutan oleh masyarakat madani,
                    termasuk Lembaga Non-Pemerintah
                    dan perguruan tinggi. Skema pendanaan yang di Indonesia
                    disebut dengan TFCA-Sumatera
                    diadministrasikan oleh Yayasan
                    KEHATI untuk memfasilitasi
                    pendanaan hibah bagi kegiatan yang
                    diantaranya mencakup restorasi dan
                    konservasi hutan di 13 bentang alam
                    prioritas di Sumatera. Bentang alam
                    atau kawasan prioritas [mencakup kawasan penyangga (buffer zone),
                    koridor, dan kawasan-kawasan
                    penghubung] tersebut adalah: (1)
                    Hutan Warisan Seulawah, (2) Taman
                    Nasional Leuser dan Ekosistem Leuser,
                    (3) Taman Nasional Batang Gadis, (4)
                    Ekosistem Angkola, (5) Batang Toru,
                    (6) Daeran Aliran Sungai Toba Barat, (7) Taman Nasional Bukit Tigapuluh, (8) Semenanjung Siak Kampar, (9) Ekosistem Tesso Nilo, (10) Taman Nasional Kerinci-Seblat, (11)
                    Kepulauan Siberut & Mentawai, (12)
                    Taman Nasional Bukit Barisan Selatan,
                    dan (13) Taman Nasional Way
                    Kambas.
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

