<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index(Request $request){
       
        $filiere=$request->input('id_filiere');
        $niveau=Niveau::all();
        return view('niveau',compact('niveau','filiere'));
    }
}
