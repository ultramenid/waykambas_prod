<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $title = 'Login - Restorasi Kadut';
        return view('backend.login', compact('title'));
    }
}
