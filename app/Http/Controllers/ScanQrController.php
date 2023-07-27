<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use Illuminate\Http\Request;

class ScanQrController extends Controller
{
    public function store(Request $request){
    //   $data = $request->input('data');
    $hmacKey = env('HMAC_KEY');
    $encodedData = $request->input('data');
    $encryptedData = base64_decode(trim($encodedData));
    $datas=explode("?",$encryptedData);
    if(count($datas)<4){
       return response()->json(['statut'=>402,'message'=>'Error']);
    }
    $hmac1=$datas[0];
    $matricule=$datas[1];
    $niveau=$datas[2];
    $type=$datas[3];

    $hmacKey = env('HMAC_KEY');
    $encodedData = $request->input('data');
    $encryptedData = base64_decode(trim($encodedData));
    $datas=explode("?",$encryptedData);
    if(count($datas)<4){
       return response()->json(['statut'=>402,'message'=>'Error']);
    }
    $hmac1=$datas[0];
    $matricule=$datas[1];
    $niveau=$datas[2];
    $type=$datas[3];
    if(!empty($datas)&&!empty($hmac1)&&!empty($matricule)&&!empty($niveau)&&!empty($type)){
       $donnees= $releve=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
        $dataCont=trim($donnees->id_releve).'?'.trim($donnees->etudiant).'?'.trim($donnees->decision).'?'.trim($donnees->filiere).'?'.trim($donnees->niveau).'?'.trim((float)$donnees->mgp).'?'.trim($donnees->anneeAcademique);
        $hmac2 = hash_hmac('sha256', $dataCont, $hmacKey);
        if(hash_equals($hmac2,$hmac1)){
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
          return response()->json(['status' => 200, 'message' => 'Success', 'data' => $DataSend,'type'=>$type]);
        }
        else{
          return response()->json(['statut'=>400,'message'=>'Failed']);
        }
    }
    else{
       return response()->json(['statut'=>402,'message'=>'Error']);
    }
          // $releve=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
          // $etudiant=Etudiant::where(['matricule'=>$matricule])->first();
          // $data=Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule;
          // $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
          //             ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
          //             ->where('notes.etudiant', '=', $data)
          //             ->where('niveaux.nom_niveau','=',$niveau)
          //             ->select('notes.*', 'ues.nom_ue','ues.credit')
          //             ->distinct()
          //             ->get();

          // $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiant'=>$etudiant]);
          // return response()->json(['status' => 200, 'message' => 'Success', 'data' => $DataSend,'type'=>$type]);
    
    }
    public function index(){
        return view('scan_code');
    }
    public function index1(){
        return view('scan_code1');
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
