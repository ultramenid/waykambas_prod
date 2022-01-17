<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class SiteplanController extends Controller
{
    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, textsiteplanID as textsiteplan';
        }else{
            return 'id, textsiteplanEN as textsiteplan';
        }
    }

    public function getsiteplan(){
        return DB::table('pagesiteplan')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }
    public function index(){
        $text = 'Site Plan';
        $content = $this->getsiteplan();
        $title = 'Site Plan - Way kambas';
        return view('frontend.siteplan', compact('title', 'content', 'text'));
    }
}
