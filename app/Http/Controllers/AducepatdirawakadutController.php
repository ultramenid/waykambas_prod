<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AducepatdirawakadutController extends Controller
{
    public function index(){
        $title = 'Adu Cepat di Rawa Kadut - Feature Story';
        $text = 'Adu Cepat di Rawa Kadut';
        $imageHero = 'aducepat.png';
        $nav = 'story';
        $imgdesc = 'DIKEPUNG ILALANG
        Ribuan bibit reforestasi terbenam dalam
        lautan alang-alang. Pertumbuhan bibit
        tanaman yang masih rentan ini sangat
        tergantung pada bantuan manusia untuk
        membuka ruang tumbuh. Hidup terasa
        berat bagi bibit ini lantaran harus bersaing
        dengan jutaan ilalang.AGUS PRIJONO';
        $publish = '22 Oktober 2020';
        return view('frontend.aducepat', compact('title','text', 'imageHero','nav', 'imgdesc', 'publish'));
    }
}
