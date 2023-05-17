<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function decode(Request $request){

        $DataSend=(['message'=>'no']); 
        $data=$request->all();
        if(array_key_exists('hache',$data) && array_key_exists('matricule',$data)&& array_key_exists('niveau',$data)){
        $h1=$data['hache'];
        $matricule=$data['matricule'];
        $niveau=$data['niveau'];
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
         }    
       return response()->json($DataSend);
    }
     else{
        $DataSend=(['message'=>'no document']);
        return response()->json($DataSend);
   }
  
}
}
