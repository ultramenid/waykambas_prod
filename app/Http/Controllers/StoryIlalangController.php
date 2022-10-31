<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryIlalangController extends Controller
{
    public function index(){
        $title = 'Waykambas, Tenggelam Dalam Balutan Ilalang - Feature Story';
        $text = 'Waykambas, Tenggelam Dalam Balutan Ilalang';
        $imageHero = 'ilalang.jpg';
        $nav = 'story';
        $publish = 'November 2013';
        $imgdesc = 'Gambar 1. Belantara ilalang di Way Kambas. Tak ada jalan setapak, semua tertutup ilalang. Medan berat seperti inilah yang kami taklukkan untuk menemukan titik awal restorasi di Rawa Kadut. @ Koen Setyawan / SILVAGAMA';
        return view('frontend.ilalang', compact('title','text', 'imageHero','nav', 'imgdesc','publish'));
    }
}
