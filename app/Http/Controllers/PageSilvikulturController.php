<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSilvikulturController extends Controller
{
    public function index(){
        $title = 'Silvikultur Pages - Way kambas';
        $nav = 'pages';
        return view('backend.silvikultur', compact('title','nav'));
    }
}
