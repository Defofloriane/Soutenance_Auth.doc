<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Niveau;
use App\Models\Note;
use App\Models\Releve;
use App\Models\User;
use Aws\Textract\TextractClient;
use GuzzleHttp\Client;
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
   $extension = 'jpeg';
   $matricule=$request->input('matricule');
   $niveau=$request->input('niveau');
   $user_id = trim(strtoupper($matricule)).'_'.trim(strtoupper($niveau));
   $filename = $user_id .'.' . $extension;
   $path_r='images/releves/';
   if( $request->input('type')=='relevé' && !file_exists($path_r.$filename)){
      file_put_contents(public_path('images/releves/' . $filename), $image) ;
      return response()->json(['statut'=>200]); 
   }
   elseif(file_exists($path_r.$filename)){
    return response()->json(['statut'=>402]);
   }
  else{
   return response()->json(['statut'=>400]);
  }
  }

  public function encode()
  {
     // Récupération des clés de chiffrement et de hachage HMAC à partir de la variable d'environnement
     $encryptionKey = env('ENCRYPTION_KEY');
     $hmacKey = env('HMAC_KEY');
     
     // Données à chiffrer
     $data = 'Hello, world! This is a test message.ppp';
  
     // Chiffrement avec AES-GCM
     $iv = random_bytes(12); // Génération d'un IV aléatoire
     $ciphertext = openssl_encrypt($data, 'aes-256-gcm', $encryptionKey, OPENSSL_RAW_DATA, $iv, $tag, '', 16);
  
     // Calcul du HMAC pour les données chiffrées
     $hmac = hash_hmac('sha256', $ciphertext . $tag, $hmacKey, true);
  
     // Concaténation du IV, du ciphertext et du HMAC
     $encryptedData = $iv . $ciphertext . $hmac;
  
     // Encodage en base64 pour l'affichage ou le stockage
     $encodedData = base64_encode($encryptedData);
     echo 'Encrypted data: ' . $encodedData . "\n";
  
     // Décodage des données chiffrées depuis la base64
     $encryptedData = base64_decode($encodedData);
  
     // Extraction du IV, du ciphertext et du HMAC à partir des données chiffrées
     $iv = substr($encryptedData, 0, 12);
     $ciphertext = substr($encryptedData, 12, -32);
     $hmac = substr($encryptedData, -32);
  
     // Vérification de l'authenticité des données en calculant le HMAC et en le comparant avec le HMAC extrait
     $expectedHmac = hash_hmac('sha256', $ciphertext . $tag, $hmacKey, true);
     if (!hash_equals($hmac, $expectedHmac)) {
         // Les données n'ont pas passé la vérification d'authenticité
         return response()->json(['error' => 'Invalid data.']);
     }
  
     // Déchiffrement du ciphertext en utilisant la clé de chiffrement et l'IV
     $decrypted = openssl_decrypt($ciphertext, 'aes-256-gcm', $encryptionKey, OPENSSL_RAW_DATA, $iv, $tag);
  
     if ($decrypted === false) {
         // Échec du déchiffrement
         return response()->json(['error' => 'Failed to decrypt the data.']);
     }
  
     // Les données sont authentiques et ont été déchiffrées avec succès
     return response()->json(['data' => $decrypted]);
  }
  

}

