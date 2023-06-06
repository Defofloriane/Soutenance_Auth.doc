<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCPDF;

class GeneratePDFController extends Controller
{
    public function telechargerPDF(Request $request)
    {
        require_once(base_path('vendor/tecnickcom/tcpdf/tcpdf.php'));

        // Récupérez le contenu HTML envoyé depuis JavaScript
        $content = $request->input('content');

        // Créez une nouvelle instance de TCPDF
        $pdf = new \TCPDF();

        // Ajoutez une page
        $pdf->AddPage();

        // Convertissez le contenu HTML en PDF
        $pdf->writeHTML($content, true, false, true, false, '');

        // Générez le nom de fichier PDF unique
        $filename = 'output_' . time() . '.pdf';

        // Générez le PDF dans une chaîne
        $pdfData = $pdf->Output('', 'S');
        return response()->json(['file' => $filename]);

        // Retournez le PDF en tant que réponse HTTP avec le type MIME approprié
        return response($pdfData)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $filename . '"');
    }

    
    }


