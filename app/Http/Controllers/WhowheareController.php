<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class WhowheareController extends Controller
{
    public function geth1(){
        if (App::getLocale() == 'id') {
            return 'Tentang kami';
        }else{
            // return 'Who we are';
            return 'Tentang kami';

        }
    }
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textwhoweareID as textwhoweare';
        }else{
            return 'id, textwhoweareID as textwhoweare';

            // return 'id, textwhoweareEN as textwhoweare';
        }
    }

    public function getWhoweare(){
        return DB::table('pagewhoweare')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }

    public function index(){
        $text = $this->geth1();
        $content = $this->getWhoweare();
        $title = 'Tentang Kami - Way kambas';
        $cssbackground = 'bg-tentangkami';
        $nav = 'about';
        return view('frontend.whoweare', compact('title', 'content', 'text', 'cssbackground', 'nav'));
    }
}
