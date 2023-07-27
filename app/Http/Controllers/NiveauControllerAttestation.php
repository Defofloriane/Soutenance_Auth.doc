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
    $filiere = Filiere::all();
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
        $matricule = $request->matricule;
        $niveau = $request->niveau;
        // $da = $request->data;
        // dd($request->all());
       $donnees= $releve = Releve::where(['id_releve' => $id_releve, 'etudiant' => $matricule, 'niveau' => $niveau])->first();
       $hmacKey = env('HMAC_KEY'); 
        // Vérifier si le relevé existe
        if (!$releve) {
            return redirect()->back()->with('message', "L'attestation demandée n'existe pas.");
        }
        
        $etudiant = Etudiant::where('matricule', $releve->etudiant)->first();
        
        // Vérifier si l'étudiant associé au relevé existe
        if (!$etudiant) {
            return redirect()->back()->with('message', "L'étudiant associé au relevé n'existe pas.");
        }
        

        $dataCont=trim($donnees->id_releve).'?'.trim($donnees->etudiant).'?'.trim($donnees->decision).'?'.trim($donnees->filiere).'?'.trim($donnees->niveau).'?'.trim((float)$donnees->mgp).'?'.trim($donnees->anneeAcademique);
        $data = $dataCont;
        $hmac = hash_hmac('sha256', $dataCont, $hmacKey);
        $encryptedData = $hmac.'?'. $matricule .'?'. $niveau.'?'. 'attest';
       // Encodage en base64 pour être inclus dans le QR code
        $hmacInfo=base64_encode(trim($encryptedData));
        
        // Passez les données à la vue de détails
        return view("attestation", compact('releve', 'etudiant', 'hmacInfo'));
        
        // return $hmacInfo;
        
        // Passez le tableau contenant l'étudiant, le relevé et les informations HMAC à la vue de détails
        
   
    }
    public function view_attestation_phone(Request $request)
    {
        return view("view_attestation_phone");
        
        // return $hmacInfo;
        
        // Passez le tableau contenant l'étudiant, le relevé et les informations HMAC à la vue de détails
        
   
    }
}
