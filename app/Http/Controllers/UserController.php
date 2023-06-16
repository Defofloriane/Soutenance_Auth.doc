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
use GuzzleHttp\Client;
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
if($lumunosite>=20 && $lumunosite<=90){ // si la luminosite est normal donc compris entre 65% et 72% on ne fais rien

    $client = new TextractClient([
        'version' => 'latest',
        'region' => 'eu-west-3',
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
    if(!empty($niveau) &&!empty($matricule) &&!empty($annee) &&!empty($numero) &&!empty($decision) &&!empty($mgp) &&!empty($filiere)){// si toutes les donnees ont ete recuperer
    $data1= trim($numero[1]).trim($matricule[1]).trim($decision[1]).trim($filiere[1]).trim($niveau[1]).trim((float)implode(".", explode(',',$mgp[1]))).trim($annee[1]);
    $secretKey = 'auth.document';
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
        
        $extension = 'jpeg';
        $user_id = trim($matricule[1]).'_'.trim($niveau[1]);
        $timestamp = time();
        $filename1 = $user_id . '_' . $timestamp . '.' . $extension;
       
        $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiant'=>$etudiant,'message'=>'ok']);
        return response()->json($DataSend);   
    }else{
        $message='no';
        return response()->json((['message'=>$message,'text'=>$text,'data1'=>$data1,'data2'=>$data2])); 
    }  

   
  
}
else{
    return response()->json((['message'=>'pas']));
}

}

else if($lumunosite>90){
    return response()->json((['message'=>'ls','luminosite'=> $lumunosite]));
}
else if($lumunosite<20){
    return response()->json((['message'=>'li','luminosite'=> $lumunosite]));
}

}



}
