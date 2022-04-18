<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function getSelectDiary(){
        if (App::getLocale() == 'id') {
            return 'id, titleID as title, slugID as slug, imgDescID as imgDesc, diaryID as diary, img';
        }else{
            return 'id, titleEN as title, slugEN as slug, imgDescEN as imgDesc, diaryEN as diary, img';
        }
    }
    public function getDiary(){
        return DB::table('greendiary')
        ->selectRaw($this->getSelectDiary())
        ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->Limit(2)
        ->orderBy('publishdate', 'desc')
        ->get();

    }
    public function index(){
        $title = 'Index - Way kambas';
        $diary = $this->getDiary();
        return view('frontend.index', compact('title', 'diary'));
    }
}
