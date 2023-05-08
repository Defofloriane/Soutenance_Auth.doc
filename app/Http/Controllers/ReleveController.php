<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ReleveController extends Controller
{
   public function reveleEtudiant() {
    return View('details');
//    return response()->json($notes);
   }
   public function view_etudiant(){
    $data=Etudiant::where(['matricule'=>'20R2198'])->firstOrFail()->matricule;
    $etudiants=Etudiant::all();
    $etudiant=Etudiant::where(['matricule'=>'20R2198'])->first();
    $donneSuplemntaire = [];
     $releves = Releve::all();
    $releve=Releve::where(['etudiant'=>'20R2198'])->first();
    $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
    ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
    ->where('notes.etudiant', '=', $data)
    ->where('niveaux.nom_niveau','=','LICENCE 2')
    ->select('notes.*', 'ues.nom_ue')
    ->distinct()
    ->get();
    // $data = [$releves, $etudiant];
    // return json_encode($etudiant);
  return view('view_etudiant',compact('releves','etudiants','etudiant'));
   }
   public function search(Request $request)
   {
    $etudiants=Etudiant::all();
      $releves = Releve::all();
      $search = $request->input('search');
      $niveau = $request->input('niveau');
  
      $etudiant = Etudiant::where(function ($query) use ($search) {
         $query->where('matricule', $search)
             ->orWhere('nom', 'like', '%' . $search . '%');
     })->first();
     
     if (!$etudiant) {
         $message = "Aucun étudiant trouvé pour le matricule $search";
         return view('view_etudiant', ['message' => $message],compact('releves','etudiants','etudiant'));
     }
    $nivau_rel = Releve::where(function ($query) use ($niveau) {
      $query->where('niveau',$niveau);
  })->first();
     
  $releve = Releve::where('etudiant', $etudiant->matricule)
  ->where('niveau', $nivau_rel->niveau)
  ->first();
     if (!$releve) {
         $message = "Aucun relevé trouvé pour l'étudiant $etudiant->nom";
         return view('view_etudiant', ['message' => $message],compact('releves','etudiants','etudiant'));
     }
     $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
     ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
     ->where('notes.etudiant', '=', $search)
     ->where('niveaux.nom_niveau','=',$niveau)
     ->select('notes.*', 'ues.nom_ue','ues.credit')
     ->distinct()
     ->get();
    //  $notes = Note::where('etudiant', $releve->etudiant)->get();
      return view('details', ['etudiant' => $etudiant, 'notes' => $notes, 'releve' => $releve]);
     
   }
}
