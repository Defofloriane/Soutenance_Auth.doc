<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
public function getUser(Request $request){
   $DataSend=(['message'=>'no']); 
   $data=$request->all();
   $email=$data['email'];
   $password=$data['password'];
   $user=User::where(['email'=>$email,'password'=>$password])->first();

   if($user){
      $DataSend=(['user'=>$user,'message'=>'ok']);
   }
   return response()->json($DataSend);
}

public function store(Request $request){
   $image = $request->input('file');
   $image = str_replace('data:image/jpeg;base64,', '', $image);
   $image = str_replace('data:image/jpg;base64,', '', $image);
   $image = str_replace(' ','+',$image);
   $image = base64_decode($image);     
   $temp = tmpfile();
   fwrite($temp, $image);   
   $meta_data = stream_get_meta_data($temp);
   $target_path = $meta_data['uri'];
   // return response()->json($target_path)->header('Location', '/archive');
   return Redirect::to('/archive')->with('photoPath', $target_path);
   }


}
