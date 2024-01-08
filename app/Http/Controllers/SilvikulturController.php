<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class SilvikulturController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textsilvikulturID as textsilvikultur';
        }else{
            return 'id, textsilvikulturID as textsilvikultur';

            // return 'id, textsilvikulturEN as textsilvikultur';
        }
    }

    public function getsilvikultur(){
        return DB::table('pagesilvikultur')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }
    public function index(){
        $text = 'Silvikultur';
        $content = $this->getsilvikultur();
        $title = 'Silvikultur - Restorasi Kadut';
        return view('frontend.silvikultur', compact('title', 'content', 'text'));
    }
}
