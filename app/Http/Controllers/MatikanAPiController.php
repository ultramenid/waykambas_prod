<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatikanAPiController extends Controller
{
    public function getStory(){
        return DB::table('featurestory')
        ->where('slug', 'Matikan_api_menjaga_puspa')
        ->first();
    }


    public function index(){
        $title = $this->getStory()->titleID;
        $text = $this->getStory()->titleID;
        $imageHero = 'matikanapimenjagapuspa.png';
        $nav = 'story';
        $ogimage = 'matikanapimenjagapuspa350.png';
        $publish = date("F Y", strtotime($this->getStory()->publishdate)) ;
        $desc = 'Fajar Sandhika dan timnya melawan api yang melahap ladang ilalang di Rawa Kadut, Taman Nasional Way Kambas, Lampung. Hasil kerja mereka berhasil menyelamatkan program reforestasi 100 hektare dengan sekitar 10 ribu pohon.';
        $imgdesc = 'Edisi khusus tokoh Tempo 2015 - Fajar Sandhika Negara Simanjuntak';
        return view('frontend.matikanapi', compact('title','text', 'imageHero','nav', 'imgdesc','publish', 'desc','ogimage'));
    }
}
