<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Etudiant;
use Illuminate\Http\Response;
use App\Models\Releve;

class NiveauControllerAttestation extends Controller
{
    // niveauAttestation
    public function niveauAttestation(Request $request)
{
    $filiere = $request->input('id_filiere');
    $niveau = Niveau::where('id_niveau', "L3")->get();
    return view('niveau_attestation', compact('niveau', 'filiere'));
}
public function filiereAttestation(Request $request){
    $filiere = Filiere::where('id_filiere', 'ICT4D')->get();
    return view('filiere_attestation', compact('filiere'));
    
}
public function etudiantAttestation(Request $request){
    $niv_id=$request->input('id_niveau');
    $fil_id=$request->input('filiere');
    $niveau=Niveau::where('id_niveau',$niv_id)->first()->nom_niveau;
    $filiere=Filiere::where('id_filiere',$fil_id)->first()->nom_filiere;
     $releves=Releve::where(['niveau'=>$niveau, 'filiere'=>$filiere])->get(); 
     $etudiants=Etudiant::all();
     return view('etudiant_attestation',compact('etudiants','niveau','releves'));
}
public function show_Attestation(Request $request)
    {
        $id_releve = $request->id_releve;
        $matricule = $request->matricule_;
        $niveau = $request->niveau_;
        $da = $request->data;
        
        $releve = Releve::where(['id_releve' => $id_releve, 'etudiant' => $matricule, 'niveau' => $niveau])->first();
        
        // Vérifier si le relevé existe
        if (!$releve) {
            return redirect()->back()->with('message', "L'attestation demandée n'existe pas.");
        }
        
        $etudiant = Etudiant::where('matricule', $releve->etudiant)->first();
        
        // Vérifier si l'étudiant associé au relevé existe
        if (!$etudiant) {
            return redirect()->back()->with('message', "L'étudiant associé au relevé n'existe pas.");
        }
        
        $dataCont= trim($releve->id_releve).'?'.trim($releve->etudiant).'?'.trim($releve->decision).'?'.trim($releve->filiere).'?'.trim($releve->niveau).'?'.trim((float)$releve->mgp).'?'.trim($releve->anneeAcademique);
        // hachage et crypthage des inforamtions
        // Récupération des clés de chiffrement et de hachage HMAC à partir de la variable d'environnement
         $encryptionKey = env('ENCRYPTION_KEY');
         $hmacKey = env('HMAC_KEY'); 
         // Données à chiffrer
         $data = $dataCont;
        // Chiffrement avec AES-GCM
         $iv = random_bytes(12); // Génération d'un IV aléatoire
         $tag = openssl_random_pseudo_bytes(16); // Génération d'un tag aléatoire
         $ciphertext = openssl_encrypt($data, 'aes-256-gcm', $encryptionKey, OPENSSL_RAW_DATA, $iv, $tag, '', 16);
  
        // Calcul du HMAC pour les données chiffrées
        $hmac = hash_hmac('sha256', $ciphertext . $tag, $hmacKey, true);
  
        // Concaténation du IV, du ciphertext, du tag et du HMAC
        $encryptedData = $iv . $ciphertext . $tag . $hmac;
  
        // Encodage en base64 pour être inclus dans le QR code
        $encodedData = base64_encode($encryptedData);
       //fin hachage et crypthage des informations
        $hmacInfo=$encodedData;
        
        // Passez les données à la vue de détails
        return view("attestation", compact('releve', 'etudiant', 'hmacInfo'));
        
        
        // Passez le tableau contenant l'étudiant, le relevé et les informations HMAC à la vue de détails
        
   
    }
}
