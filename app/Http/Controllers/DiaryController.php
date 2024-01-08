<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DiaryController extends Controller
{

    public function index(){
        $title = 'Diary - Restorasi Kadut';
        $description = 'Memulihkan ekosistem Way Kambas sehingga menjadi habitat yang aman dan nyaman bagi satwa setempat, seperti gajah, harimau, badak.';
        $ogimage = 'meta.png';
        $text = 'Green Diary';
        $nav = 'diary';
        // $diary = $this->getDiary();
        $cssbackground = 'bg-green-diary';
        return view('frontend.diary', compact('title','text', 'cssbackground','nav', 'description', 'ogimage'));
    }
    public function detail($lang, $slug){
        try {
            $data = DB::table('greendiary')->where('slugID', $slug)->first();
            $title = $data->titleID.' - Restorasi Kadut';
            $nav = 'diary';
            return view('frontend.contentdiary', compact('title', 'nav' , 'data'));
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
}
