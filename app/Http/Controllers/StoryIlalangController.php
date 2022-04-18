<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryIlalangController extends Controller
{
    public function index(){
        $title = 'Waykambas Tenggelam Dalam Balutan Ilalang - Feature Story';
        $text = 'Waykambas Tenggelam Dalam Balutan Ilalang';
        $imageHero = 'ilalang.jpg';
        return view('frontend.ilalang', compact('title','text', 'imageHero'));
    }
}
