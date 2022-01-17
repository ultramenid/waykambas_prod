<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageWaykambasController extends Controller
{
    public function index(){
        $title = 'Way kambas Pages - Way kambas';
        $nav = 'pages';
        return view('backend.waykambas', compact('title','nav'));
    }
}
