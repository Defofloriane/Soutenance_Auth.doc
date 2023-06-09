<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Etudiant;

class AttestationController extends Controller
{
    public function attestation()
    {
        return View('attestation');
    }
    public function view_attestation()
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
        // Logique pour récupérer l'attestation correspondante à l'étudiant

        return view('attestation', compact('etudiant'));
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
