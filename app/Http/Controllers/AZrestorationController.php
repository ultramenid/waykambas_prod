<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AZrestorationController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, azID as az, titleID as title';
        }else{
            return 'id, azID as az, titleID as title';

            // return 'id, azEN as az, titleEN as title';
        }
    }
    public function getAz(){
        return DB::table('azrestoration')
                ->selectRaw($this->getSelect())
                ->get();
    }
    public function index(){
        $title = 'A-Z Restoration - Way Kambas';
        $text = 'A to Z Restorasi Kadut';
        $content = $this->getAz();
        $cssbackground = 'bg-az';
        $nav = 'az';
        return view('frontend.azrestoration', compact('title', 'text', 'content','cssbackground','nav'));
    }
}
