<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use LengthException;
use PhpOffice\PhpSpreadsheet\IOFactory;


class ExcelController extends Controller
{
  
    public function import_excel(Request $request)
    {
        $file = $request->file('excel_file');

        // Vérifiez si un fichier a été téléchargé
        if ($file) {
            // Définissez le chemin de destination pour le fichier
            // $destinationPath = storage_path('app/excel');
        
            // // Déplacez le fichier vers le dossier de destination
            // $file->move($destinationPath, $file->getClientOriginalName());
        
            // // Obtenez le chemin complet du fichier
            // $filePath = $destinationPath . '/' . $file->getClientOriginalName();
        
            // Utilisez la bibliothèque PhpSpreadsheet pour charger le fichier Excel
            $spreadsheet = IOFactory::load($file);
        
            // Obtenez la feuille active du fichier Excel
            $sheet = $spreadsheet->getActiveSheet();
        
            // Parcourez les lignes de la feuille
          // ...
          $isFirstRow = true;

          foreach ($sheet->getRowIterator() as $row) {
              if ($isFirstRow) {
                  $isFirstRow = false;
                  continue; // Ignorer la première ligne (en-têtes des colonnes)
              }
          
              // Obtenez les valeurs de chaque cellule de la ligne
              $cellIterator = $row->getCellIterator();
              $cellIterator->setIterateOnlyExistingCells(false);
          
              $studentData = [];
          
              foreach ($cellIterator as $cell) {
                  $studentData[] = $cell->getValue();
              }
             
              $matricule = $studentData[0];
              $note = $studentData[1];
            //   $evaluation = new Evaluation;
            //   $evaluation->type_evaluation = 'cc';
            //   $evaluation->etudiant=Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule;
            //   $evaluation->ue='ict302';
            //   $evaluation->semestre='1';
            //   $evaluation->note_evaluation=$note;
            //   $evaluation->save();
            //   $matricule = $studentData[2];
            //   $niveau = $studentData[3];
              
            //   $matiere1Credits = $studentData[4];
            //   $matiere1sn = $studentData[5];
            //   $matiere1tp = $studentData[6];

          
              // Afficher les informations de l'étudiant
            //   echo "Numéro : $numero<br>";
            //   echo "Noms et prénoms : $nomsEtPrenoms<br>";
            //   echo "Matricule : $matricule<br>";
            //   echo "Niveau : $niveau<br>";
            //   echo "Crédits ENGL203CC : $matiere1Credits<br>";
            //   echo "Crédits engl203SN : $matiere1sn<br>";
            //   echo "Crédits engl203TP : $matiere1tp<br>";
          
              // et ainsi de suite pour les autres colonnes
          
              // ...
            //   print_r($evaluation);
          }
          
              
// ...

         }
        // Redirigez ou affichez une réponse appropriée après l'importation
        // par exemple :
        // return redirect()->back()->with('success', 'Le fichier Excel a été importé avec succès.');
    }
}


