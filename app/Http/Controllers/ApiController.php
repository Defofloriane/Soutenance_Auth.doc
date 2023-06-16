<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Releve;
use App\Models\User;
use Aws\Textract\TextractClient;
use Illuminate\Http\Request;
class ApiController extends Controller
{
    public function decode(Request $request){

        $DataSend=(['message'=>'no']); 
        $data=$request->all();
        if(array_key_exists('hache',$data) && array_key_exists('matricule',$data)&& array_key_exists('niveau',$data)){
        $h1=$data['hache'];
        $matricule=$data['matricule'];
        $niveau=$data['niveau'];
         $donnees=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
         if($donnees){
         $datas= trim($donnees->id_releve).trim($donnees->etudiant).trim($donnees->decision).trim($donnees->filiere).trim($donnees->niveau).trim($donnees->mgp).trim($donnees->anneeAcademique);
         $secretKey = 'auth.document';
         $h2 = hash_hmac('sha256', $datas, $secretKey);

         if($h1==$h2){
            $releve=Releve::where(['etudiant'=>$matricule, 'niveau'=>$niveau])->first();
            $etudiant=Etudiant::where(['matricule'=>$matricule])->first();
            $data=Etudiant::where(['matricule'=>$matricule])->firstOrFail()->matricule;
             $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                        ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                        ->where('notes.etudiant', '=', $data)
                        ->where('niveaux.nom_niveau','=',$niveau)
                        ->select('notes.*', 'ues.nom_ue','ues.credit')
                        ->distinct()
                        ->get();
            $DataSend=(['releve'=>$releve,'notes'=>$notes,'etudiant'=>$etudiant,'message'=>'ok']);
         }
         }    
       return response()->json($DataSend);
    }
     else{
        $DataSend=(['message'=>'no document']);
        return response()->json($DataSend);
   }
  
}
public function getUser(Request $request){
   $DataSend=(['message'=>'no']); 
   $data=$request->all();
   $email=$data['email'];
   $password=$data['password'];
   $user=User::where(['email'=>$email,'password'=>$password])->first();

   if($user){
      $DataSend=(['user'=>$user,'message'=>'ok']);
   }
   return response()->json($DataSend);
}

public function store(Request $request){
   $image = $request->input('file');
   $image = str_replace('data:image/jpeg;base64,', '', $image);
   $image = str_replace('data:image/jpg;base64,', '', $image);
   $image = str_replace(' ','+',$image);
   $image = base64_decode($image); 
   $temp = tmpfile();
   fwrite($temp, $image);   
   $meta_data = stream_get_meta_data($temp);
   $target_path = $meta_data['uri'];
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
  if(!empty($niveau) &&!empty($matricule) &&!empty($annee) &&!empty($numero) &&!empty($decision) &&!empty($mgp) &&!empty($filiere)){
   $extension = 'jpeg';
   $user_id = trim($matricule[1]).'_'.trim($niveau[1]);
   $timestamp = time();
   $filename = $user_id . '_' . $timestamp . '.' . $extension;
   // on verifie si c'est un releve de note
   if(file_put_contents(public_path('images/releves/' . $filename), $image)){
      return response()->json(['statut'=>200]);
   }
  }
  else{
   return response()->json(['statut'=>400]);
  }
  }

}
