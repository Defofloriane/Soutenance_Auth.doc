<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use Illuminate\Http\Request;

class ScanQrController extends Controller
{
    public function store(Request $request){
      $data = $request->input('data');
      $datas=explode(" ",$data);
      $h1=$datas[0];
      $matricule=$datas[1];
      $niveau=$datas[2].' '.$datas[3];
       $donnees=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
       $datasH= trim($donnees->id_releve).trim($donnees->etudiant).trim($donnees->decision).trim($donnees->filiere).trim($donnees->niveau).trim($donnees->mgp).trim($donnees->anneeAcademique);
       $secretKey = 'auth.document';
       $h2 = hash_hmac('sha256', $datasH, $secretKey);
       if($h1==$h2){
          $releve=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
          $etudiant=Etudiant::where(['matricule'=>$matricule])->first();
          $data=Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule;
           $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                      ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                      ->where('notes.etudiant', '=', $data)
                      ->where('niveaux.nom_niveau','=',$niveau)
                      ->select('notes.*', 'ues.nom_ue','ues.credit')
                      ->distinct()
                      ->get();
          $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiant'=>$etudiant]);
          return response()->json(['status' => 200, 'message' => 'Success', 'data' => $DataSend]);
        }
        else if($donnees && $h1!==$h2){
            return response()->json(['status' => 400, 'message' => 'Failure']);
        }
        else if(count($datas)<3){
            return response()->json(['status' => 402, 'message' => 'Failure']);
        }

    }
    public function index(){
        return view('scan_code');
    }

    public function test(Request $request)
   {
      $id_releve=$request->id_releve;
      return view("details",compact('id_releve'));
   }
   public function afficher()
   {
      //  $releve = Releve::find($id);
      return view('details');
   }
}
