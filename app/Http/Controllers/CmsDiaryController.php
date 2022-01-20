<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsDiaryController extends Controller
{
    public function index(){
        $title = 'Green Diary - Way kambas';
        $nav = 'diary';
        return view('backend.cmsdiary', compact('title','nav'));
    }
}
