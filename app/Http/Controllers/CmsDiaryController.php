<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsDiaryController extends Controller
{
    public function index(){
        $title = 'Green Diary - Restorasi Kadut';
        $nav = 'diary';
        return view('backend.cmsdiary', compact('title','nav'));
    }
    public function addDiary(){
        $title = 'Add  Diary - Restorasi Kadut';
        $nav = 'diary';
        return view('backend.addDiary', compact('title','nav'));
    }
    public function editDiary($id){
        $id = $id;
        $title = 'Edit Diary - Restorasi Kadut';
        $nav = 'diary';
        return view('backend.editDiary', compact('id','title','nav'));
    }
}
