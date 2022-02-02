<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsAzController extends Controller
{
    public function index(){
        $title = 'A-Z Restoration - Way kambas';
        $nav = 'az';
        return view('backend.cmsaz', compact('title','nav'));
    }
    public function addAz(){
        $title = 'Add - A-Z Restoration';
        $nav = 'az';
        return view('backend.addaz', compact('title','nav'));
    }
    public function editAz($id){
        $title = 'Add - A-Z Restoration';
        $nav = 'az';
        $id = $id;
        return view('backend.editaz', compact('title','nav', 'id'));
    }
}
