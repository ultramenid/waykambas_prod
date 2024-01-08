<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsStoryController extends Controller
{
    public function index(){
        $title = 'Feature - Restorasi Kadut';
        $nav = 'story';
        return view('backend.cmsstory', compact('title','nav'));
    }

    public function addStory(){
        $title = 'Add Feature - Restorasi Kadut';
        $nav = 'story';
        return view('backend.addstory', compact('title', 'nav'));
    }

    public function editStory($id){
        $id = $id;
        $title = 'Edit Feature - Restorasi Kadut';
        $nav = 'story';
        return view('backend.editstory', compact('title','id', 'nav'));
    }
}
