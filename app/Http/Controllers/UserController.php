<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\InfoReleve;
use App\Models\User;
use Illuminate\Http\Request;
use Aws\Textract\TextractClient;


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
        preg_match('',$text,$numero);
        // preg_match('',$text,$nom);
        preg_match('',$text,$anne);
        preg_match('',$text,$filiere);
        preg_match('',$text,$specialite);
        preg_match('',$text,$mgp);
        preg_match('',$text,$decision);
           $data=([
           "matricule"=> $matricule[1],
           "decision"=> $decision[1],
            $text
           ]);
          return response()->json($data); 
}
//fonction qui extrait le text sur une image

  
}
