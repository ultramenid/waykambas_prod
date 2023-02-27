<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSiteplanController extends Controller
{
    public function index(){
        $title = 'Site Plan Pages - Way kambas';
        $nav = 'pages';
        return view('backend.siteplan', compact('title','nav'));
    }
}
