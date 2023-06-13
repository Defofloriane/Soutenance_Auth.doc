<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use Dompdf\Dompdf;
use Illuminate\Http\Response;
use Symfony\Component\DomCrawler\Crawler;


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
 
    
    public function genererPDF()
    {
        // Récupérer le contenu de la vue avec l'ID "contents"
        $contenu = view('attestation')->render();
    
        // Inclure les liens vers les fichiers CSS dans le contenu HTML
        $contenu = $this->includeCssFiles($contenu);
    
      
        // Créer une instance de Crawler et charger le contenu HTML
        $crawler = new Crawler();
        $crawler->addHtmlContent($contenu);
    
        // Récupérer le contenu de la partie avec l'ID "contents"
        $contenuContents = $crawler->filter('#contents')->html();
    
        // Créer une instance de Dompdf
        $dompdf = new Dompdf();
    
        // Charger le contenu HTML dans Dompdf
        $dompdf->loadHtml($contenuContents);
    
        // (Optionnel) Configurer les options de Dompdf
        $dompdf->set_option('isRemoteEnabled', true); // Permet le chargement de fichiers distants (CSS)
        $dompdf->set_option('isHtml5ParserEnabled', true); // Active le parseur HTML5
        $dompdf->set_option('fontDir', storage_path('fonts/')); // Chemin vers le répertoire des polices (s'il y en a)
        $dompdf->set_option('tempDir', storage_path('temp/')); // Chemin vers le répertoire temporaire de Dompdf
    
        // Rendre le contenu HTML en PDF
        $dompdf->render();
    
        // Générer le nom du fichier PDF
        $nomFichier = 'test' . time() . '.pdf';
    
        // Télécharger le fichier PDF
        return $dompdf->stream($nomFichier, ['Attachment' => true]);
    }
    
    private function includeCssFiles($contenu)
    {
        // Liste des liens vers les fichiers CSS
        $cssFiles = [
            public_path('assets/css/bootstrap.min.css'),
            public_path('assets/css/jquery-ui.min.css'),
            public_path('assets/css/icons.min.css'),
            public_path('assets/css/metisMenu.min.css'),
            public_path('../plugins/daterangepicker/daterangepicker.css'),
            public_path('assets/css/app.min.css'),
        ];
    
        // Construire les balises <link> pour chaque fichier CSS
        $cssTags = '';
        foreach ($cssFiles as $cssFile) {
            $cssTags .= '<link href="' . $cssFile . '" rel="stylesheet" type="text/css" />' . "\n";
        }
    
        // Inclure les balises <link> dans le contenu HTML
        $contenu = $cssTags . $contenu;
    
        return $contenu;
    }
    
    
    
}
