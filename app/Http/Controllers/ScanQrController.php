<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use Illuminate\Http\Request;

class ScanQrController extends Controller
{
    public function store(Request $request){
      //recuperation des information lues directement du qr code
      $datas=explode(" ",$request->data);
      $h1=$datas[0];
      $matricule=$datas[1];
      $niveau=$datas[2];
       $donnees=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
       if($donnees){
       $datas= trim($donnees->id_releve).trim($donnees->etudiant).trim($donnees->decision).trim($donnees->filiere).trim($donnees->niveau).trim($donnees->mgp).trim($donnees->anneeAcademique);
       $secretKey = 'auth.document';
       $h2 = hash_hmac('sha256', $datas, $secretKey);

       if($h1==$h2){
          $releve=Releve::where(['etudiant'=>$matricule])->get();
          $etudiant=Etudiant::where(['matricule'=>$matricule])->get();
          $data=Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule;
           $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                      ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                      ->where('notes.etudiant', '=', $data)
                      ->where('niveaux.nom_niveau','=',$niveau)
                      ->select('notes.*', 'ues.nom_ue','ues.credit')
                      ->distinct()
                      ->get();
          $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiant'=>$etudiant,'message'=>'ok']);
       }
       //ici du gere la vu qui dit que le releve est authentique ou pas la du gere la session pour proposer un bouton au cas ou c'est authentique
      // Gestion de la vue pour afficher le message indiquant l'authenticité du relevé
      if ($h1 == $h2) {
         $message = "Le relevé est authentique.";
         if ($h1 == $h2) {
            // ...
            $DataSend = ['releve' => $releve, 'notes' => $notes, 'etudiant' => $etudiant, 'message' => 'ok'];
        
            return view('auth_doc')->with(compact('DataSend'));
        }
     } else {
         $message = "Le relevé n'est pas authentique.";
     }

     // Gestion de la session pour proposer un bouton supplémentaire si le relevé est authentique
     
  
      }

    }
}
