<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DiaryController extends Controller
{

    // public function getDiary(){
    //     return DB::table('greendiary')
    //     ->select('publishdate')
    //     ->distinct('publishdate')
    //     ->where('publishdate' , '<=', Carbon::now('Asia/Jakarta'))
    //     ->where('isActive', 1)
    //     ->limit(5)
    //     ->orderBy('publishdate', 'desc')
    //     ->get();

    // }

    public function index(){
        $title = 'Diary - Way Kambas';
        $text = 'Green Diary';
        $nav = 'diary';
        // $diary = $this->getDiary();
        $cssbackground = 'bg-green-diary';
        return view('frontend.diary', compact('title','text', 'cssbackground','nav'));
    }
}
