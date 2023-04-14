<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function forgot_password()
    {
        return view('forgot-password');
    }

    public function signup()
    {
        return view('signup');
    }
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        return view('welcome');
    }
}
