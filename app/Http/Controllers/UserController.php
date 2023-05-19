<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Etudiant;
use App\Models\Faculte;
use App\Models\Hashe;
use App\Models\InfoReleve;
use App\Models\Note;
use App\Models\Releve;
use App\Models\Ue;
use App\Models\User;
use Illuminate\Http\Request;
use Aws\Textract\TextractClient;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Floats;
use PhpParser\Node\Expr\Cast\Double;

class UserController extends Controller
{ 
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
 

    public function endpoint(Request $request) {

        //reception de l'image depuis le frontend
        $image = $request->input('file');
        $image = str_replace('data:image/jpeg;base64,', '', $image);
        $image = str_replace('data:image/jpg;base64,', '', $image);
        $image = str_replace(' ','+',$image);
        $image = base64_decode($image);     
        $temp = tmpfile();
        fwrite($temp, $image);   
        $meta_data = stream_get_meta_data($temp);
        $target_path = $meta_data['uri'];
     //teste de la lumunosite de l'image aws traite mieux les images qui ont une lumunosite compris entre 65 70%
     $gdHandle=imagecreatefromjpeg($target_path);
     $width = imagesx($gdHandle);
     $height = imagesy($gdHandle);
     $totalBrightness = 0;

     for ($x = 0; $x < $width; $x++) {
         for ($y = 0; $y < $height; $y++) {
             $rgb = imagecolorat($gdHandle, $x, $y);

             $red = ($rgb >> 16) & 0xFF;
             $green = ($rgb >> 8) & 0xFF;
             $blue = $rgb & 0xFF;

             $totalBrightness += (max($red, $green, $blue) + min($red, $green, $blue)) / 2;
         }
     }
     imagedestroy($gdHandle);

   $lumunosite= ($totalBrightness / ($width * $height)) / 2.55;// ici on a le pourcentage de lumunosite de l'image

// teste sur la lumunosite de l'image
if($lumunosite>=65 && $lumunosite<=72){ // si la luminosite est normal donc compris entre 65% et 72% on ne fais rien
    $valeur = 0;
    $valeur_contraste = 0;
}
else if($lumunosite>72){
  $valeur=70-$lumunosite;
  $valeur_contraste=10;
}
else if($lumunosite<65){
$valeur=65-$lumunosite;
$valeur_contraste=10;
}

        
// // Création de l'image à partir du fichier initial
// $image = @imagecreatefromjpeg($target_path);

// // Appliquer le filtre de luminosité
// imagefilter($image, IMG_FILTER_BRIGHTNESS, $valeur);

// // Appliquer le filtre de contraste à l'image modifiée précédemment
// imagefilter($image, IMG_FILTER_CONTRAST, $valeur_contraste);

// // Créer un flux de sortie temporaire pour l'image modifiée
// $nom_fichier_sortie = 'image.jpg';
// imagejpeg($image, $nom_fichier_sortie);
// imagedestroy($image);


$client = new TextractClient([
    'version' => 'latest',
    'region' => 'us-east-1',
    'credentials' => [
        'key'    => 'AKIARB7V4G6A67JPFWX6',
        'secret' => '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'
    ],
    
]);
$filename = $target_path;
$file = fopen($filename, "rb");
$contents = fread($file, filesize($filename));
fclose($file);
$options = [
    'Document' => [
        'Bytes' => $contents
    ],
    'FeatureTypes' => ['FORMS','TABLES'], 
];
$result = $client->analyzeDocument($options);
$blocks = $result['Blocks'];
$tab=array();
foreach ($blocks as $key => $value) {
    if (isset($value['BlockType']) && $value['BlockType']) {
        $blockType = $value['BlockType'];
        if (isset($value['Text']) && $value['Text']) {
            $text = $value['Text'];
            if ($blockType == 'WORD') {
            array_push($tab,$text);
            } else if ($blockType == 'LINE') {
            }
        }
    }
}
  $text=implode(" ",$tab);       
// recuperation des donnees dans la dans le text avec l'utilisation des expression regulieres
preg_match('/Matricule\s*:\s*(\w+)/', $text, $matricule);
if(empty($matricule)){
  preg_match('/Matricule:\s*(\w+)/', $text, $matricule);
  if(empty($matricule)){
      preg_match('/Matricule\s*:(\w+)/', $text, $matricule);
      if(empty($matricule)){
          preg_match('/Matricule\s*(\w+)/', $text, $matricule);
      }
  }
}
preg_match('/Décision\s*(\w+)\s*NC/i', $text, $decision);
if(empty($decision)){
  preg_match('/Décision\s*:\s*(\w+)\s*NC/i', $text, $decision);
  if(empty($decision)){
      preg_match('/Décision:\s*(\w+)\s*NC/i', $text, $decision);
      if(empty($decision)){
          preg_match('/Décision\s*:(\w+)\s*NC/i', $text, $decision);
           if(empty($decision)){
          preg_match('/Décision\s*:\s*(\w+)\s*CANT/i', $text, $decision);
             if(empty($decision)){
                preg_match('/Décision\s*(\w+)\s*CANT/i', $text, $decision);
        }
      }
      }
  }
}
preg_match('/Filière\s*:\s*([^\n]+)\s*Level/i', $text, $filiere);
if(empty($filiere)){
  preg_match('/Filière:\s*([^\n]+)\s*Level/i', $text, $filiere);
  if(empty($filiere)){
      preg_match('/Filière\s*:([^\n]+)\s*Level/i', $text, $filiere);
      if(empty($filiere)){
          preg_match('/Filière\s*([^\n]+)\s*Level/i', $text, $filiere);
      }
  }

}
preg_match('/\(MGP\):\s*([\d.,]+)/', $text, $mgp);//\(MGP\):\s*([\d.,/]+)
if(empty($mgp)){
  preg_match('/\(MGP\)\s*:\s*([\d.,]+)/', $text, $mgp);
  if(empty($mgp)){
      preg_match('/\(MGP\)\s*:([\d.,]+)/', $text, $mgp);
      if(empty($mgp)){
          preg_match('/\(MGP\)\s*([\d.,]+)/', $text, $mgp);
        }
    }
}
preg_match('/Année Académique\s*:\s*([^\n]+)\s*Option/i', $text, $annee);
if(empty($annee)){
  preg_match('/Année Academique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
  if(empty($annee)){
      preg_match('/Année Académique:\s*([^\n]+)\s*Academic/', $text, $annee);
      if(empty($annee)){
          preg_match('/Année Académique\s*:([^\n]+)\s*Academic/', $text, $annee);
           if(empty($annee)){
              preg_match('/Année Académique:\s*([^\n]+)\s*Option/i', $text, $annee);
              if(empty($annee)){
                  preg_match('/Année Academique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
            }
        }
        }
    }
}
preg_match('/N°\s*:\s*([^\n]+)\s*Noms/', $text, $numero);
if(empty($numero)){
  preg_match('/N°:([^\n]+)\s*Surname/i', $text, $numero);
  if(empty($numero)){
      preg_match('/N°\s*:\s*([^\n]+)\s*Surname/', $text, $numero);
      if(empty($numero)){
          preg_match('/N°:\s*([^\n]+)\s*/', $text, $numero);
          if(empty($numero)){
              preg_match('/N°\s*:([^\n]+)\s*/', $text, $numero);
              if(empty($numero)){
                  preg_match('/N°\s*([^\n]+)\s*/', $text, $numero);
                  if(empty($numero)){
                    preg_match('/°:\s*([^\n]+)\s*/', $text, $numero);
                    if(empty($numero)){
                        preg_match('/°:([^\n]+)\s*/', $text, $numero);
                      }
                  }
                }
            }
        }
    }
}
preg_match('/Niveau\s*:\s*([^\n]+)\s*Filière/', $text, $niveau);
if(empty($niveau)){
  preg_match('/Niveau:\s*([^\n]+)\s*Filière/', $text, $niveau);
  if(empty($niveau)){
      preg_match('/Niveau\s*:([^\n]+)\s*Filière/', $text, $niveau);
  }
}
//hachage des information avec l'algorithme HMAC SHA256
$secretKey = 'auth.document';
        //    $data=([
        //    "matricule"=> $matricule[1],
        //    "decision"=> $decision[1],
        //    "filiere"=> $filiere[1],
        //    "niveau"=> $niveau[1],
        //    "mgp"=> (float)implode(".", explode(',',$mgp[1])),
        //    "annee"=> $annee[1],
        //    "numero"=> $numero[1],
        //    ]);
$data1= trim($numero[1]).trim($matricule[1]).trim($decision[1]).trim($filiere[1]).trim($niveau[1]).trim((float)implode(".", explode(',',$mgp[1]))).trim($annee[1]);
$hmac1 = hash_hmac('sha256', $data1, $secretKey);
$donnees=Releve::where(['etudiant'=>$matricule[1], 'niveau'=>$niveau[1]])->first();
$data2= trim($donnees->id_releve).trim($donnees->etudiant).trim($donnees->decision).trim($donnees->filiere).trim($donnees->niveau).trim((float)$donnees->mgp).trim($donnees->anneeAcademique);
$hmac2=hash_hmac('sha256', $data2, $secretKey);
if($hmac2==$hmac1){
    $releve=Releve::where(['etudiant'=>$matricule[1]])->get();
    $etudiant=Etudiant::where(['matricule'=>$matricule[1]])->get();
    $data=Etudiant::where(['matricule'=>$matricule[1]])->firstOrFail()->matricule;
     $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                ->where('notes.etudiant', '=', $data)
                ->where('niveaux.nom_niveau','=',$niveau[1])
                ->select('notes.*', 'ues.nom_ue','ues.credit')
                ->distinct()
                ->get();
    $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiant'=>$etudiant,'message'=>'ok']);
    return response()->json($DataSend);   
}else{
    return response()->json((['message'=>'no','text'=>$text,'data1'=>$data1,'data2'=>$data2])); 
}  
}


public function hachage(){
     $matricule='20V2412';
     $niveau='LICENCE 3';
    $secretKey = 'auth.document';
    $donnees=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
    $datas= trim($donnees->id_releve).trim($donnees->etudiant).trim($donnees->decision).trim($donnees->filiere).trim($donnees->niveau).trim((float)implode(".", explode(',',$donnees->mgp ))).trim($donnees->anneeAcademique);
     $hmac1 = hash_hmac('sha256', $datas, $secretKey);

    //  $save=Hashe::create(['hache' => $hmac1]);
    $releve=Releve::where(['id_releve'=>'09875/KMB/L2/FS/ICT/212022','etudiant'=>'19K2779'])->get();
    $etudiant=Etudiant::where(['matricule'=>$matricule])->get();
    $data=Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule;
     $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                ->where('notes.etudiant', '=', $matricule)
                ->where('niveaux.nom_niveau','=',$niveau)
                ->select('notes.*', 'ues.nom_ue','ues.credit')
                ->distinct()
                ->get();
    $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiante'=>$etudiant]);

$text="REPUBLIQUE DU CAMEROUN REPUBLIC OF CAMEROON Pala-Travall-Patrie Peace Work Fatherland UNIVERSITE DE YAOUNDE I UNIVERSITY OF YAOUNDE I FACULTE DES SCIENCES BP/P.O. Box 812 Yaoundé-CAMEROUN/Tel 222 234 496 / Email RELEVE DE NOTES/TRANSCRIPT Noms et Prénoms : EZO'O DAVID GAEL N° :00097/EDG/L2/FS/ICT/222122 Surname and Name Matricule : 20R2198 Né(e) le : 04/08/2001 A : AKOM2 Registration N° Born On At Domaine : SCIENCES MATHEMATIQUES ET INFORMATIQUES Domain : Niveau : LICENCE 2 Filière : INFORMATION AND COMMUNICATION TECHNOLOGIE FOR DEVELOPMENT Level Discipline Spécialité : Année Academique : 2021/2022 Option : Academic year : Credit May Mention Semestre Annee Decision Code IF intibule de ILCAC Tite Credit not Grade Semeator Year Decision 50,50 C 1 2022 CA ENGL203 ENGLISH 11. DCT2201 INTRODUCTION TO SOFTWART ENGINEERING c $1.00 A 1 2022 CA SOFTWARE DEVELOPMENT FOR MOBILE DE VOUS 1 77,75 A 2 2022 CA 69,00 R 1 2012 CA DATARASES SYSTEMS 3 90.25 A : 2022 CA BCT204 IN RODUCTION IN RODUCTION 10 NET 5 81.00 A 1 2022 CA 1CT206 2 2022 CA INTRODUCTION TO COMPUTER NETWORK 5 62.00 B 1C7206 SOFTWARE DEVELOPMENT IN JAVAD 5 82.75 A I 2022 CA JCTZI7 < COMPUTER ARCHITECTURE 78.00 A 2 2002 CA ICTIVU ICT210 DATABASE PROGRAMMING 5 75.00 A. 2 2022 CA SCT212 SOFTWARE INGINETRICA 3 55.75 C 1 2022 CA ICT218 ADVANCED MOUNT APPLICATION DEVELOPMENT 5 68.00 is : 2000 CA Crédit Capitalisés 60/60 (100,00 %) Liecade Moyenne Generale Pondérée (MGP) 3,39/4 CA Cantialida CANT Capitalise Nom Décision ADMIS NC New Capitalité Neie Qualiceee Mestine 10 * . Jointa A 4.99 15.79 A 3.59 11-74 a 3.3 Bles 12.11 B 3.99 69.14 2.78 AssesBire 35.59 2.31 59.54 2 Fossible 45.41 c 1.10 ..... 30.31 410 Yaoundé le Le Président du Jury Le Chef de Département The president of Jury The Head of Department NE Only one transcript shall be delivered it the owner's interest to make certified true copies exemplaire de relevé de notes Le Situfaire peut établis et faire certifier des copies conformer CopyRight GGICA";
  preg_match('/Matricule\s*:\s*(\w+)/', $text, $matricule);
  if(empty($matricule)){
    preg_match('/Matricule:\s*(\w+)/', $text, $matricule);
    if(empty($matricule)){
        preg_match('/Matricule\s*:(\w+)/', $text, $matricule);
        if(empty($matricule)){
            preg_match('/Matricule\s*(\w+)/', $text, $matricule);
        }
    }
  }
  preg_match('/Décision\s*(\w+)\s*NC/i', $text, $decision);
  if(empty($decision)){
    preg_match('/Décision\s*:\s*(\w+)\s*NC/i', $text, $decision);
    if(empty($decision)){
        preg_match('/Décision:\s*(\w+)\s*NC/i', $text, $decision);
        if(empty($decision)){
            preg_match('/Décision\s*:(\w+)\s*NC/i', $text, $decision);
             if(empty($decision)){
            preg_match('/Décision\s*:\s*(\w+)\s*CANT/i', $text, $decision);
            if(empty($decision)){
                preg_match('/Décision\s*(\w+)\s*CANT/i', $text, $decision);
            }
        }
        }
    }
  }
  preg_match('/Filière\s*:\s*([^\n]+)\s*Level/i', $text, $filiere);
  if(empty($filiere)){
    preg_match('/Filière:\s*([^\n]+)\s*Level/i', $text, $filiere);
    if(empty($filiere)){
        preg_match('/Filière\s*:([^\n]+)\s*Level/i', $text, $filiere);
        if(empty($filiere)){
            preg_match('/Filière\s*([^\n]+)\s*Level/i', $text, $filiere);
        }
    }

  }
  preg_match('/\(MGP\):\s*([\d.,]+)/', $text, $mgp);//\(MGP\):\s*([\d.,/]+)
  if(empty($mgp)){
    preg_match('/\(MGP\)\s*:\s*([\d.,]+)/', $text, $mgp);
    if(empty($mgp)){
        preg_match('/\(MGP\)\s*:([\d.,]+)/', $text, $mgp);
        if(empty($mgp)){
            preg_match('/\(MGP\)\s*([\d.,]+)/', $text, $mgp);
          }
      }
  }
  preg_match('/Année Académique\s*:\s*([^\n]+)\s*Option/i', $text, $annee);
  if(empty($annee)){
    preg_match('/Année Academique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
    if(empty($annee)){
        preg_match('/Année Académique:\s*([^\n]+)\s*Academic/', $text, $annee);
        if(empty($annee)){
            preg_match('/Année Académique\s*:([^\n]+)\s*Academic/', $text, $annee);
             if(empty($annee)){
                preg_match('/Année Académique:\s*([^\n]+)\s*Option/i', $text, $annee);
                if(empty($annee)){
                    preg_match('/Année Academique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
              }
          }
          }
      }
  }
  preg_match('/N°\s*:\s*([^\n]+)\s*Noms/', $text, $numero);
  if(empty($numero)){
    preg_match('/N°:([^\n]+)\s*Surname/i', $text, $numero);
    if(empty($numero)){
        preg_match('/N°\s*:\s*([^\n]+)\s*Surname/', $text, $numero);
        if(empty($numero)){
            preg_match('/N°:\s*([^\n]+)\s*/', $text, $numero);
            if(empty($numero)){
                preg_match('/N°\s*:([^\n]+)\s*/', $text, $numero);
                if(empty($numero)){
                    preg_match('/N°\s*([^\n]+)\s*/', $text, $numero);
                  }
              }
          }
      }
  }
  preg_match('/Niveau\s*:\s*([^\n]+)\s*Filière/', $text, $niveau);
  if(empty($niveau)){
    preg_match('/Niveau:\s*([^\n]+)\s*Filière/', $text, $niveau);
    if(empty($niveau)){
        preg_match('/Niveau\s*:([^\n]+)\s*Filière/', $text, $niveau);
    } 
  }
        
        $data=([
           "matricule"=> $matricule[1],
           "decision"=> $decision[1],
           "filiere"=> $filiere[1],
           "niveau"=> $niveau[1],
           "mgp"=> (float)implode(".", explode(',',$mgp[1])),
           "annee"=> $annee[1],
           "numero"=> $numero[1],
           ]);

    return response()->json($etudiant);
}

}
