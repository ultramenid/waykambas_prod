<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class WaykambasController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textwaykambasID as textwaykambas';
        }else{
            return 'id, textwaykambasID as textwaykambas';

            // return 'id, textwaykambasEN as textwaykambas';
        }
    }

    public function getwaykambas(){
        return DB::table('pagewaykambas')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }
    public function geth1(){
        if (App::getLocale() == 'id') {
            return 'Sekilas Way Kambas';
        }else{
            return 'Sekilas Way Kambas';

            // return 'Way Kambas at a glance';
        }
    }
    public function index(){
        $text = $this->geth1();
        $content = $this->getwaykambas();
        $title = 'About - Way kambas';
        $description = 'Nilai penting Taman Nasional Way Kambas. Kekayaan biodiversitasnya. Dinamika tutupan lahan di sana. Hingga riwayat kawasan konservasi ini.';
        $ogimage = 'meta.png';
        $nav = 'about';
        $cssbackground = 'bg-waykambas';
        return view('frontend.waykambas', compact('title', 'content', 'text','nav', 'cssbackground', 'description', 'ogimage'));
    }
}
