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
            return 'id, titleID as title, slugID as slug, imgDescID as imgDesc, img, publishdate';
        }else{
            return 'id, titleID as title, slugID as slug, imgDescID as imgDesc, img, publishdate';

            // return 'id, titleEN as title, slugEN as slug, imgDescEN as imgDesc, img, publishdate';
        }
    }
    public function getDiary(){
        return DB::table('greendiary')
        ->selectRaw($this->getSelectDiary())
        ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->Limit(4)
        ->orderBy('publishdate', 'desc')
        ->get();

    }

    public function getStory(){
        return DB::table('featurestory')
        ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
        ->where('isActive', 1)
        ->Limit(5)
        ->orderBy('publishdate', 'desc')
        ->get();
    }
    public function index(){
        $title = 'Home - Way Kambas';
        $diary = $this->getDiary();
        $story = $this->getStory();
        return view('frontend.newinterface', compact('title', 'diary', 'story'));
    }

    public function newInterface(){
        $title = 'Index - Way kambas';
        $description = '';
        $diary = $this->getDiary();
        $story = $this->getStory();
        return view('frontend.index', compact('title', 'diary', 'story'));
    }

    public function sitemap(){
        return response()->view('frontend.sitemap')->header('Content-Type', 'text/xml');
    }
}
