<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Note;    
use Illuminate\Http\Request;

class ReleveController extends Controller
{
   public function reveleEtudiant() {
    $data=Etudiant::where(['matricule'=>'20R2198'])->firstOrFail()->matricule;
    $etudiant=Etudiant::where(['matricule'=>'20R2198'])->first();
    $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
               ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
               ->where('notes.etudiant', '=', $data)
               ->where('niveaux.nom_niveau','=','LICENCE 2')
               ->select('notes.*', 'ues.nom_ue')
               ->distinct()
               ->get();

    return view('details', compact('notes','etudiant'));
//    return response()->json($notes);
   }
   public function view_etudiant(){
    $data=Etudiant::where(['matricule'=>'20R2198'])->firstOrFail()->matricule;
    $etudiant=Etudiant::where(['matricule'=>'20R2198'])->first();
    $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
    ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
    ->where('notes.etudiant', '=', $data)
    ->where('niveaux.nom_niveau','=','LICENCE 2')
    ->select('notes.*', 'ues.nom_ue')
    ->distinct()
    ->get();
    return view('view_etudiant',compact('notes','etudiant'));
   }
}
