<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRawakadutController extends Controller
{
    public function index(){
        $title = 'Rawa kadut Pages - Way kambas';
        $nav = 'pages';
        return view('backend.rawakadut', compact('title','nav'));
    }
}
