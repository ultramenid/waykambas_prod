<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function index(){
        $title = 'Settings - Restorasi Kadut';
        $nav = 'settings';
        $sidenav = 'general';
        $credentials = DB::table('webauthn_credentials')
            ->where('user_id', session('id'))
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.settings', compact('title','nav','sidenav','credentials'));
    }
}
