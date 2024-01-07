<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class RawakadutController extends Controller
{

    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textrawakadutID as textrawakadut';
        }else{
            return 'id, textrawakadutID as textrawakadut';

            // return 'id, textrawakadutEN as textrawakadut';
        }
    }

    public function getrawakadut(){
        return DB::table('pagerawakadut')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }
    public function index(){
        $text = 'Restorasi Kadut';
        $content = $this->getrawakadut();
        $title = 'About - Restorasi Kadut';
        $nav = 'about';
        $cssbackground = 'bg-restorasi';
        return view('frontend.rawakadut', compact('title', 'content', 'text', 'nav', 'cssbackground'));
    }
}
