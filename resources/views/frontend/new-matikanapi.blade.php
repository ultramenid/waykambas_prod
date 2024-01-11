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
                <h1 class="text-5xl font-black text-white ">Matikan Api Menjaga Puspa</h1>
                <p class="text-white">Fajar Sandhika dan timnya melawan api yang melahap ladang ilalang di Rawa Kadut, Taman Nasional Way Kambas, Lampung. Hasil kerja mereka berhasil menyelamatkan program reforestasi 100 hektare dengan sekitar 20 ribu pohon.</p>
                <img src="{{ asset('assets/hazeid.png') }}" alt="Matikan Api Menjaga Puspa" class="sm:w-52 w-full mb-12">
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4">
        <div class=" py-4  border-b border-b-gray-400">
            <h2 class=" font-bold mb-2">Disalin sepenuhnya dari:</h2>
            <a  href="https://auriga.or.id/resource/reference/matikan-api-menjaga-puspa.pdf" class="mt-1 mb-2 underline text-green-500">Disalin dari artikel yang diterbitkan <a class="font-bold underline text-green-500">Majalah Tempo edisi 3 Januari 2015</a></a>
        </div>
    </div>

    <div class="max-w-2xl mx-auto px-4">
        <p class="leading-relaxed tracking-wide mt-8">
            A sap mengepul di arah reforestasl Rawa Kadut, Taman Naslonal Way Kambas,
            Lampung, 9 Agustus 2015. Saat ltu, jarum Jam menunjuk angka sembilan. Fajar
            Sandhika, Koordinator Komponen Reforestasl Yayasan Silvagama, dan Arum
            Mutasim, yang sedang berada dl pondok, bergegas mengecek ke lokasi titik api.
            Dengan sepeda motor, mereka menyusuri jalan setapak yang membuJur di sela
            sela rimbunnya ilalang.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            Sesampai mereka di lokasi, analisls sementara dilakukan: api bergerak ke arah
            barat, diperkirakan akan melewati daerah di seberang Sungai Kadut yang
            berada di belakang pondok. Lantaran angin belum terlalu besar, rambatan api
            ditaksir mencapai kawasan belakang pondok selepas pukul 12.00. Anallsis kelar,
            Fajar dan Arum segera menggeber kembali sepeda motor menuju pondok.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            “Sesampai di pondok, kami bagi tugas,”kata Fajar menceritakan kembali
            peristiwa itu kepada Tempo di pondok Rawa Kadut, awal Desember lalu.
            Tiga orang diminta menghadang api di daerah belakang pondok dengan
            memanfaatkan jalur atau jalan logistik sebagai sekat bakar. Adapun fajar dan
            arum akan ke kampung terdekat, Bungur, untuk mencari tambahan tenaga,
            plus berkoordinasi dengan petugas di Seksii Pengelolaan Taman Nasional
            (SPTN) II Bungur.
        </p>
    </div>

    <div class="max-w-4xl mx-auto px-4 mt-12">
        <h2 class="text-left text-2xl font-bold tracking-wider mb-10 ">“Fajar dan tim sangat membantu. Kalau terjadi kebakaran, informasi pertama yang kami terima malah dari temanteman itu. Keberhasilan melindungi area yang mereka tanami sangat membantu reforestasi di Way Kambas.”</h2>
        <a class="font-black text-xl ">Suharno</a>
        <p class="font-semibold ">Polisi Hutan Pelaksana Lanjutan, Koordinator Pemadam Kebakaran Taman Nasional Way Kambas.</p>
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
        <p class="text-xs text-right mt-1">Anggota tim Fajar saat memadamkan api di Rawa Kadut, Taman Nasional Way Kambas, Lampung, 9 Agustus 2015</p>
    </div>

    <div class="max-w-7xl flex sm:flex-row flex-col-reverse gap-10 ml-auto sm:mt-16 mt-8 sm:px-12 px-4">
        <div class="sm:w-9/12 w-full sm:px-14 border-r border-gray-500">
            <p class="leading-relaxed tracking-wide ">“Tanaman kami edisi pertama sempat dilalap api tahun lalu,” ujar Timer
                Manurung, pendiri Silvagama-kini bernama Auriga Nusantara. Kebakaran
                memang biasa terjadi di kawasan ini. Salah satu penyebabnya adalah
                pembakaran oleh orang tak bertanggung jawab agar ilalang hijau tumbuh
                pasca·kebakaran dan memancing satwa keluar sehingga gampang diburu.
                Timer pun mengirim Fajar untuk melakukan penanaman kembali, plus tugas
                baru: menghalau api jika ada kebakaran. Fajar bertugas sejak November 2014.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">Saat tiba di lokasi, Fajar tak menunggu datangnya kebakaran. Dia bersama
                timnya segera membuat sekat bakar sepanjang satu kilometer dengan lebar
                30 meter di Rawa Kadut, Desember 2014. Sekat bakar adalah lahan yang
                dibersihkan dari berbagai tanaman sehingga menghambat laju api Jika terjadi
                kebakaran. “Saya tak mau api menghanguskan lagi hampir semua tanaman
                kami seperti tahun lalu.”
            </p>
            <p class="leading-relaxed tracking-wide mt-8">Sekat bakar inilah yang bermanfaat ketika sumber daya mereka terbatas saat
                api menyerbu. Itu misalnya terjadi pada 3-4 0ktober Lalu, ketika kebakaran
                kembali melanda kawasan Rawa Kadut, sejak pukultiga sore. Fajar, Arum,
                dan tim berusaha memadamkannya. Namun, lantaran api begitu besar, plus
                menimbang kemampuan personel dan alat, diputuskan menahan api dijalur
                sekat bakar agar api tak memasuki area reforestasi. Hari itu, tim bekerja
                hingga pukul dua dini hari.Sekitar pukul 10.00, api kembali terlihat di sisi barat
                pondok, tapi dapat segera dipadamkan.
            </p>
        </div>
        <div class="sm:w-3/12 w-full relative sm:px-4">
            <h1 class="text-2xl font-bold text-green-800 font-satunya">Fajar Sandhika Negara Simanjuntak</h1>
            <p class="mt-2 mb-12"><a class="font-semibold">Tempat dan tanggal lahir:</a> Pandeglang, 22 Februari 1986</p>

            <a class="font-semibold">Pendidikan:</a>
            <p class="mb-12">Fakultas Informatika dan Komputer Universitas Mathla’ul Anwar Banten (masih ditempuh)</p>

            <a class="font-semibold">Organisasi:</a>
            <p class="mb-12">Pelajar Rimba Pecinta Alam (Primapala) SMA Negeri 4 Pandeglang, 2005 <br> Himpunan Mahasiswa Lestari Alam (Himala) Universitas Mathla’ul Anwar Banten</p>

            <a class="font-semibold">Karier:</a>
            <p class="">Yayasan Auriga Nusantara (sebelumnya Yayasan Silvagama), 2011-sekarang</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 mt-12">
        <h2 class="text-left text-2xl font-bold tracking-wider mb-10 ">Pelaksanaan program bagus, dan dia juga selalu ada di tempat saat terjadi kebakaran. Koordinasi dengan masyarakat dan petugas atau polisi hutan di lapangan juga oke, bahkan Kepala SPTN II pun bisa dia ‘pegang’</h2>
        <a class="font-black text-xl ">Rama Budiana</a>
        <p class="font-semibold ">Koordinator Program TFCA-Sumatera Konsorsium AleRT.</p>
    </div>

    <div class="max-w-2xl mx-auto px-4">
        <p class="leading-relaxed tracking-wide mt-8">“Kerja dengan Fajar enak-enak saja, koordinasi bagus,” kata Arum, pekerja
            yang selama ini menjadi penghubung Fajar dengan warga Bungur. Ihwal ini
            diakui pula oleh Suharno, Polisi Hutan Pelaksana Lanjutan selaku Koordinator
            Pemadam Kebakaran Taman Naslonal Way Kambas; Rama Budhiana,
            Koordinator Program TFCA-Sumatera Konsorslum AleRT; dan Mukhlisin,
            Kepala Seksi Wilayah II Way Bungur.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">“Tiap pekan ada empat-lima orang kami bersama mereka (Fajar cs) menjaga
            keamanan dan menangani masalah jika ada kebakaran,” ujar Mukhlisin,
            “Keberadaan Fajar dan tim sangat membantu.” Total lahan yang terbakar di
            Way Bungur pada Agustus lalu sekitar 1.500 hektare, sedangkan pada Oktober
            mencapai 2.000 hektare. Selain sukses memadamkan api, gerak cepat Fajar dan
            kawan-kawan berhasil menyelamatkan sekitar 20 ribu tanaman puspa, sungkai,
            dan jambon yang ditanam Silvagama di jalur tanam seluas 22,8 hektare.
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
