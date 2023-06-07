<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index(Request $request){
        $id_fac=$request->input('id_faculte');
        $departement=Departement::where(['faculte'=>$id_fac])->get();     
        return view('departement',compact('departement'));
    }
}
