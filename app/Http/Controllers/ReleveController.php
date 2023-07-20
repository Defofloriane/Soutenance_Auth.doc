<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Evaluation;
use App\Models\Filiere;
use App\Models\Note;
use App\Models\Ue;
use App\Models\Releve;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Laravel\SerializableClosure\Signers\Hmac;
use LengthException;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ReleveController extends Controller
{
   public function reveleEtudiant()
   {
      return View('details');
      //    return response()->json($notes);
   }

   public function get_ue_credit(Request $request)
   {
      $niveau = $request->input('niveau');
      $anneeAcademique = $request->input('anneeAcamdemique');
      $filiere = $request->input('filiere');
      // Recherche des UE correspondantes au niveau
      $request->session()->put('niveau', $niveau);
      $request->session()->put('filiere', $filiere);
      $request->session()->put('anneeAcademique', $anneeAcademique);
      $resultats = Ue::select('id_ue', 'credit','nom_ue')
         ->where('niveau', '=', $niveau)
         ->get();
         $listeMatiere = Ue::where([
            'niveau' => $niveau,
            'filiere' => $filiere,
         ])->get();
       return view('add_releve',compact('resultats','listeMatiere'));

      // return response()->json(['code_ue' => $ue->nom_ue, 'credit' => $ue->credit]);
   }
   public function view_add_releve()
   {
      $listeMatiere=null;
      return view('add_releve',compact('listeMatiere'));
   }
   public function add_releve(Request $request)
   {
      //  dd( $request->all());
      
      //recupere ldes informations sur le blade
      $niveau = $request->session()->get('niveau');
      if ($niveau == 'L1') {
         $id_niv = "LICENCE 1";
      }elseif($niveau == 'L2'){
         $id_niv = "LICENCE 2";
      }else{
         $id_niv = "LICENCE 3";
      }
      $anneeAcademique = $request->session()->get('anneeAcademique');
      $id_anne = str_replace('/', '', $anneeAcademique);
      $firstName = $request->input('firstName');
      $lastName = $request->input('lastName');
      $matricule = $request->input('matricule');
      $birthDay = $request->input('birthDay'); //date de naissance
      $formattedBirthDay = date('Y-m-d', strtotime($birthDay));
      
// Supprimer les caractères non numériques de la date de naissance
$birthDayDigits = preg_replace('/[^0-9]/', '', $birthDay);

// Calculer la somme des chiffres de la date de naissance
$sum = array_sum(str_split($birthDayDigits));

      $placeBirth = $request->input('placeBirth'); //lieu de naissance

      $notes = $request->input('notes');
    

      // Créer une instance d'Etudiant avec les données
      $etudiant = new Etudiant();
      $etudiant->matricule = $matricule;
      $etudiant->nom = $firstName;
      $etudiant->prenom = $lastName;
      $etudiant->date_naissance = $formattedBirthDay;
      $etudiant->lieu_naissance = $placeBirth;
      // Enregistrer l'étudiant dans la base de données
      $etudiant->save();
      

      // Enregistrer l'UE dans la table "ues"
      // Récupérer les valeurs des UE du formulaire
      $ues = $request->input('notes');

      // Enregistrer chaque UE dans la table "ues"
      foreach ($ues as $ueId => $ueData) {
         // Vérifier si l'UE existe déjà
         $existingUe = Ue::where('id_ue', $ueId)->first();
         if ($existingUe) {
             continue; // Passer à l'itération suivante du boucle
         }
     
         $ue = new Ue();
         $ue->id_ue = $ueId; // code ue
         $nomUe = Ue::where('id_ue', $ueId)->value('nom_ue');
         $ue->nom_ue = $nomUe;
         $ue->credit = $ueData['credit'];
         $ue->niveau = $niveau;
         $ue->save();
     }
      $creditTotal = 0;
      $quantitePoints = 0;
      $mgp = 0;
      $totalQt = 0;
      $decision_releve = "";
      

      // Calcul de la somme des notes
      foreach ($notes as $ueId => $note) {
         $note_cc = $note['note_cc'];
         $note_tp = $note['note_tp'];
         $note_sn = $note['note_sn'];
         $note_total = $note_cc + $note_tp + $note_sn;

        

         // Enregistrement de la note dans la base de données
         $notes = new Note();
         $notes->etudiant = $matricule;
         $notes->ue = $ueId;
         $notes->note = $note_total;
         $notes->annee = 2022;
         // dd($note_total);
         // Déterminez la décision et la mention en fonction de la note totale
         // Par exemple, si la note totale est supérieure ou égale à un certain seuil, vous pouvez définir la décision et la mention comme suit :
         if ($note_total >= 80) {
            $notes->decision = 'CA';
            $notes->mention = 'A';
            $quantitePoints = 4;
         } elseif ($note_total >= 75 && $note_total < 80) {
            $notes->decision = 'CA';
            $notes->mention = 'A-';
            $quantitePoints = 3.70;
         } elseif ($note_total >= 70 && $note_total < 75) {
            $notes->decision = 'CA';
            $notes->mention = 'B+';
            $quantitePoints = 3.30;
         } elseif ($note_total >= 65 && $note_total < 70) {
            $notes->decision = 'CA';
            $notes->mention = 'B';
            $quantitePoints = 3;
         } elseif ($note_total >= 60 && $note_total < 70) {
            $notes->decision = 'CA';
            $notes->mention = 'B-';
            $quantitePoints = 2.70;
         } elseif ($note_total >= 55 && $note_total < 60) {
            $notes->decision = 'CA';
            $notes->mention = 'C+';
            $quantitePoints =2.30;
         } elseif ($note_total >= 50 && $note_total < 55) {
            $notes->decision = 'CA';
            $notes->mention = 'C';
            $quantitePoints =2;
         } elseif ($note_total >= 45 && $note_total < 50) {
            $notes->decision = 'CANT';
            $notes->mention = 'C-';
            $quantitePoints =1.70;
         } elseif ($note_total >= 40 && $note_total < 45) {
            $notes->decision = 'CANT';
            $notes->mention = 'D+';
            $quantitePoints =1.30;
         } elseif ($note_total >= 35 && $note_total < 40) {
            $notes->decision = 'CANT';
            $notes->mention = 'D';
            $quantitePoints =1;
         } elseif ($note_total >= 30 && $note_total < 35) {
            $notes->decision = 'Echec';
            $notes->mention = 'E';
            $quantitePoints =0;
         } else {
            $notes->decision = 'Echec';
            $notes->mention = 'F';
            $quantitePoints =0;
         }
         $notes->semestre = $note['semestre'];
         // dd($notes);

         $notes->save();
         // dd($notes);
         //mention = A;A+;A-;
         //B;B-;B+,
         //C;C-;C+
         //D;D-;D+
         //decision,CA;CANT;E,F
         $ue = Ue::find($ueId);
         
         $credit = $ue->credit;
         $creditTotal += $credit;
         $totalQt += $quantitePoints * $credit;
         
      }
      $mgp = $totalQt / $creditTotal;
      
      if ($mgp >= 2) {
         $decision_releve = "ADMIS";
      }else{
         $decision_releve = "Echec";
      }

      $nomSplitted = explode(' ', $firstName);
      $initial1 = '';
      foreach ($nomSplitted as $part) {
          $initial1 = strtoupper(substr($part, 0, 1));
      }

      $nomSplitted = explode(' ', $lastName);
      $initial2 = '';
      foreach ($nomSplitted as $part) {
          $initial2 = strtoupper(substr($part, 0, 1));
      }
      $initia2 = $initial1.$initial2;

      $formatted_mgp = number_format($mgp, 2);


      // Enregistrement du relevé dans la base de données
      $releve = new Releve();
       $id_new_rel = "000$sum/$initia2/$niveau/FS/ICT/$id_anne"; 
      $releve->id_releve = $id_new_rel;// Générez un ID unique pour chaque relevé
      $releve->etudiant = $matricule;
      $releve->decision = $decision_releve; // Définissez la décision appropriée
      $releve->filiere = "INFORMATION AND COMMUNICATION TECHNOLOGIE"; // Définissez la filière appropriée
      $releve->niveau = $id_niv;
      $releve->mgp = $formatted_mgp;
      $releve->anneeAcademique = $anneeAcademique;
      $releve->save();

      // Message de succès
       $request->session()->put('success', 'Le relevé a été ajouté avec succès.');
       $secretKey = 'auth.document';//cle secrete
       $releve = Releve::where('id_releve', $id_new_rel)->firstOrFail();
       $donnees= Releve::where(['id_releve'=>$id_new_rel,'etudiant'=>$matricule,'niveau'=>$niveau])->first();
       $data= trim($id_new_rel).trim($matricule).trim($decision_releve).trim("INFORMATION AND COMMUNICATION TECHNOLOGIE").trim($id_niv).trim((float)$formatted_mgp).trim($anneeAcademique);
      $hmac=hash_hmac('sha256', $data, $secretKey);
      $hmacInfo=$hmac.' '.$matricule.' '.$id_niv;

       $etudiant = Etudiant::where('matricule', $releve->etudiant)->first();
       $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
          ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
          ->where('notes.etudiant', '=', $releve->etudiant)
          ->where('niveaux.nom_niveau', '=',$id_niv)
          ->select('notes.*', 'ues.nom_ue', 'ues.credit')
          ->distinct()
          ->get();
       //  return $etudiant;
      //  dd($etudiant,$id_niv,$releve,$notes);
        
       // Passez les données à la vue de détails
       return view("details", compact('releve', 'etudiant', 'notes','hmacInfo'));
   }

   public function view_etudiant()
   {
      $data = Etudiant::where(['matricule' => '20R2198'])->firstOrFail()->matricule;
      $etudiants = Etudiant::all();
      $etudiant = Etudiant::where(['matricule' => '20R2198'])->first();
      $donneSuplemntaire = [];
      $releves = Releve::all();
      $releve = Releve::where(['etudiant' => '20R2198'])->first();
      $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
         ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
         ->where('notes.etudiant', '=', $data)
         ->where('niveaux.nom_niveau', '=', 'LICENCE 2')
         ->select('notes.*', 'ues.nom_ue')
         ->distinct()
         ->get();
      // $data = [$releves, $etudiant];
      // return json_encode($etudiant);
      return view('view_etudiant', compact('releves', 'etudiants', 'etudiant'));
   }
   public function search(Request $request)
   {
      $etudiants = Etudiant::all();
      $releves = Releve::all();
      $search = $request->input('search');
      $niveau = $request->input('niveau');

      $etudiant = Etudiant::where(function ($query) use ($search) {
         $query->where('matricule', $search)
            ->orWhere('nom', 'like', '%' . $search . '%');
      })->first();

      if (!$etudiant) {
         $message = "Aucun étudiant trouvé pour le matricule $search";
         return view('view_etudiant', ['message' => $message], compact('releves', 'etudiants', 'etudiant'));
      }
      $nivau_rel = Releve::where(function ($query) use ($niveau) {
         $query->where('niveau', $niveau);
      })->first();

      $releve = Releve::where('etudiant', $etudiant->matricule)
         ->where('niveau', $nivau_rel->niveau)
         ->first();
      if (!$releve) {
         $message = "Aucun relevé trouvé pour l'étudiant $etudiant->nom";
         return view('view_etudiant', ['message' => $message], compact('releves', 'etudiants', 'etudiant'));
      }
      $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
         ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
         ->where('notes.etudiant', '=', $search)
         ->where('niveaux.nom_niveau', '=', $niveau)
         ->select('notes.*', 'ues.nom_ue', 'ues.credit')
         ->distinct()
         ->get();
      //  $notes = Note::where('etudiant', $releve->etudiant)->get();
      return view('details', ['etudiant' => $etudiant, 'notes' => $notes, 'releve' => $releve]);
   }
   public function afficher()
   {
      //  $releve = Releve::find($id);
      return view('details');
   }
   public function show(Request $request)
   {
      //  dd($id);
      // Récupérez les données de la base de données en fonction de l'ID
      //  $details = Releve::find($id);
      // $id_releve = request('id_releve');
      $id_releve=$request->id_releve;
      $matricule=$request->matricule;
      $niveau=$request->niveau;
      // dd($request);
      $da=$request->data;
      $releve = Releve::where(['id_releve'=>$id_releve,'etudiant'=>$matricule,'niveau'=>$niveau])->first();
      $donnees= Releve::where(['id_releve'=>$id_releve,'etudiant'=>$matricule,'niveau'=>$niveau])->first();
      $dataCont= trim($donnees->id_releve).'?'.trim($donnees->etudiant).'?'.trim($donnees->decision).'?'.trim($donnees->filiere).'?'.trim($donnees->niveau).'?'.trim((float)$donnees->mgp).'?'.trim($donnees->anneeAcademique);
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
      $etudiant = Etudiant::where('matricule', $releve->etudiant)->first();
      $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
         ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
         ->where('notes.etudiant', '=', $releve->etudiant)
         ->where('niveaux.nom_niveau', '=', $releve->niveau)
         ->select('notes.*', 'ues.nom_ue', 'ues.credit')
         ->distinct()
         ->get();
      //  return $etudiant;

      // Passez les données à la vue de détails
      return view("details", compact('releve', 'etudiant', 'notes','hmacInfo'));
      //  return  $encodedData;
   }
  
   public function import_excel(Request $request)
    {
      $niveau = $request->session()->get('niveau');
      $filiere = $request->session()->get('filiere');
      $anneeAcademique = $request->session()->get('anneeAcademique');
      $chooseMat = $request->input('radioschoose');
      $matiere = $request->input('matiere');
      $semestre = $request->input('semestre');
      $evaluationtype=$request->input('evaluation');
      // dd($matiere ,$niveau , $filiere, $anneeAcademique, $chooseMat, $semestre,$evaluationtype);

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
              $etudiant = Etudiant::where(['matricule'=> $matricule])->first();             
              $evaluation = new Evaluation();
              $evaluation->type_evaluation = $evaluationtype;
              if($evaluationtype=='CC' && $chooseMat=='OUI'){
              $evaluation->noteSur=20;
              }
              elseif($evaluationtype=='TP' && $chooseMat=='OUI'){
               $evaluation->noteSur=40;
              }
              elseif($evaluationtype=='SN' && $chooseMat=='OUI'){
               $evaluation->noteSur=40;
              }
              elseif($evaluationtype=='CC' && $chooseMat=='NON'){
               $evaluation->noteSur=30;
               }
               elseif($evaluationtype=='SN' && $chooseMat=='NON'){
                $evaluation->noteSur=70;
               }
              $evaluation->etudiant=$etudiant->matricule;
              $evaluation->ue=$matiere;
              $evaluation->semestre=$semestre;
              $evaluation->note_evaluation=$note;
              $evaluation->save();       

              $noteTp=Evaluation::where(['etudiant'=>$etudiant->matricule,'type_evaluation'=>'TP','ue'=>$matiere])->first();
              $noteCC=Evaluation::where(['etudiant'=>$etudiant->matricule,'type_evaluation'=>'CC','ue'=>$matiere])->first();
              $noteSN=Evaluation::where(['etudiant'=>$etudiant->matricule,'type_evaluation'=>'SN','ue'=>$matiere])->first();
              $note_total=0;
              if($noteCC &&  $noteCC->noteSur==30 && $noteSN ){
               $note_total=$noteCC->note_evaluation+$noteSN->note_evaluation;
              }   
              elseif($noteCC &&  $noteCC->noteSur==20 && $noteSN && $noteTp ){
               $note_total=$noteCC->note_evaluation+$noteSN->note_evaluation+$noteTp->note_evaluation;
              }   
               
            //   print_r($note_total);
               // Enregistrement de la note dans la base de données
         $notes = new Note();
         $notes->etudiant = $matricule;
         $notes->ue = $matiere;
         $notes->note = $note_total;
         // dd($note_total);
         // Déterminez la décision et la mention en fonction de la note totale
         // Par exemple, si la note totale est supérieure ou égale à un certain seuil, vous pouvez définir la décision et la mention comme suit :
         if ($note_total >= 80) {
            $notes->decision = 'CA';
            $notes->mention = 'A';
            $quantitePoints = 4;
         } elseif ($note_total >= 75 && $note_total < 80) {
            $notes->decision = 'CA';
            $notes->mention = 'A-';
            $quantitePoints = 3.70;
         } elseif ($note_total >= 70 && $note_total < 75) {
            $notes->decision = 'CA';
            $notes->mention = 'B+';
            $quantitePoints = 3.30;
         } elseif ($note_total >= 65 && $note_total < 70) {
            $notes->decision = 'CA';
            $notes->mention = 'B';
            $quantitePoints = 3;
         } elseif ($note_total >= 60 && $note_total < 70) {
            $notes->decision = 'CA';
            $notes->mention = 'B-';
            $quantitePoints = 2.70;
         } elseif ($note_total >= 55 && $note_total < 60) {
            $notes->decision = 'CA';
            $notes->mention = 'C+';
            $quantitePoints =2.30;
         } elseif ($note_total >= 50 && $note_total < 55) {
            $notes->decision = 'CA';
            $notes->mention = 'C';
            $quantitePoints =2;
         } elseif ($note_total >= 45 && $note_total < 50) {
            $notes->decision = 'CANT';
            $notes->mention = 'C-';
            $quantitePoints =1.70;
         } elseif ($note_total >= 40 && $note_total < 45) {
            $notes->decision = 'CANT';
            $notes->mention = 'D+';
            $quantitePoints =1.30;
         } elseif ($note_total >= 35 && $note_total < 40) {
            $notes->decision = 'CANT';
            $notes->mention = 'D';
            $quantitePoints =1;
         } elseif ($note_total >= 30 && $note_total < 35) {
            $notes->decision = 'Echec';
            $notes->mention = 'E';
            $quantitePoints =0;
         } else {
            $notes->decision = 'Echec';
            $notes->mention = 'F';
            $quantitePoints =0;
         }
         $notes->semestre = $semestre;
         // dd($notes);
         $notes->annee=2022;

          $notes->save();
                      
            }

         }
        // Redirigez ou affichez une réponse appropriée après l'importation
        // par exemple :
        // return redirect()->back()->with('success', 'Le fichier Excel a été importé avec succès.');
         $resultats=null;$listeMatiere=null;
         return view('add_releve',compact('resultats','listeMatiere'));
      }

}


