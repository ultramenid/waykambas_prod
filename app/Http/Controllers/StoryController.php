<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(){
        $title = __('Feature - Restorasi Kadut');
        $description = __('Cerita dari lapangan. Dikisahkan sendiri atau oleh pihak lain.');
        $ogimage = 'meta.png';
        $nav = 'story';
        $text = 'Feature Story';
        $cssbackground = 'bg-story-css';
        return view('frontend.story', compact('title', 'nav', 'cssbackground', 'description', 'ogimage'));
    }
}
