<?php

namespace App\Http\Controllers;

use App\Models\Faculte;
use Illuminate\Http\Request;

class FaculteController extends Controller
{
    public function index(){
        $faculte=Faculte::all();
        return view('faculte',compact('faculte'));
    }
}

