<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\EtudiantFiliereNiveau;
use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Releve;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class EtudiantController extends Controller
{
    public function index(Request $request){
        $niv_id=$request->input('id_niveau');
        $fil_id=$request->input('filiere');
        $niveau=Niveau::where('id_niveau',$niv_id)->first()->nom_niveau;
        $filiere=Filiere::where('id_filiere',$fil_id)->first()->nom_filiere;
         $releves=Releve::where(['niveau'=>$niveau, 'filiere'=>$filiere])->get(); 
         $etudiants=Etudiant::all();
         return view('etudiant',compact('etudiants','niveau','releves'));
    }
}
