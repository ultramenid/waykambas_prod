<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdddiaryController extends Controller
{
    public function index(){
        $title = 'Add  Diary - Way kambas';
        $nav = 'diary';
        return view('backend.addDiary', compact('title','nav'));
    }
}
