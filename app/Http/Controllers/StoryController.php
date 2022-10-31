<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(){
        $title = 'Stories - Way Kambas';
        $nav = 'story';
        $text = 'A-Z Restoration';
        $cssbackground = 'bg-story-css';
        return view('frontend.story', compact('title', 'nav', 'cssbackground'));
    }
}
