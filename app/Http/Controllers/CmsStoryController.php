<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsStoryController extends Controller
{
    public function index(){
        $title = 'Feature Story - Way kambas';
        $nav = 'story';
        return view('backend.cmsstory', compact('title','nav'));
    }

    public function addStory(){
        $title = 'Add Feature Story - Way kambas';
        $nav = 'story';
        return view('backend.addstory', compact('title', 'nav'));
    }

    public function editStory($id){
        $id = $id;
        $title = 'Edit Feature Story - Way kambas';
        $nav = 'story';
        return view('backend.editstory', compact('title','id', 'nav'));
    }
}
