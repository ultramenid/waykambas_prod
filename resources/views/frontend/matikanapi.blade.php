@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')
    @include('partials.topbar')
    <div class=" bg-black sticky top-0 z-50">
        <div class="max-w-7xl px-4 py-6  mx-auto relative  justify-between items-center sm:flex hidden">
            <div class="flex space-x-4 items-center mb-2">
                <h1 class="text-4xl font-bold text-white mr-6"> <a href="{{ route('index', app()->getlocale() )}}">Rawa Kadut</a> </h1>
                <!-- about -->
                <div class="flex-col flex @if ($nav === 'about') border-b border-white @endif"" x-data="{pages:false}">
                    <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >About
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                        <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Who We Are</a>
                        <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                        <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Restorasi Kadut</a>
                    </div>
                </div>

                {{-- <!-- restorasi -->
                <div class="flex-col flex" x-data="{pages:false}">
                    <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >A-Z Restoration
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                        <a href="{{ route('siteplan', app()->getlocale() )}}" class="text-sm mr-6">Site Plan</a>
                        <a href="{{ route('silvikultur', app()->getlocale() )}}" class="text-sm mr-6">SilviKultur</a>
                        <a href="#" class="text-sm mr-6">Species</a>
                    </div>
                </div> --}}
                <div class="@if ($nav === 'az') border-b border-white @endif">
                    <a href="{{ route('azrestoration', app()->getlocale() )}}" class="text-white">A-Z Restoration</a>
                </div>
                {{-- <a href="#" class="text-white">Kebakaran</a> --}}

                <div class="@if ($nav === 'story') border-b border-white @endif">
                <a href="{{ route('story', app()->getlocale() )}}" class="text-white">Story</a>
                </div>
                <div class="@if ($nav === 'diary') border-b border-white @endif">
                <a href="{{ route('diary', app()->getlocale() )}}" class="text-white">Diary</a>
                </div>
            </div>
            <div class="flex space-x-4 items-center">
                <button class="bg-green-600 px-8  text-sm font-bold py-1 text-white hover:bg-white border border-green-600 hover:text-green-600">Donate</button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-4 border-b">
        <div class="flex sm:flex-row flex-col-reverse items-center w-full gap-10">
            <div class="sm:w-8/12 w-full">
                <img src="{{ asset('assets/herofajar.png') }}" alt="Matikan api menjaga puspa">
            </div>
            <div class="sm:w-4/12 w-full">
                <a class="font-bold text-sm">Edisi Khusus Tokoh Tempo 2015</a>
                <h2 class="sm:text-2xl text-xl text-red-800 mb-12">FAJAR SANDHIKA NEGARA SIMANJUNTAK</h2>
                <div class="h-full relative">
                    <a class="sm:text-8xl text-6xl">Matikan Api Menjaga Puspa</a><a href="#reference" class="text-red-800 hover:underline text-2xl top absolute mt-5">*</a>
                </div>
                <p class="mt-12">Fajar Sandhikan dan timnya melawan api yang melahap ladang ilalang di Rawa Kadut, Taman Nasional Way Kambas, Lampung. Hasil kerja mereka berhasil menyelamatkan program reforestasi 100 hectare dengan sekitar 20 ribu pohon.</p>
            </div>
        </div>
    </div>
    <div class="max-w-3xl mx-auto px-4 py-4 ">
        <p class=""><a class="font-bold sm:text-8xl text-2xl">A</a> sap mengepul di arah reforestasl Rawa  Kadut, Taman Naslonal Way Kambas, Lampung, 9 Agustus 2015. Saat ltu, jarum Jam menunjuk angka sembilan. Fajar Sandhika, Koordinator Komponen Reforestasl Yayasan Silvagama, dan Arum Mutasim, yang sedang berada dl pondok, bergegas mengecek ke lokasi titik api. Dengan sepeda motor, mereka menyusuri jalan setapak yang membuJur di sela sela rimbunnya ilalang.</p>
        <p class="mt-4">Sesampai mereka di lokasi, analisls sementara dilakukan: api bergerak ke arah barat, diperkirakan akan melewati daerah di seberang Sungai Kadut yang berada di belakang pondok. Lantaran angin belum terlalu besar, rambatan api ditaksir mencapai kawasan belakang pondok selepas pukul 12.00. Anallsis kelar, Fajar dan Arum segera menggeber kembali sepeda motor menuju pondok. </p>
        <p class="mt-4">“Sesampai di pondok, kami bagi tugas,"kata Fajar menceritakan kembali peristiwa itu kepada <i>Tempo</i> di pondok Rawa Kadut, awal Desember lalu. Tiga orang diminta menghadang api di daerah belakang pondok dengan memanfaatkan jalur atau jalan logistik sebagai sekat bakar. Adapun fajar dan arum akan ke kampung terdekat, Bungur, untuk mencari tambahan tenaga, plus berkoordinasi dengan petugas di Seksii Pengelolaan Taman Nasional (SPTN) II Bungur. </p>
        <p class="mt-4">Setelah mengatur strategi, Fajar dan Arum kembali memacu sepeda motor melewati jalan setapak dan berkelok-kelok di antara padang ilalang sepanjang sekitar 12 kilometer. Ini masih ditambah dengan menerobos rimbunnya hutan sekitar satu kilometer. Sebelum sampai ke Desa Bungur, keduanya harus menyeberangi Sungai Sukadana dengan sampan-tepatnya papan kayu yang dijejerkan-dan menelusuri tanggul. Sesampal di kampung, keduanya berhasil mendapat tambahan tenaga tiga orang.</p>
        <p class="mt-4">Dalam perjalanan mereka ke pondok, didapati api hanya berjarak kurang dari empat kilometer dari pondok Restorasi Mataram-pondok milik Aliansi Lestari RImba Terpadu (AleRT). Itu berarti api telah bergerak kira-kira tujuh kilometer dari titik pertama yang disurvei Fajar dan Arum, dalam waktu kurang dari tiga jam.</p>
    </div>

    <div class="max-w-3xl mx-auto px-4 py-4 ">
        <p class="italic text-xl tracking-wider	 ">"Fajar dan tim sangat membantu. Kalau terjadi kebakaran, informasi pertama yang kami terima malah dari teman-teman itu. Keberhasilan melindungi area yang mereka tanami sangat membantu reforestasi di Way Kambas."</p>
    </div>
    <div class="max-w-3xl mx-auto px-4 mb-4">
        <div class="flex justify-end w-full">
            <p class="sm:w-6/12 w-11/12 text-right text-xs"><a class="text-red-700">Suharno</a>, Polisi Hutan Pelaksana Lanjutan, Koordinator Pemadam Kebakaran Taman Nasional Way Kambas.</p>
        </div>
    </div>
    <div class="max-w-3xl mx-auto px-4 py-4">
        <p>Tim segera berjibaku dengan senjata tangki semprotan air dan gebyok dari ranting pohon. Akhirnya, si jago merah bisa ditundukkan pada pukul 17.15. Mereka juga berhasil memadamkan api yang membakar lahan reforestasi seluas 2,5 hektare. Ketika mereka sedang leyeh-leyeh di pondok, sekitar pukul 20.45, eh, terlihat lagi ada api di arah timur pondok. Tim kembali bergerak dan tiga perempat jam kemudian api padam. Semua lega.</p>
        <p class="mt-4">Selama Agustus-Oktober, pekerjaan tambahan itulah yang terus dilakukan Fajar dan kawan-kawannya dari Yayasan Silvagama. Mereka menjaga kawasan, memadamkan agni jika terjadi kebakaran, dan menahan agar api tak tambah meluas. Tugas utama Fajar yang sebenarnya adalah melakukan penghutanan kembali (reforestasi).</p>
        <p class="mt-4">Yayasan  Sllvagama  adalah  organisasi non-pemerlntah yang bergerak di bidang pelestarian sumber daya alam. Berdiri  pada 12 November 2009,  organisasi Ini  bertujuan mengupayakan terwujudnya kelestarlan sumber daya alam. Di Taman Nasional Way Kambas, Silvagama tergabung dalam Konsorsiun ALeRT dengan melakukan reforestasi. Konsorsium mendapat dana dari Tropical Forest Conservatlon Action for Sumatera (TFCA-Sumatera).</p>
        <p class="mt-4">Silvagama mengelola area reforestasl sekitar 100 hektare Rawa Kadut dengan masa penanaman tiga tahun. Wilayah ini masuk SPTN II Bungur, Way Kambas. Penanaman pertama dilakukan pada Februari 2014 sebanyak 9.200 barang, dan ditargetkan hingga tahun ketiga sudah dilaksanakan 31.200 pohon. Jenis tanamannya adalah mentru atau puspa, sungkai <i>peronema sp</i>.), dan jambon (<i>Eugenia sp.</i>), yang dikenal tahan  api. Jika terlalap sijago merah, batangnya di atas tanah memang bakal menghitam, tapi akarnya bertahan dan segera menumbuhkan cabang-cabang baru nan hijau. Itulah yang <i>Tempo</i> lihat di Rawa Kadut.</p>
        <img src="{{ asset('assets/fajar1.png') }}" alt="Fajar Sandhika" class="mt-4">

        <div class="flex justify-end w-full">
            <p class="sm:w-6/12 w-11/12 text-right text-xs">Anggota tim Fajar saat memadamkan api di Rawa Kadut, Taman Nasional Way Kambas, Lampung, 9 Agustus 2015</p>
        </div>

        <p class="mt-4">"Tanaman kami edisi pertama sempat dilalap api tahun lalu," ujar Timer Manurung, pendiri  Silvagama-kini  bernama Auriga Nusantara. Kebakaran memang biasa terjadi di kawasan ini. Salah satu penyebabnya adalah pembakaran oleh orang tak bertanggung jawab agar ilalang hijau tumbuh pasca·kebakaran dan memancing satwa keluar sehingga gampang diburu. Timer pun mengirim Fajar untuk melakukan penanaman kembali, plus tugas baru: menghalau api jika ada kebakaran. Fajar bertugas sejak November 2014.</p>
        <p class="mt-4">Saat tiba di lokasi, Fajar tak menunggu datangnya kebakaran.  Dia bersama timnya segera  membuat  sekat bakar sepanjang satu kilometer dengan lebar 30 meter di Rawa Kadut, Desember 2014. Sekat bakar adalah lahan yang dibersihkan dari berbagai tanaman sehingga menghambat laju api Jika terjadi  kebakaran. "Saya tak mau api menghanguskan lagi hampir semua tanaman kami seperti tahun lalu."</p>
        <p class="mt-4">Sekat bakar inilah yang bermanfaat ketika sumber daya mereka terbatas saat api menyerbu. Itu misalnya terjadi pada 3-4 0ktober Lalu, ketika kebakaran kembali melanda kawasan Rawa Kadut, sejak pukultiga sore. Fajar, Arum, dan tim berusaha memadamkannya. Namun, lantaran api begitu besar, plus menimbang kemampuan personel dan alat, diputuskan menahan api dijalur sekat bakar agar api tak memasuki area reforestasi. Hari itu, tim bekerja hingga pukul dua dini hari.Sekitar pukul 10.00, api kembali terlihat di sisi barat pondok, tapi dapat segera dipadamkan.</p>
        <p class="mt-4">"Kerja dengan Fajar enak-enak saja, koordinasi bagus," kata Arum, pekerja yang selama ini menjadi penghubung Fajar dengan warga Bungur. Ihwal ini diakui pula oleh Suharno, Polisi Hutan Pelaksana Lanjutan selaku Koordinator Pemadam Kebakaran Taman Naslonal Way Kambas; Rama Budhiana, Koordinator Program TFCA-Sumatera Konsorslum AleRT; dan Mukhlisin, Kepala Seksi Wilayah II Way Bungur.</p>
    </div>

    <div class="max-w-3xl mx-auto px-4 py-4  ">
        <p class="text-xl tracking-wider	 italic ">"Pelaksanaan program bagus, dan dia juga selalu ada di tempat saat terjadi kebakaran. Koordinasi dengan masyarakat dan petugas atau polisi hutan di lapangan juga oke, bahkan Kepala SPTN II pun bisa dia 'pegang'"</p>
    </div>
    <div class="max-w-3xl mx-auto px-4 mb-4">
        <div class="flex justify-end w-full">
            <p class="sm:w-6/12 w-11/12 text-right text-xs"><a class="text-red-700">Rama Budiana</a>, Koordinator Program TFCA-Sumatera Konsorsium AleRT.</p>
        </div>
    </div>
    <div class="max-w-3xl mx-auto px-4 mb-4">
        <p>"Tiap  pekan  ada empat-lima orang kami bersama mereka (Fajar cs) menjaga keamanan dan menangani masalah jika ada kebakaran," ujar Mukhlisin, "Keberadaan Fajar dan tim sangat membantu." Total lahan yang terbakar di Way Bungur pada Agustus lalu sekitar 1.500 hektare, sedangkan pada Oktober mencapai 2.000 hektare. Selain sukses memadamkan api, gerak cepat Fajar dan kawan-kawan berhasil menyelamatkan sekitar 20 ribu tanaman puspa, sungkai, dan jambon yang ditanam Silvagama di jalur tanam seluas 22,8 hektare. ***</p>
    </div>

    <div class="max-w-3xl mx-auto px-4 py-4 border-t-4 border-b-4 border-black mt-12 ">
        <a class="mt-4 text-3xl">Fajar Sandhika Negara Simanjuntak</a>
        <p class="font-thin mb-6">Tempat dan tanggal lahir: Pandeglang, 22 Februari 1986</p>

        <a class=" text-2xl">Pendidikan:</a>
        <ul class="list-disc mb-6">
            <li class="ml-4">Fakultas Informatika dan Komputer Universitas Mathla'ul Anwar Banten (masih ditempuh)</li>
        </ul>

        <a class=" text-2xl">Organisasi:</a>
        <ul class="list-disc mb-6">
            <li class="ml-4">Pelajar Rimba Pecinta Alam (Primapala) SMA Negeri 4 Pandeglang, 2005</li>
            <li class="ml-4">Himpunan Mahasiswa Lestari Alam (Himala) Universitas Mathla'ul Anwar Banten </li>
        </ul>

        <a class=" text-2xl">Karier:</a>
        <ul class="list-disc mb-6">
            <li class="ml-4">Yayasan Auriga Nusantara (sebelumnya Yayasan Silvagama), 2011-sekarang</li>
        </ul>

    </div>

    <div class="max-w-3xl mx-auto px-4 py-4 mb-12 flex items-center gap-2">
        <span class="text-red-800 text-2xl">*</span>
        <p id="reference" class="text-sm"> Diterbitkan <a href="https://auriga.or.id/resource/reference/matikan-api-menjaga-puspa.pdf" class="underline font-bold">Majalah Tempo edisi 3 Januari 2016</a>. Ditulis ulang sebagaimana aslinya.</p>
    </div>

    @include('partials.footer')
@endsection

