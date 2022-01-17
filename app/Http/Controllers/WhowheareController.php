<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class WhowheareController extends Controller
{
    public function geth1(){
        if (App::getLocale() == 'id') {
            return 'Sekilas tentang Taman Nasional Way Kambas';
        }else{
            return 'A glimpse of Way Kambas National Park';
        }
    }
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textwhoweareID as textwhoweare';
        }else{
            return 'id, textwhoweareEN as textwhoweare';
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
        $title = 'Who whe are - Way kambas';
        return view('frontend.whoweare', compact('title', 'content', 'text'));
    }
}
