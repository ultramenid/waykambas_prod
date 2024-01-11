<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MatikanAPiController extends Controller
{
    public function getStory(){
        return DB::table('featurestory')
        ->where('slug', 'Matikan_api_menjaga_puspa')
        ->first();
    }

    public function anotherStory(){
        return DB::table('featurestory')
        ->where('slug', '!=' , 'Matikan_api_menjaga_puspa')
        ->get();
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

    public function newMatikanapi(){
        $stories = $this->anotherStory();
        $title = $this->getStory()->titleID;
        $cssbackground = null;
        $text = $this->getStory()->titleID;
        $imageHero = 'matikanapimenjagapuspa.png';
        $nav = 'story';
        $ogimage = 'matikanapimenjagapuspa350.png';
        $publish = date("F Y", strtotime($this->getStory()->publishdate)) ;
        $desc = 'Fajar Sandhika dan timnya melawan api yang melahap ladang ilalang di Rawa Kadut, Taman Nasional Way Kambas, Lampung. Hasil kerja mereka berhasil menyelamatkan program reforestasi 100 hektare dengan sekitar 10 ribu pohon.';
        $imgdesc = 'Edisi khusus tokoh Tempo 2015 - Fajar Sandhika Negara Simanjuntak';
        if (App::getLocale() == 'id') {
            return view('frontend.new-matikanapi', compact('stories','title','text', 'imageHero','nav', 'imgdesc','publish', 'desc','ogimage','cssbackground'));

        }else{
            return view('frontend.new-matikanapi-en', compact('stories','title','text', 'imageHero','nav', 'imgdesc','publish', 'desc','ogimage','cssbackground'));
        }
    }


}
