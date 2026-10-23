<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class StoryIlalangController extends Controller
{
    public function getStory(){
        return DB::table('featurestory')
        ->where('slug', 'Waykambas_tenggelam_dalam_balutan_ilalang')
        ->first();
    }
    public function anotherStory(){
        return DB::table('featurestory')
        ->whereNot('slug', 'Waykambas_tenggelam_dalam_balutan_ilalang')
        ->get();
    }
    public function index(){
        // dd($this->anotherStory());
        $title = localizedField($this->getStory(), 'title');
        $text = localizedField($this->getStory(), 'title');
        $imageHero = 'ilalang.jpg';
        $nav = 'story';
        $ogimage = 'ogilalang3150.jpeg';
        $publish = date("F Y", strtotime($this->getStory()->publishdate)) ;
        if (App::getLocale() == 'id') {
            $desc = 'Belantara ilalang membalut area seluas 40.780 ha di Way Kambas. Medan berat inilah yang kami taklukkan untuk menemukan titik awal restorasi di Rawa Kadut.';
            $imgdesc = 'Gambar 1. Belantara ilalang di Way Kambas. Tak ada jalan setapak, semua tertutup ilalang. Medan berat seperti inilah yang kami taklukkan untuk menemukan titik awal restorasi di Rawa Kadut. @ Koen Setyawan / SILVAGAMA';
            return view('frontend.ilalang', compact('title','text', 'imageHero','nav', 'imgdesc','publish', 'desc','ogimage'));
        }else{
            $desc = 'A wilderness of cogon grass covers 40,780 ha of Way Kambas. This is the tough terrain we conquered to find the starting point for restoration at Rawa Kadut.';
            $imgdesc = 'Figure 1. The cogon grass wilderness of Way Kambas. There are no footpaths; everything is covered in grass. This is the kind of tough terrain we conquered to find the starting point for restoration at Rawa Kadut. @ Koen Setyawan / SILVAGAMA';
            return view('frontend.ilalang-en', compact('title','text', 'imageHero','nav', 'imgdesc','publish', 'desc','ogimage'));
        }
    }
}
