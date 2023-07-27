<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Releve;
use Illuminate\Http\Response;



class AttestationController extends Controller
{
   
    public function attestation()
    {
        $etudiant_attestation = Etudiant::join('releves', 'etudiants.matricule', '=', 'releves.etudiant')
            ->where('releves.niveau', 'Licence 3')
            ->where('releves.mgp', '>=', 2)
            ->select('etudiants.*', 'releves.*')
            ->get();

        return view('view_attestation', compact('etudiant_attestation'));
    }
    public function showAttestation(Request $request)
    {
        $matricule = $request->input('matricule');
        $etudiant_attestation = Etudiant::join('releves', 'etudiants.matricule', '=', 'releves.etudiant')
            ->whereIn('releves.niveau', ['Licence 3'])
            ->where('releves.mgp', '>=', 2)
            ->where('etudiants.matricule', '=', $matricule)
            ->select('etudiants.*', 'releves.*')
            ->get();

        $licence3_found = false; // Variable pour vérifier si la licence 3 est trouvée
        
        foreach ($etudiant_attestation as $etudiant) {
            if ($etudiant->niveau == 'LICENCE 3' && $etudiant->mgp >= 2) {
                $licence3_found = true;
                break;
            }
        }
        $hmacKey = env('HMAC_KEY'); 
        $donnees= $releve = Releve::where(['etudiant' => $matricule, 'niveau' =>'LICENCE 3'])->first();
        $dataCont=trim($donnees->id_releve).'?'.trim($donnees->etudiant).'?'.trim($donnees->decision).'?'.trim($donnees->filiere).'?'.trim($donnees->niveau).'?'.trim((float)$donnees->mgp).'?'.trim($donnees->anneeAcademique);
        $data = $dataCont;
        $hmac = hash_hmac('sha256', $dataCont, $hmacKey);
        $encryptedData = $hmac.'?'. $matricule .'?'. 'LICENCE 3'.'?'.'attest';
       // Encodage en base64 pour être inclus dans le QR code
       $hmacInfo=base64_encode(trim($encryptedData));
        // Logique pour récupérer l'attestation correspondante à l'étudiant

        return view("attestation", compact('releve', 'etudiant', 'notes','hmacInfo'));
    }

    public function getAttestation(Request $request)
    {
        $matricule = $request->input('search');

        // Obtenez les étudiants et leurs relevés correspondants qui ont une MGP supérieure à 2 pour les niveaux 1 à 3
        $etudiant_attestation = Etudiant::join('releves', 'etudiants.matricule', '=', 'releves.etudiant')
            ->whereIn('releves.niveau', ['Licence 1', 'Licence 2', 'Licence 3'])
            ->where('releves.mgp', '>=', 2)
            ->where('etudiants.matricule', '=', $matricule)
            ->select('etudiants.*', 'releves.*')
            ->get();

        $licence3_found = false; // Variable pour vérifier si la licence 3 est trouvée

        foreach ($etudiant_attestation as $etudiant) {
            if ($etudiant->niveau == 'LICENCE 3' && $etudiant->mgp >= 2) {
                $licence3_found = true;
                break;
            }
        }

        if (!$licence3_found) {
            return redirect()->back()->with('message', "L'étudiant n'est pas autorisé.Verifiez si il/elle(s) a/ont validé(s) leurs niveau,");
        }

        // Si l'étudiant est autorisé, retourner la vue d'attestation avec les données
        return view('attestation', compact('etudiant'));


        // dd($etudiant_attestation);
    }
 
    
   
    
}
