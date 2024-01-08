<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    public function index(){
        $title = 'Kinerja - Restorasi Kadut';
        $text = 'Kinerja';
        $nav = 'kinerja';
        // $diary = $this->getDiary();
        // $cssbackground = 'bg-green-diary';
        return view('frontend.kinerja', compact('title','text','nav'));
    }

    public function duaribuduatiga(){
        $title = 'Kinerja 2023 - Restorasi Kadut';
        $text = 'Kinerja 2023';
        $nav = 'kinerja';
        // $diary = $this->getDiary();
        // $cssbackground = 'bg-green-diary';
        return view('frontend.kinerja2023', compact('title','text','nav'));
    }
}
