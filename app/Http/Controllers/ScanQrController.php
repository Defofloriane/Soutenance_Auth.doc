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

      $encryptionKey = env('ENCRYPTION_KEY');
      $hmacKey = env('HMAC_KEY');
      $encodedData = $request->input('data');
      $encryptedData = base64_decode(trim($encodedData));
      // Décodage de la chaîne depuis la base64
    // Extraction du IV, du ciphertext, du tag et du HMAC à partir des données chiffrées
      $iv = substr($encryptedData, 0, 12);
      $ciphertext = substr($encryptedData, 12, -48);
      $tag = substr($encryptedData, -48, 16);
      $hmac = substr($encryptedData, -32);

    // Calcul du HMAC pour les données déchiffrées
      $expectedHmac = hash_hmac('sha256', $ciphertext . $tag, $hmacKey, true);

    // Vérification de l'authenticité des données en comparant le HMAC calculé avec le HMAC extrait
    if (!hash_equals($hmac, $expectedHmac)) {
        // Les données n'ont pas passé la vérification d'authenticité
        return response()->json(['status' => 400, 'message' => 'Failure']);
    }

    // Déchiffrement du ciphertext en utilisant la clé de chiffrement, l'IV et le tag
    $decrypted = openssl_decrypt($ciphertext, 'aes-256-gcm', $encryptionKey, OPENSSL_RAW_DATA, $iv, $tag);

    if ($decrypted === false) {
        // Échec du déchiffrement
        return response()->json(['status' => 402, 'message' => 'Failure']);
    }

    // Les données sont authentiques et ont été déchiffrées avec succès
    // return response()->json(['data' => $decrypted]);
    
      $datas=explode("?",$decrypted);
      $type=$datas[0];
      $matricule=$datas[2];
      $niveau=$datas[5];
       $donnees=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
       $datasH= trim($donnees->id_releve).trim($donnees->etudiant).trim($donnees->decision).trim($donnees->filiere).trim($donnees->niveau).trim($donnees->mgp).trim($donnees->anneeAcademique);
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
          return response()->json(['status' => 200, 'message' => 'Success', 'data' => $DataSend,'type'=>$type]);
    
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
