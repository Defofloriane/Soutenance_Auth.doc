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
$datas= trim($numero[1]).trim($matricule[1]).trim($decision[1]).trim($filiere[1]).trim($niveau[1]).trim($mgp[1]).trim($annee[1]);
$hmac1 = hash_hmac('sha256', $datas, $secretKey);
$hmac2=Hashe::where(['hache'=>$hmac1])->first();
// $info=array();
if($hmac2){
    $etudiant=Etudiant::where(['etudiant'=>$matricule[1]])->get();
    $ue=Ue::where(['ue'=>'']);
    return response()->json($data);   
}
else{
    $data=null;
    return response()->json($data);
}
     
}

public function hachage(){
    $hachage=Hashe::all();
     $id_releve='00097/EDG/L2/FS/ICT/222122';
     $etudiant='20R2198';
     $decision='ADMIS';
     $filiere='INFORMATION AND COMMUNICATION TECHNOLOGY FOR DEVELOPMENT';
     $niveau='LICENCE 2';
     $mgp='3,39';
    $anneeAcademique='2021/2022';
    $secretKey = 'auth.document';
    $datas= trim($id_releve).trim($etudiant).trim($decision).trim($filiere).trim($niveau).trim($mgp).trim($anneeAcademique);
    $hmac1 = hash_hmac('sha256', $datas, $secretKey);
    //  $save=Hashe::create(['hache' => $hmac1]);
    // $faculte_id = Faculte::where(['id_faculte'=>'fs'])->firstOrFail()->id_faculte;
    // $depMath=Departement::where(['id_departement'=>'depMath'])->firstOrFail()->id_departement;
    // $ue=Ue::where(['id_ue'=>'ICT216'])->firstOrFail()->id_ue;
     $data=Etudiant::where(['matricule'=>'19K2779'])->firstOrFail()->matricule;
     $notes = Note::join('ues', 'notes.ue', '=', 'ues.id_ue')
                ->join('niveaux', 'ues.niveau', '=', 'niveaux.id_niveau')
                ->where('notes.etudiant', '=', $data)
                ->select('notes.*', 'ues.nom_ue')
                ->get();
    return response()->json($notes);
}

}
