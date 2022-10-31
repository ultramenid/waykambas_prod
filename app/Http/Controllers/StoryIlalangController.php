<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryIlalangController extends Controller
{
    public function getStory(){
        return DB::table('featurestory')
        ->where('slug', 'Waykambas_tenggelam_dalam_balutan_ilalang')
        ->first();
}
    public function index(){
        $title = $this->getStory()->titleID. ' - Feature Story';
        $text = $this->getStory()->titleID;
        $imageHero = 'ilalang.jpg';
        $nav = 'story';
        $publish = date("F Y", strtotime($this->getStory()->publishdate)) ;
        $imgdesc = 'Gambar 1. Belantara ilalang di Way Kambas. Tak ada jalan setapak, semua tertutup ilalang. Medan berat seperti inilah yang kami taklukkan untuk menemukan titik awal restorasi di Rawa Kadut. @ Koen Setyawan / SILVAGAMA';
        return view('frontend.ilalang', compact('title','text', 'imageHero','nav', 'imgdesc','publish'));
    }
}
