<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Hashe;
use App\Models\InfoReleve;
use App\Models\Releve;
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
        'key'    => 'AKIAZDHOG23RVZA73SMG',
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
//recuperation des donnees dans la dan le text
        preg_match('/Matricule\s*:\s*(\w+)/', $text, $matricule);
        preg_match('/Décision\s*(\w+)/', $text, $decision);
        preg_match('/Filière\s*:\s*([^\n]+)\s*Level/i', $text, $filiere);
        preg_match('/\(MGP\):\s*([\d.,]+)/', $text, $mgp);//\(MGP\):\s*([\d.,/]+)
        preg_match('/Année Académique\s*:\s*([^\n]+)\s*Option/', $text, $annee);
        preg_match('/N°:([^\n]+)\s*Noms/', $text, $numero);
        preg_match('/Niveau\s*:\s*([^\n]+)\s*Filière/', $text, $niveau);
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
$datas= $numero[1].' '.$matricule[1].' '.$decision[1].' '.$filiere[1].' '.$niveau[1].' '.$mgp[1].' '.$annee[1];
// $hmac1 = hash_hmac('sha256', $data, $secretKey);
// $hmac2=Hashe::where(['hache'=>$hmac1])->first();
// if($hmac2){
//     $info=[
//         "data"=>$data,
//        ];
// }
// else{
//     $info=[
//         "data"=>null,
//        ];
// }
return response()->json($data);      
}

public function hachage(){
    $hachage=Hashe::all();
     $id_releve='00097/EDG/L2/FS/ICT/222122';
     $etudiant='20R2198';
     $decision='ADMIS';
     $filiere='INFORMATION AND COMMUNICATION FOR DEVELOPMENT';
     $niveau='LiCENCE 2';
     $mgp=3.39;
    $anneeAcademique='2021/2022';
    $secretKey = 'auth.document';
    $data= $id_releve.' '.$etudiant.' '.$decision.' '.$filiere.' '.$niveau.' '.$mgp.' '.$anneeAcademique;
    $hmac1 = hash_hmac('sha256', $data, $secretKey);
    // $save=Hashe::create(['hache' => $hmac1]);
    return response()->json($hmac1);
}

}
