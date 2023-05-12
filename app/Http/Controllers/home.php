<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\AuthenticationException;
use GuzzleHttp\Exception\RequestException;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Imagick;
use GuzzleHttp\Client;
use  Illuminate\Http\Response;
use thiagoalessio\TesseractOCR\ImageNotFoundException;
use Exception;
use Intervention\Image\ImageManagerStatic as Image;
use PhpParser\Node\Stmt\Return_;
use Aws\Textract\TextractClient;
use App\Models\Departement;
use App\Models\Etudiant;
use App\Models\Faculte;
use App\Models\Hashe;
use App\Models\InfoReleve;
use App\Models\Note;
use App\Models\Releve;
use App\Models\Ue;
use Illuminate\Support\Facades\Hash;


class home extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function details()
    {
        return view('details');
    }
    public function forgot_password()
    {
        return view('forgot-password');
    }

    public function signup()
    {
        return view('signup');
    }
    public function view_admin(){
        $admins = User::all();
        return View('view_admin',compact('admins'));
     }
     public function admin_update(Request $request, $id)
     {
         // Validation des données du formulaire
         $validatedData = $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:users,email,'.$id,
             // Ajouter les autres champs de saisie ici
         ]);
     
         // Récupération de l'administrateur à modifier
         $admin = User::findOrFail($id);
     
         // Mise à jour des données de l'administrateur
         $admin->name = $validatedData['name'];
         $admin->email = $validatedData['email'];
         // Modifier les autres champs de saisie ici
     
         // Sauvegarde des modifications
         $admin->save();
     
         // Ajout du message de succès à la session
         Session::flash('success', 'Admin updated successfully');
     
         // Redirection vers la page d'administration des utilisateurs
         return redirect()->route('view_admin');
     }
     
     public function admin_delete($id)
     {
         // Récupération de l'administrateur à supprimer
         $admin = User::findOrFail($id);
     
         // Suppression de l'administrateur de la base de données
         $admin->delete();
     
         // Redirection vers la page d'administration des utilisateurs
          return redirect()->route('view_admin')->with('danger', 'Admin deleted successfully');
     }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        // if ($request->fails()) {
        //     return redirect('signup')
        //         ->withErrors($request)
        //         ->withInput();
        // }

        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password']
        // 'password' => Hash::make($data['password'])
      ]);
    }    
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        return view('welcome');
    }
    public function auth_doc()
    { 
        $name = ''; // valeur initiale
        return view('auth_doc', compact('name'));
    }
    public function customLogin(Request $request)
    {

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        
        $credentials = $request->only('email','password');
        $email=$request->input('email');
        $password=$request->input('password');
        echo($password);
       $user = User::where([
            'email' => $request->email,
            'password' => $request->password,
            // 'password' => Hash::make($data['password'])
          ])->first();
        if ( $user ) {
          print("erreur");
             return redirect("auth_doc")->withSuccess('Login details are  valid');
            echo("good");
            echo( $request->id);
        }else{
          print("erreur");
            echo("false");
            Alert::error('Connexion a échouée');
             return redirect("login")->withSuccess('Login details are not valid');
        }

    
     
    }
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function webcam_open()
    {
        return view('auth_doc');
    }
    function ocr()
    {

        $client = new Client();
        $response = $client->request('POST', 'https://api.ocr.space/parse/image', [
            'headers' => [
                'apikey' => 'K83600417488957'
            ],
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen('D:\projet\Auth_doc_projet_sout\Auth_document\storage\app\public\medias/recu.pdf', 'r')
                ]
            ]
        ]);

        $text = json_decode($response->getBody(), true)['ParsedResults'][0]['ParsedText'];
        echo $text;
    }
    public function store(Request $request)
    {


        $img = $request->image;
        $folderPath = storage_path('app/public/images');

        // Séparez la chaîne de données en base64 pour récupérer le type et les données de l'image
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1] ?? null;

        // Décodez les données de l'image en base64
        $image_base64 = base64_decode($image_parts[1]);

        // Générez un nom de fichier unique pour l'image
        $fileName = uniqid() . '.png';
        $file = $folderPath . '/' . $fileName;
        // $file_pat = str_replace("D:\projet\Auth_doc_projet_sout\Auth_document\storage\app/public/"," ",$file);
        // // Écrivez les données de l'image décodée dans un fichier
        file_put_contents($file, $image_base64);
        // Vérifiez si le fichier image a été créé avec succès
        if (!file_exists($file)) {
            dd('Le fichier image n\'a pas pu être créé.');
        }
return $file;


        try {
            $client = new Client();
            $response = $client->request('POST', 'https://api.ocr.space/parse/image', [
                'headers' => [
                    'apikey' => 'K83600417488957'
                ],
                'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => fopen($file, 'r')
                    ]
                ]
            ]);
    
            $text = json_decode($response->getBody(), true)['ParsedResults'][0]['ParsedText'];
            return $text;
            
            $filename = $file;
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
                        //	echo "Word: ". print_r($text, true) . "\n";
                        } else if ($blockType == 'LINE') {
                        //	echo "Line: ". print_r($text, true) . "\n";
                    array_push($tab,$text);
                        }
                    }
                }
            }
            echo json_encode($tab);
        } catch (RequestException $e) {
          echo $e->getMessage();
        }
    }
//pour uploder les fichiers
public function upload(Request $request){
  
try {
    $client = new TextractClient([
        'region' =>'us-east-1',
        'version' => 'latest',
        'credentials' => [
            'key' => 'AKIAZDHOG23RVZA73SMG',
            'secret' => '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',
        ],
        
       
    ]);
    
   
    $filename = $request->file('name_file');
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
                //	echo "Word: ". print_r($text, true) . "\n";
                } else if ($blockType == 'LINE') {
                //	echo "Line: ". print_r($text, true) . "\n";
                }
            }
        }
    }
  
$text = implode(" ", $tab);
return $text;

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


} catch (RequestException $e) {
  echo $e->getMessage();
}
    }
 }




