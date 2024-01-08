<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $title = 'Settings - Restorasi Kadut';
        $nav = 'settings';
        $sidenav = 'general';
        return view('backend.settings', compact('title','nav','sidenav'));
    }
}
