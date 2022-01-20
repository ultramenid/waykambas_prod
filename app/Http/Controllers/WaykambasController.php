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
            return 'id, textwaykambasEN as textwaykambas';
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
            return 'Way Kambas at a glance';
        }
    }
    public function index(){
        $text = $this->geth1();
        $content = $this->getwaykambas();
        $title = 'About - Way kambas';
        return view('frontend.waykambas', compact('title', 'content', 'text'));
    }
}
