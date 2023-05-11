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

class UserController extends Controller
{ 
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
 

    public function endpoint(Request $request) {
        $image = $request->input('file');
        $image = str_replace('data:image/jpeg;base64,', '', $image);
        $image = str_replace('data:image/jpg;base64,', '', $image);
        $image = str_replace(' ','+',$image);
        $image = base64_decode($image);     
        $temp = tmpfile();
        fwrite($temp, $image);   
        $meta_data = stream_get_meta_data($temp);
        $target_path = $meta_data['uri'];
//extraction du text sur aws 

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
preg_match('/Année Académique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
if(empty($annee)){
  preg_match('/Année Academique\s*:\s*([^\n]+)\s*Academic/', $text, $annee);
  if(empty($annee)){
      preg_match('/Année Académique:\s*([^\n]+)\s*Academic/', $text, $annee);
      if(empty($annee)){
          preg_match('/Année Académique\s*:([^\n]+)\s*Academic/', $text, $annee);
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
//hachage des information avec l'algorithme HMAC SHA256
$secretKey = 'auth.document';
           $data=([
           "matricule"=> $matricule[1],
           "decision"=> $decision[1],
           "filiere"=> $filiere[1],
           "niveau"=> $niveau[1],
           "mgp"=> $mgp[1],
           "annee"=> $annee[1],
           "numero"=> $numero[1],
           ]);
$datas= trim($numero[1]).trim($matricule[1]).trim($decision[1]).trim($filiere[1]).trim($niveau[1]).trim($mgp[1]).trim($annee[1]);
$hmac1 = hash_hmac('sha256', $datas, $secretKey);
$hmac2=Hashe::where(['hache'=>$hmac1])->first();
if($hmac2){
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
    $data=(['text'=>$text]);
    return response()->json($DataSend);   
}else{
    return response()->json((['message'=>'no'])); 
}  
}

public function hachage(){
     $id_releve='00097/EDG/L2/FS/ICT/222122';
     $etudiant='19K2779';
     $decision='ADMIS';
     $filiere='INFORMATION AND COMMUNICATION TECHNOLOGIE FOR DEVELOPMENT';
     $niveau='LICENCE 2';
     $mgp='3,39';
    $anneeAcademique='2021/2022';
    $secretKey = 'auth.document';
    $datas= trim($id_releve).trim($etudiant).trim($decision).trim($filiere).trim($niveau).trim($mgp).trim($anneeAcademique);
    $hmac1 = hash_hmac('sha256', $datas, $secretKey);

    $save=Hashe::create(['hache' => $hmac1]);
    $releve=Releve::where(['etudiant'=>'19K2779'])->get();
    $etudiant=Etudiant::where(['matricule'=>'19K2779'])->get();
    $data=Etudiant::where(['matricule'=>'19K2779'])->firstOrFail()->matricule;
     $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                ->where('notes.etudiant', '=', $data)
                ->where('niveaux.nom_niveau','=','LICENCE 2')
                ->select('notes.*', 'ues.nom_ue','ues.credit')
                ->distinct()
                ->get();
    $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiante'=>$etudiant]);

$text="REPUBLIQUE DU CAMEROUN Paix -Travoil-Patrie REPUBLIC OF CAMEROON Peace - Work Fatherland UNIVERSITE DE YAOUNDE I UNIVERSITY OF YAOUNDE I FACULTE DES SCIENCES BP/P.O. Box 812 Yaoundé-CAMEROUN/Tel: 222 234 496 / Email diplomeajacsciencesyl.cm RELEVE DE NOTES/TRANSCRIPT Noms et Prénoms : EZ0'0 DAVID GAEL N° :00097/EDG/L2/FS/ICT/222122 Surname and Name Matricule : 20R2198 Né(e) le : 04/08/2001 A: AKOM 2 Registration N° Born On : At Domaine : SCIENCES MATHEMATIQUES ET INFORMATIQUES Domain : Niveau : LICENCE 2 Filière : INFORMATION AND COMMUNICATION TECHNOLOGIE FOR DEVELOPMENT Level Discipline Spécialité : Option : Année Academique : 2021/2022 Academic year Chick May Mention Semedre Annie Depain Code US Intbie do [UE/VE Tilk Credit 1100 Grade Service Year Declaion KNKH.20% ENGLISH a 3 50.50 C I 2022 CA ICT201 INTRODUCTION TO SOFTW ARE ENGINEERING 6 83,00 A 1 2022 CA ICT202 SON WARK DEVELOPMENT FOR MOHILK DEVICES 5 77.75 for 2 2022 CA 6 69.00 R 1 2022 CA KCT203 DATABASES SYSTEMS INTRODUCTION TO OPERATING SYSTEMS 1 90.25 A 2 2002 CA ICT204 1 81.00 I 2022 CA KT1205 INTRODUCTION TO PROGAMMING IN NET A INTRODUCTION TO DOMPUTERNETWORK 5 62.00 B. 2 2022 CA ICT200 SOFTWARK DEVELOPMENT INJAVAL 5 82,75 A 1 2022 CA ICT200 5 78,110 A 2 2022 CA ICTION COMPUTER ARCHITEC. URE 5 75,00 A- 2 2022 CA K71210 DATABASE PROGRAMMING 5 55.75 Ct 1 2022 CA 571217 SOFTWARE ENGINEERING 5 68,00 5 2 2022 CA ICT216 ADVANCED MOBILE APPLICATION DEVELOPMENT Crédit Capitalisés 60/60 (100,00%) Ligende Moyenne Generale Pondérée (MGP) 3,39/4 CA Capitalist Décision ADMIS CANT Capitalize N Transferable NC: Non Capitalisé Note cit Qualitéde Meation 100 points A 4.0P 75-79 A 1.79 B. 3.30 45.69 , 3.00 . 1.70 Co 1.30 c 1.00 45-49 C. 1.70 in 1.34 Yaoundé, le Le Chef de Département The Head of Department Le Président du Jury The president of Jury";
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
  preg_match('/Année Académique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
  if(empty($annee)){
    preg_match('/Année Academique\s*:\s*([^\n]+)\s*Academic/', $text, $annee);
    if(empty($annee)){
        preg_match('/Année Académique:\s*([^\n]+)\s*Academic/', $text, $annee);
        if(empty($annee)){
            preg_match('/Année Académique\s*:([^\n]+)\s*Academic/', $text, $annee);
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
           "mgp"=> $mgp[1],
           "annee"=> $annee[1],
           "numero"=> $numero[1],
           ]);

    return response()->json($data);
}

}
