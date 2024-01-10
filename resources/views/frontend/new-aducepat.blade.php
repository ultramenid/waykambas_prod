@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')
    @include('partials.topbar')
    @include('partials.new-navbar')

    <div class="max-w-5xl mx-auto mt-12 px-4">
        <h1 class="font-satunya text-green-600 font-bold text-2xl uppercase">Feature Story</h1>
        <h1 class="mt-6 font-semibold text-5xl">{{$text}}</h1>
        <p class="text-xl mt-4" >
            Luasnya hamparan ilalang menjadi tengara masa lalu masih menggelayuti Way Kambas. Untuk menumpas rumput tangguh itu, hutan ditumbuhkan kembali. Namun, upaya pemulihan hutan sungguh tidak mudah.
        </p>

        <div class="sm:mt-16 mt-8 py-6 border-t border-t-gray-800 border-b border-b-gray-400">
            <h2 class="font-bold">Disalin sepenuhnya dari:</h2>
            <p class="mt-2">Ekuilibrium Konservasi: Menjaga Keseimbangan di Taman Nasional Way Kambas (TFCA Sumatera, 2017)</p>
        </div>
    </div>

    <div class="max-w-2xl mx-auto sm:mt-20 mt-10 px-4">
        <p class="leading-relaxed tracking-wide">Rinai hujan sepertinya enggan berhenti. Sudah sejak pagi, gerimis mengguyur
            Way Kambas. Tak menghiraukan cuaca yang basah, Tim reforestasi itu
            beranjak ke jantung taman nasional. Serejang menunggu hujan reda, Fajar
            Sandika Negara dan timnya berteduh di kedai sederhana. Kopi hangat
            menemani koodinator reforestasi Konsorsium AL eRT-Universitas Lampung itu</p>
        <p class="leading-relaxed tracking-wide mt-8">
            Hari itu, dia hendak ke lokasi reforestasi, atau penghutanan kembali, Rawa
            Kadut di Resor Toto Projo, Seksi Pengelolaan Taman Nasional (SPTN) II Bungur,
            Taman Nasional Way Kambas. Rawa Kadut berada di tengah padang ilalang di
            jantung taman nasional. Di sisi timur Rawa Kadut membentang hutan dataran
            rendah, dan di sisi barat terdapat sederet hutan yang ringkih. Kendati didomi
            - nasi ilalang, hutan tumbuh hijau di sepanjang sungai kecil. Deretan hutan ini
            membentuk jaringan seperti lengan gurita: menjalar ke segala arah mengikuti
            anak sungai.
        </p>
    </div>

    <div class="max-w-4xl mx-auto px-4 mt-12">
        <p class="font-semibold text-2xl text-center">“Upaya reforestasi di Rawa Kadut akan menautkan hutan di timur dengan hutan
            di sisi barat taman nasional.”</p>
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
        <div class="absolute inset-y-0 sm:left-44 left-0 z-30 flex items-center">
            <button @click="swiper.slidePrev()"
                class="bg-nav-slide text-white sm:-ml-2 lg:-ml-4 flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12 rounded-full shadow focus:outline-none">
                {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-8 h-8"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>

            </button>
        </div>
        <div class="sm:block hidden sm:h-[35rem] h-56 w-[25%] mt-4 bg-black absolute bg-opacity-70  z-20 -ml-4 rounded">
            <div class="inset-y-0 left-0">
            </div>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide p-4 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/11.png') }}" alt="">
                        <p class="sm:absolute  bottom-10 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Masa depan kawasan ini tergantung pada
                            ribuan bibit tanaman reforestasi. Namun,
                            jumlah dalam bilangan 'ribuan' bagaikan
                            setetes air di samudra ilalang. Tahuntahun awal adalah masa yang menentukan
                            bagi bibit tanaman untuk tumbuh besar,
                            sehingga mampu bersaing dengan alangalang.</p>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide p-4 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/6.png') }}" alt="">
                        <p class="sm:absolute  bottom-10 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Masa depan kawasan ini tergantung pada
                            Pondok kerja di lapangan untuk menjaga, merawat, dan memastikan bibit tanaman dapat tumbuh secara normal. Aktivitas di pondok kerja juga untuk mencegah pemburu liar masuk taman nasional. Sayangnya, upaya pencegahan itu tak selalu berhasil. Pemburu tetap saja membakar lahan untuk memburu satwa liar. AGUS PRIJONO .</p>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide p-4 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/12.png') }}" alt="">
                        <p class="sm:absolute  bottom-10 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Bila tak terbakar, semestinya tanaman sudah setinggi dua meteran, seperti terlihat pada pohon yang menaungi sepeda motor. Deretan pohon di depan pondok kerja ini selamat dari kobaran api 2014. AGUS PRIJONO</p>
                    </div>
            </div>
            <div class="swiper-pagination -mb-2"></div>
        </div>

        <div class="sm:block hidden sm:h-[35rem] h-56 w-[24%]  rounded mt-4 bg-black absolute bg-opacity-70  inset-y-0 right-0 z-20">
        </div>

        <div class="absolute inset-y-0 sm:right-40 right-0 z-30 flex items-center">
            <button @click="swiper.slideNext()"
                class="bg-nav-slide text-white flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12 rounded-full shadow focus:outline-none">
                {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-8 h-8"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>

            </button>
        </div>

    </div>

    <div class="max-w-2xl mx-auto  px-4 mt-8">
        <p class="leading-relaxed tracking-wide">Kopi telah tandas di dasar gelas. Kendati cuaca tak pasti, dia tetap berangkat
            berombongan dengan sepeda motor. Roda-roda sepeda motor mengaduk
            setapak yang berlumpur. Setelah menyeberangi sungai dengan menumpang
            rakit yang rapuh, rombongan menem - bus hutan sekunder. Aroma hutan
            mengapung di udara. Pepohonan tumbuh rapat. Air menggenang, jalan setapak
            berlumpur.</p>
        <p class="leading-relaxed tracking-wide mt-8">
            Keluar dari hutan, rombongan mulai menembus hamparan alangalang. Di
            segala penjuru, rumput berbulu itu merajai bentang alam. Di batas cakrawala,
            hutan berbaris jarang-jarang. Hutan galeri tumbuh di sepanjang aliran sungai
            kecil. Sisa-sisa kejayaan hutan di masa lalu terlihat dari satu dua pohon yang
            masih bertahan hidup. Dalam pandangan 360 derajat, ilalang menguasai
            bentang alam.
        </p>
    </div>

    {{-- <div class="mx-auto max-w-6xl mt-8"> --}}
        <div class="max-w-7xl flex sm:flex-row flex-col-reverse gap-10 ml-auto sm:mt-16 mt-8 sm:px-12 px-4">
            <div class="sm:w-6/12 w-full">
                <p class="leading-relaxed tracking-wide">
                    Dari batas hutan tadi, jarak ke Rawa Kadut sekitar 10 kilometer. “Itu jarak lurus
                    di atas peta,” ujar Fajar. Tapi di lapangan, ia menempuh jarak lebih jauh karena
                    jalan yang berbelok-belok. Di hamparan alang-alang itu, angin berhembus
                    leluasa tanpa penghalang. Langit membentang lapang. Hujan yang baru turun
                    seolah tak berbekas. Air begitu cepat menguap.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    Munculnya lautan ilalang ini lantaran perbuatan manusia. Fajar mengatakan,
                    pada era 1970-an, perusahaan hutan pernah mengelola wilayah ini. Dahulu,
                    wilayah taman nasional memang areal konsesi pengusahaan hutan selama
                    kurun 1970-an hingga 1980-an.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    Setelah itu, pembalak liar menebangi pohon hingga awal 2000. Ganasnya
                    pembalakan liar tak menyisakan pepohonan. Bahkan tonggak akar pun tak ada
                    bekasnya. Akibatnya, hutan semakin terbuka, lalu tumbuhlah ilalang.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    Sialnya, itu bukan pukulan terakhir. Setelah itu, orang-orang tak bertanggung
                    jawab menggunakan padang ilalang sebagai ladang perburuan. Mereka
                    menyasar satwa dengan cara membakar lahan. Ilalang makin merajalela, pohon
                    hutan semakin sulit tumbuh. Tanpa disadari, pembakaran berulang-ulang telah
                    menciptakan bentang alam buatan manusia: ekosistem padang ilalang.
                </p>
                <p class="leading-relaxed tracking-wide mt-8">
                    Sebenarnya, tanpa campur tangan manusia, hutan Way Kambas yang pernah
                    ditebang bisa memulihkan diri. Melalui kondisi tanah dan anakan vegetasi,
                    tangan alam dapat melakukan suksesi alami. Secara alami, hutan sebenarnya
                    punya daya lenting: ia bisa memulihkan kembali.
                </p>
            </div>
            <div class="sm:w-6/12 w-full relative">
                <img src="{{asset('assets/3.png')}}" alt="" class="h-[45rem] w-full object-cover relative">
                <p class="sm:absolute  bottom-8 right-3 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Masa depan kawasan ini tergantung pada
                    Menjulang di tengah padang, pohon ini menunjukkan hutan pernah menyelimuti kawasan Rawa Kadut. Kini, perlu usaha keras untuk memulihkan kembali hutan yang telah sirna. AGUS PRIJONO</p>
            </div>
        </div>
    {{-- </div> --}}

    <div class="max-w-2xl mx-auto px-4 sm:mt-16 mt-8">
        <p class="leading-relaxed tracking-wide ">
            Dari 125.621 hektare luas taman nasional, hanya 78.500 hektare atau 60
            persen yang diselimuti hutan dataran rendah. Sisanya 40 persen terdiri dari
            hutan mangrove, hutan rawa, ilalang dan belukar. Data Balai Taman Nasional
            menyebutkan, hamparan ilalang mencakup luasan 27.000 hektare.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            Di tengah lautan ilalang itu, Konsorsium ALeRT-UNILA berupaya
            menumbuhkan kembali hutan yang telah sirna. Sebagai salah satu anggota
            Konsorsium, Yayasan Auriga memegang kendali atas program reforestasi. Dan
            hari itu, Fajar akan menilik lokasi reforestasi Rawa Kadut. Lokasinya kira-kira
            berada di padang ilalang di pusat taman nasional. Ini wilayah antah-berantah.
            Meski bisa dijangkau dengan sepeda motor, namun untuk urusan logistik
            penanaman, Rawa Kadut terbilang terpencil: jauh dari pemukiman dan pos
            pengelolaan taman nasional.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            Ada beberapa alasan memilih lokasi yang terpencil. “Pertimbangan pertama,
            kita melihat Rawa Kadut strategis. Rawa Kadut betul-betul berada di tengah
            taman nasional. Artinya, di masa depan kalau kita mau melanjutkan reforestasi,
            arahnya bisa ke mana saja.” Dalam pandangan Fajar, keberhasilan penghutanan
            kembali di Rawa Kadut bisa dilanjutkan ke segala arah. Dengan demikian, hutan
            yang kembali tumbuh akan menjadi koridor yang menautkan habitat satwa
            yang terpecah-belah.
        </p>
    </div>

    <div class="max-w-7xl flex sm:flex-row flex-col-reverse gap-10 sm:mt-16 mt-8 sm:px-12 px-4">
        <div class="sm:w-6/12 w-full relative">
            <img src="{{asset('assets/5.png')}}" alt="" class="h-full w-full object-cover relative">
            <p class="sm:absolute  bottom-8 right-3 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Kebakaran hutan menghanguskan apa saja yang ada di padang ilalang. Rumput yang mengering amat rawan kebakaran. Sekali tersulut, api akan berkobar, lalu melalap semua bentuk kehidupan. AGUS PRIJONO</p>
        </div>
        <div class="sm:w-6/12 w-full">
            <div class="w-full flex justify-end">
                <h2 class="text-2xl font-bold w-8/12 mb-12">“Sayangnya, baru berumur 8 - 9 bulan, tanaman lebur dilalap api.”</h2>

            </div>
            <p class="leading-relaxed tracking-wide mt-8">
                Alur pikirnya begini. Di sisi timur Rawa Kadut, membentang hutan dataran
                rendah yang luas dan relatif utuh; sementara di barat, berserakan bercakbercak hutan. Hamparan alang-alang Rawa Kadut membentang di tengahtengah, yang memisahkan kerumunan hutan di timur dan di barat itu.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">
                Harapannya, di masa datang, upaya penghutanan kembali, yang dimulai dari
                Rawa Kadut, bisa menyambungkan hutan di timur dan barat. Tutupan hutan
                di sisi barat relatif masih bagus; sementara di sisi timur, hutan telah jarangjarang, yang sekaligus menjadi batas kawasan taman nasional.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">
                Tersambungnya dua sisi hutan itu akan membentuk koridor vegetasi, yang
                memudahkan satwa menjelajahi taman nasional. Yang kedua, lanjut Fajar,
                Rawa Kadut sekaligus berada di pusat masalah taman nasional, terutama
                perburuan satwa liar. “Program reforestasi akan memperbanyak aktivitas di
                tengah taman nasional yang bisa mencegah perburuan liar. Jadi ketika ada
                aktivitas di Rawa Kadut, pemburu akan berpikir dua kali dan menghindar.”
                Ringkasnya, kehadiran personel memberikan efek gentar kepada pemburu liar.
                Itu pertimbangan dari sisi nonteknis.
            </p>
            <p class="leading-relaxed tracking-wide mt-8">
                Sedangkan secara teknis tanam-menanam, upaya reforestasi memerlukan
                beberapa syarat: lokasi pembibitan tak jauh dari areal penanaman, persemaian
            </p>
        </div>

    </div>

    <div class="max-w-2xl mx-auto px-4 sm:mt-16 mt-8 ">
        <p class="leading-relaxed tracking-wide mt-8">cukup terbuka untuk sinar matahari; dan mudah dijangkau. Di atas segala
            syarat tersebut, yang terpenting adalah sumber air di sekitar persemaian.
            Air menjadi faktor pembatas keberhasilan tanam-menanam. Di sekitar Rawa
            Kadut, air berasal dari aliran sungai, sumur, dan hujan.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">BILAH-BILAH daun ilalang bergelombang di terpa angin tropis. Daun alangalang yang masih basah memantulkan cahaya matahari. Saat menembus
            alang-alang, daun rumput yang tajam dan berbulu halus menampari lutut.
            Lama-kelamaan terasa perih. Bentangan rumput ini bukan seperti lapangan
            bola yang berumput lembut. Bayangkan: alang-alang tumbuh setinggi leher,
            tepi daunnya tajam, bulu-bulu daun menyengat kulit. Setelah melewati hutan
            galeri— deretan vegetasi yang tumbuh di sepanjang sungai kecil, Fajar tiba di
            pondok kerja reforestasi. Mendung masih menggantung di langit.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">Di pondok kerja berloteng itu, hari itu Ahmad Tohari dan Sutrisno sedang
            giliran bertugas. “Piket rutin biasanya antara dua sampai empat orang selama
            delapan hari. Setelah itu pulang, ganti orang,” jelas Fajar.
        </p>
    </div>

    <div class="max-w-6xl mx-auto px-4 mt-8 mb-16 relative">
        <img src="{{ asset('assets/8.png') }}" alt="" class="w-full h-full relative">
        <p class="sm:absolute  bottom-8 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Sekali ilalang terbakar, api akan mengamuk ke segala arah. Kebakaran telah melumat bibit penghutanan kembali pada 2014. Embusan angin mempersulit usaha memutus menjalarnya api. AGUS PRIJONO</p>
    </div>

    <div class="max-w-2xl mx-auto px-4 mt-8">
        <p class="leading-relaxed tracking-wide mt-8">KEBAKARAN hutan merupakan tantangan terbesar dalam memu - lihkan hutan
            Rawa Kadut. Sedikitnya, 75 persen tutupan lahan di STPN II Bungur didominasi
            ilalang dan semak belukar. Jadi tak mengejutkan bila api kerap membakar
            wilayah ini. Setiap tahun, kebakaran hutan di Bungur adalah yang terluas di
            Way Kambas. Tantangan inilah yang menguras energi. Fajar menuturkan,
            pada 2015 dilakukan penanaman ulang terhadap tanaman 2014 yang habis
            dilumat api. “Akhirnya, kita menanam lagi. Itu jadinya bukan penyulaman,” Fajar
            menegaskan.
        </p>
        <p class="leading-relaxed tracking-wide mt-8">“Asal tidak terbakar, sebenarnya tanaman masih bisa tumbuh. Dari teknis
            penanaman tidak ada masalah. Saat kemarau, tanaman pasti tumbuh walaupun
            mungkin kekurangan air,” timpal Marcelius. “Meski dilanda kemarau, kita selalu
            memasok air di lokasi penanaman. Memang saat musim kering, air hilang sama
            sekali. Bahkan sumur di pondok kerja juga mengering. Ke depan, kita harus
            membuat sumur dalam sekitar 15 meter di lokasi reforestasi. Sumur yang ada
            sekarang paling hanya sedalam 6 - 8 meter.”
        </p>
        <p class="leading-relaxed tracking-wide mt-8">
            Sejak tahap perencanaan, tim telah memilih tanaman pionir dan relatif tahan
            api. “Puspa, sempu, dan sungkai merupakan jenis pionir yang tahan api. Asal
            tanaman sudah tumbuh 50 sentimeter sampai 1 meter, kalau pun terbakar,
            akarnya masih cukup kuat,” ungkap Marcelius. Kebakaran hebat pada 2014
            memberikan pelajaran penting dalam upaya memulihkan hutan di Rawa Kadut
            dan sekitarnya.
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
        class="relative flex flex-row mt-10"
        >
        <div class="absolute inset-y-0 sm:left-44 left-0 z-30 flex items-center">
            <button @click="swiper.slidePrev()"
                class="bg-nav-slide text-white sm:-ml-2 lg:-ml-4 flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12 rounded-full shadow focus:outline-none">
                {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-8 h-8"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>

            </button>
        </div>
        <div class="sm:block hidden sm:h-[35rem] h-56 w-[25%] mt-4 bg-black absolute bg-opacity-70  z-20 -ml-4 rounded">
            <div class="inset-y-0 left-0">
            </div>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide p-4 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/9_1.png') }}" alt="">
                        <p class="sm:absolute  bottom-10 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Masa depan kawasan ini tergantung pada
                            Bibit tanaman dipungut dari wilayah taman nasional untuk menjamin keaslian spesiesnya. Areal pembibitan berada di lapangan untuk membantu adaptasi bibit, serta memudahkan pengangkutan bibit ke areal penanaman. AGUS PRIJONO</p>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide p-4 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/9_2.png') }}" alt="">
                        <p class="sm:absolute  bottom-10 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Bibit tanaman dipungut dari wilayah taman nasional untuk menjamin keaslian spesiesnya. Areal pembibitan berada di lapangan untuk membantu adaptasi bibit, serta memudahkan pengangkutan bibit ke areal penanaman. AGUS PRIJONO</p>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide p-4 flex flex-col  bg-newgray-300 relative" >
                        <img class="sm:h-[35rem] h-56 w-full object-cover object-center rounded relative" src="{{ asset('assets/9_3.png') }}" alt="">
                        <p class="sm:absolute  bottom-10 right-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-8/12 sm:not-italic italic">Bibit tanaman dipungut dari wilayah taman nasional untuk menjamin keaslian spesiesnya. Areal pembibitan berada di lapangan untuk membantu adaptasi bibit, serta memudahkan pengangkutan bibit ke areal penanaman. AGUS PRIJONO</p>
                    </div>
            </div>
            <div class="swiper-pagination -mb-3"></div>
        </div>


        <div class="sm:block hidden sm:h-[35rem] h-56 w-[24%]  rounded mt-4 bg-black absolute bg-opacity-70  inset-y-0 right-0 z-20">
        </div>

        <div class="absolute inset-y-0 sm:right-40 right-0 z-30 flex items-center">
            <button @click="swiper.slideNext()"
                class="bg-nav-slide text-white flex justify-center items-center sm:w-14 sm:h-14 w-12 h-12 rounded-full shadow focus:outline-none">
                {{-- <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-8 h-8"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>

            </button>
        </div>

    </div>

    <div class="max-w-2xl mx-auto px-4 mt-8">
        <p class="leading-relaxed tracking-wide mt-8">“Evaluasi kita ada beberapa hal. Pertama deteksi dini harus lebih cepat. Waktu
            itu api terdeteksi sudah sangat dekat dengan sekat bakar. Kedua, setelah api
            dipadamkan, harus dipantau kembali untuk memastikan bara benar-benar
            padam,” Fajar memaparkan. Pence - gahan kebakaran diperkuat dengan patroli
            rutin bersama polisi hutan. “Kita semakin rutin berpatroli, setiap bulan bisa
            dua sampai tiga kali patroli.”
        </p>
        <p class="leading-relaxed tracking-wide mt-8">Ada tiga jalur patroli untuk operasi perlindungan dan penga - manan. “Tetapi
            waktu itu api begitu besar dan angin berhembus kencang. Situasi tidak
            terkendali lagi. Apalagi kebakaran terjadi pada malam hari, sehingga makin
            sulit memobilisasi orang,” tandas Fajar.
        </p>
    </div>

    @include('partials.new-footer')

@endsection
