<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Local dummy content (EN text taken from "Translation rawa kadut.pdf").
 * Wipes and refills the content tables, so it never runs in production.
 *
 *   php artisan db:seed --class=DummyContentSeeder
 *
 * CMS login (local only): username "admin", password "password".
 */
class DummyContentSeeder extends Seeder
{
    public function run()
    {
        if (app()->environment('production')) {
            $this->command->error('DummyContentSeeder is for local development only.');
            return;
        }

        $this->copyPhotos();

        foreach (['users', 'greendiary', 'featurestory', 'azrestoration', 'pagewhoweare', 'pagewaykambas', 'pagerawakadut'] as $table) {
            DB::table($table)->truncate();
        }

        $now = Carbon::now('Asia/Jakarta');

        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.test',
            'role_id' => 1,
            'password' => Hash::make('password'),
            'created_at' => $now,
        ]);

        $this->pages($now);
        $this->diary($now);
        $this->stories($now);
        $this->az($now);
    }

    // images are served from storage/files/photos, copy a few from public/assets
    private function copyPhotos()
    {
        $target = storage_path('app/public/files/photos');
        File::ensureDirectoryExists($target);
        foreach (['hutan.jpg', 'Tanaman.jpg', 'ilalang.jpg', 'ilalang-2.jpg', 'ilalang-3.jpg', 'kebakaran.jpg', 'gajah.jpg', 'kabut.jpg', 'peta.jpg', 'aducepat.png', 'matikanapimenjagapuspa.png'] as $file) {
            File::copy(public_path('assets/'.$file), $target.'/'.$file);
        }
    }

    private function pages($now)
    {
        DB::table('pagewhoweare')->insert([
            'id' => 1,
            'name' => 'whoweare',
            'textwhoweareID' => '<p>Situs ini dibangun dan dikelola oleh Auriga Nusantara sebagai bagian dari misinya mendorong aksi pelestarian keanekaragaman hayati dan ekosistem. Situs ini mendokumentasikan kerja konservasi Auriga di Taman Nasional Way Kambas.</p>'
                .'<p>Karena api adalah ancaman terbesar bagi keberhasilan pemulihan, Auriga sangat memperhatikan pengendaliannya. Sekat bakar selebar 30 m dibangun di batas luar maupun di dalam area restorasi.</p>'
                .'<h2>Tim Lapangan</h2>'
                .'<p><img src="/img/basuki.jpeg" alt="Petrus Basuki"><strong>Petrus Basuki</strong> — Ketua Tim Restorasi Kadut. "Hutan adalah agamaku, menanam adalah ibadahku."</p>'
                .'<p><img src="/img/arum.jpeg" alt="Arum Mutasim"><strong>Arum Mutasim</strong> — bergabung dengan Tim Restorasi Kadut sejak 2013.</p>'
                .'<p><img src="/img/paksurya.jpeg" alt="Pak Surya"><strong>Pak Surya</strong> — bergabung dengan Tim Restorasi Kadut sejak 2014.</p>',
            'textwhoweareEN' => '<p>This site is built and managed by Auriga Nusantara as part of fulfilling one of its missions: promoting action to conserve biodiversity and ecosystems. It documents the conservation work Auriga carries out in Way Kambas National Park.</p>'
                .'<p>Because fire is the greatest threat to successful recovery, Auriga pays very close attention to controlling it. Firebreaks 30 m wide have been built both along the outer boundary of the restoration area and within it.</p>'
                .'<h2>Field Team</h2>'
                .'<p><img src="/img/basuki.jpeg" alt="Petrus Basuki"><strong>Petrus Basuki</strong> — Team Leader of the Kadut Restoration Team. "The forest is my religion, planting is my worship."</p>'
                .'<p><img src="/img/arum.jpeg" alt="Arum Mutasim"><strong>Arum Mutasim</strong> — joined the Kadut Restoration Team in 2013.</p>'
                .'<p><img src="/img/paksurya.jpeg" alt="Pak Surya"><strong>Pak Surya</strong> — joined the Kadut Restoration Team in 2014.</p>',
            'created_at' => $now,
        ]);

        DB::table('pagewaykambas')->insert([
            'id' => 1,
            'name' => 'waykambas',
            'textwaykambasID' => '<p>Taman Nasional Way Kambas di Provinsi Lampung adalah salah satu ekosistem tempat seluruh spesies kunci Sumatra bagian selatan berada: badak, gajah, harimau, tapir, dan beruang madu.</p>'
                .'<p>Terdapat 40.780 hektare padang ilalang — hampir separuh taman nasional — di Way Kambas.</p>'
                .'<h2>Lini Masa</h2><ul><li><strong>1924</strong> — Hutan Way Kambas dan Cabang ditetapkan sebagai hutan lindung.</li><li><strong>1989</strong> — Taman Nasional Way Kambas dideklarasikan.</li><li><strong>1999</strong> — Luas taman nasional ditetapkan 125.621 hektare.</li></ul>',
            'textwaykambasEN' => '<p>Way Kambas National Park, in Lampung Province, is one of the ecosystems where all of southern Sumatra\'s flagship species exist: rhinos, elephants, tigers, tapirs and sun bears.</p>'
                .'<p>There are 40,780 hectares of cogon grassland — almost half the park — in Way Kambas.</p>'
                .'<h2>Timeline</h2><ul><li><strong>1924</strong> — The Way Kambas and Cabang forests were designated as protected forest.</li><li><strong>1989</strong> — Way Kambas National Park was established.</li><li><strong>1999</strong> — Way Kambas National Park was set at 125,621 hectares.</li></ul>',
            'created_at' => $now,
        ]);

        DB::table('pagerawakadut')->insert([
            'id' => 1,
            'name' => 'rawakadut',
            'textrawakadutID' => '<p>Kawasan Rawa Kadut terletak kurang lebih di tengah Taman Nasional Way Kambas. Disebut Rawa Kadut karena banyak ular kadut (<em>Acrochordus granulatus</em>) ditemukan di rawa dan sungai kecil di sini.</p>'
                .'<p>Seluas 100 hektare dari 1.257 hektare area restorasi Rawa Kadut direhabilitasi sejak 2013 dan kini mulai menjadi hutan sekunder.</p>',
            'textrawakadutEN' => '<p>The Rawa Kadut area lies roughly in the middle of Way Kambas National Park. It is called Rawa Kadut ("Kadut Swamp") because many file snakes, locally called ular kadut (<em>Acrochordus granulatus</em>), are found in the swamps and small streams here.</p>'
                .'<p>An area of 100 hectares out of the 1,257-hectare Rawa Kadut restoration area was rehabilitated in 2013 and is beginning to become secondary forest.</p>',
            'created_at' => $now,
        ]);
    }

    private function diary($now)
    {
        // [date, titleID, titleEN, descID, descEN, img]
        $entries = [
            ['2023-12-07', 'Persemaian: mengisi polybag dengan media tanam', 'Nursery: filling polybags with growing medium', '3.400 polybag terisi! Media tanam ini akan menerima bibit yang disiapkan sebelumnya.', '3,400 polybags filled! This growing medium will receive the seedlings prepared earlier.', 'Tanaman.jpg'],
            ['2023-12-07', 'Menyiram tanaman di persemaian', 'Watering plants in the nursery', 'Hujan belum juga turun, tim menyiram tanaman persemaian secara manual.', 'With the rains still not arriving, the team waters the nursery plants by hand.', 'hutan.jpg'],
            ['2023-12-01', 'Stek batang bungur: stok bibit di persemaian', 'Bungur stem cuttings: seedling stock in the nursery', 'Bersiap menyambut musim hujan, tim menambah stok bibit dari stek batang. Kali ini didapat 1.260 stek bungur.', 'Getting ready for the rainy season, the team builds up nursery stock from stem cuttings. This time, 1,260 bungur cuttings were obtained.', 'ilalang.jpg'],
            ['2023-11-30', 'Menanam stek bungur', 'Planting bungur cuttings', '1.460 stek bungur ditanam ke polybag di persemaian, untuk menggantikan tanaman mati di Blok 3.', '1,460 bungur cuttings were planted into polybags in the nursery. These seedlings will later replace dead plants in Block 3.', 'gajah.jpg'],
            ['2023-11-29', 'Memperluas area persemaian di camp Rawa Kadut', 'Expanding the nursery area at the Rawa Kadut restoration camp', 'Persemaian diperluas sehingga kapasitasnya naik menjadi 50.000 bibit.', 'The nursery is being expanded; the larger area raises capacity to 50,000 seedlings.', 'kabut.jpg'],
            ['2023-11-28', '3 titik api terpantau ke arah Camp Opu', '3 hotspots spotted towards Camp Opu', 'Titik api terpantau sekitar 5 km dari area restorasi dan sudah dilaporkan ke otoritas taman nasional.', 'Hotspots were spotted about 5 km from the restoration area and have been reported to the national park authority.', 'kebakaran.jpg'],
            ['2023-11-27', 'Menyiapkan 1.400 bibit stek kayu bungur', 'Preparing 1,400 bungur wood-cutting seedlings', 'Stek kayu bungur sudah disiapkan dan akan dimasukkan ke polybag.', 'Bungur wood cuttings have been prepared and will next be placed into the polybags readied earlier.', 'peta.jpg'],
            ['2023-11-26', 'Pengisian polybag dengan media tanam berlanjut', 'Filling polybags with growing medium continues', 'Hingga hari ini sedikitnya 7.140 polybag telah terisi media tanam.', 'As of today, at least 7,140 polybags have been filled with growing medium.', 'ilalang-2.jpg'],
        ];

        foreach ($entries as [$date, $titleID, $titleEN, $descID, $descEN, $img]) {
            DB::table('greendiary')->insert([
                'titleID' => $titleID,
                'titleEN' => $titleEN,
                'slugID' => Str::slug($titleID, '-'),
                'slugEN' => Str::slug($titleEN, '-'),
                'imgDescID' => $descID,
                'imgDescEN' => $descEN,
                'img' => $img,
                'publishdate' => $date,
                'isActive' => 1,
                'created_at' => $now,
            ]);
        }
    }

    private function stories($now)
    {
        // slugs double as route names, see routes/web.php
        $stories = [
            ['Matikan_api_menjaga_puspa', 'Matikan Api Menjaga Puspa', 'Putting Out Fires to Protect the Puspa', 'Fajar Sandhika dan timnya melawan api yang melahap ladang ilalang di Rawa Kadut. Hasil kerja mereka menyelamatkan program reforestasi 100 hektare dengan sekitar 10 ribu pohon.', 'Fajar Sandhika and his team battle the flames devouring the cogon grass fields of Rawa Kadut. Their work saved a 100-hectare reforestation programme with around 10,000 trees.', 'matikanapimenjagapuspa.png', '2022-06-01'],
            ['Adu_cepat_di_Rawa_Kadut', 'Adu Cepat di Rawa Kadut', 'A Race Against Time in Rawa Kadut', 'Hamparan ilalang adalah jejak masa lalu yang masih membayangi Way Kambas. Hutan ditumbuhkan kembali, tapi tidak mudah: adu cepat dengan ilalang, dan melawan api.', 'The vast cogon grasslands are a mark of the past that still hangs over Way Kambas. The forest is being regrown, but it is no easy task: a race against the grass, and a battle against fire.', 'aducepat.png', '2022-05-01'],
            ['Waykambas_tenggelam_dalam_balutan_ilalang', 'Way Kambas, Tenggelam Dalam Balutan Ilalang', 'Way Kambas, Drowning in Cogon Grass', 'Tertatih menembus ilalang. Alih-alih patah semangat, tekad justru mengeras: ganti ilalang dengan hutan lebat!', 'Stumbling through the cogon grass. Rather than discouraging us, it only hardened our resolve: replace the grass with dense forest!', 'ilalang-3.jpg', '2022-04-01'],
        ];

        foreach ($stories as [$slug, $titleID, $titleEN, $descID, $descEN, $img, $date]) {
            DB::table('featurestory')->insert([
                'slug' => $slug,
                'titleID' => $titleID,
                'titleEN' => $titleEN,
                'imgDescID' => $descID,
                'imgDescEN' => $descEN,
                'img' => $img,
                'publishdate' => $date,
                'isActive' => 1,
                'created_at' => $now,
            ]);
        }
    }

    private function az($now)
    {
        // [category, titleID, titleEN, answerID, answerEN]
        $items = [
            ['konteks', 'Mengapa restorasi mendesak dilakukan di dalam Taman Nasional Way Kambas?', 'Why is restoration urgently needed inside Way Kambas National Park?', 'Secara alami hutan semestinya pulih sendiri, tapi itu terbukti tidak terjadi di Way Kambas. Ilalang yang muncul setelah kebakaran 1997/1998 masih merajalela karena kebakaran berulang setiap tahun.', 'In principle, the forest would recover naturally — but this has proven not to happen in Way Kambas. Cogon grass, which took hold after the 1997/1998 fires, still runs rampant because fires recur every year.'],
            ['konteks', 'Apa tujuan restorasi ini?', 'What is the goal of this restoration?', 'Mengembalikan tutupan hutan sekaligus menjadikannya habitat yang aman dan nyaman bagi gajah, badak, harimau, tapir, dan satwa lainnya.', 'To return the area to forest cover, and to make that forest a safe and comfortable habitat for elephants, rhinos, tigers, tapirs and other wildlife.'],
            ['konteks', 'Apa dasar pemilihan Rawa Kadut sebagai lokasi restorasi?', 'On what basis was Rawa Kadut chosen as the restoration site?', 'Rawa Kadut berada di tengah padang ilalang, punya sumber air sepanjang tahun, deretan pohon besar sebagai dinding api alami, dan memungkinkan dibangunnya sekat bakar yang efektif.', 'Rawa Kadut lies in the middle of the grassland, has a year-round water source, a line of large trees acting as a natural firewall, and room to build effective firebreaks.'],
            ['silvikultur', 'Vegetasi apa yang ditanam di Restorasi Kadut?', 'What vegetation is planted at Kadut Restoration?', 'Sedikitnya 20 jenis pohon telah ditanam, antara lain jambon, medang, puspa, merbau, bungur, sungkai, dan gaharu — semuanya jenis asli Way Kambas.', 'At least 20 woody species have been planted, including jambon, medang, puspa, merbau, bungur, sungkai and agarwood — all native to Way Kambas.'],
            ['silvikultur', 'Bagaimana kebutuhan bibit dipenuhi?', 'How is the demand for seedlings met?', 'Melalui persemaian: cabutan dari hutan, semai biji, stek batang, dan cangkok.', 'Through a nursery: wildlings pulled from the forest, sowing from seed, stem cuttings and air layering.'],
            ['penanggulangankebakaran', 'Mengapa kebakaran ilalang begitu sering di Way Kambas?', 'Why are grassland fires so frequent in Way Kambas?', 'Kebakaran hampir pasti disebabkan oleh manusia. Tunas muda ilalang setelah terbakar disukai rusa, sehingga lahan bekas terbakar memudahkan perburuan.', 'Grassland fires in Way Kambas are almost certainly caused by people. Young cogon shoots after a burn attract deer, so burned land makes hunting easier.'],
            ['penanggulangankebakaran', 'Bagaimana lebar sekat bakar ditentukan?', 'How was the firebreak width determined?', 'Dengan asumsi api setinggi 5 meter dan bara yang bisa terbang hingga 20 meter saat angin kencang, sekat bakar 30 meter dianggap jarak aman.', 'Assuming 5-metre flames and embers that can fly up to 20 metres in strong winds, a 30-metre firebreak is taken as a safe distance.'],
        ];

        foreach ($items as [$category, $titleID, $titleEN, $azID, $azEN]) {
            DB::table('azrestoration')->insert([
                'category' => $category,
                'titleID' => $titleID,
                'titleEN' => $titleEN,
                'azID' => '<p>'.$azID.'</p>',
                'azEN' => '<p>'.$azEN.'</p>',
                'isActive' => 1,
                'created_at' => $now,
            ]);
        }
    }
}
