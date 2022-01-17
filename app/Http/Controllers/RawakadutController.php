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
            return 'id, textrawakadutEN as textrawakadut';
        }
    }

    public function getrawakadut(){
        return DB::table('pagerawakadut')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }
    public function index(){
        $content = $this->getrawakadut();
        $title = 'Rawa Kadut - Way kambas';
        return view('frontend.rawakadut', compact('title', 'content'));
    }
}
