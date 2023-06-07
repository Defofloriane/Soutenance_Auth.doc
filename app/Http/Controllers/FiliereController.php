<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index(Request $request){
        $id_dep=$request->input('id_departement');
        $filiere=Filiere::where('departement',$id_dep)->get();
    
        return view('filiere',compact('filiere'));
    }
}
