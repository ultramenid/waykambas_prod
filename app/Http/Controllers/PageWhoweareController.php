<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageWhoweareController extends Controller
{
    public function index(){
        $title = 'Who we are Pages - Way kambas';
        $nav = 'pages';
        return view('backend.whoweare', compact('title','nav'));
    }
}
