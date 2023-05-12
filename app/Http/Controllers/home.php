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
  
$tab_joints = implode(" ", $tab);
return $tab_joints;

//recuperation des donnees du releve
// La chaîne de caractères contenant le texte du relevé de notes
// $texte =   $tab_joints; // Remplacez ceci par votre propre texte

// // Utilisez des expressions régulières pour extraire les informations nécessaires
// // Extraire le nom et le prénom
// if (preg_match('/Noms et Prénoms : ([^\n]+)/', $texte, $matches)) {
//     $nom_prenom = $matches[1];
// }

// // Extraire le matricule
// if (preg_match('/Matricule : ([^\n]+)/', $texte, $matches)) {
//     $matricule = $matches[1];
// }

// // Extraire le numéro de relevé
// if (preg_match('/RELEVE DE NOTES\/TRANSCRIPT No:([^\n]+)/', $texte, $matches)) {
//     $num_releve = $matches[1];
// }
// $pattern = '/No:(\d{5}\/\w{3}\/\w{2}\/\w{3}\/\w{3}\/\d{6})/';
// preg_match($pattern, $text, $matches);

// $numero_releve = $matches[1];
// // Extraire la MGP
// if (preg_match('/Moyenne Générale Pondérée \(MGP\): ([^\n]+)/', $texte, $matches)) {
//     $mgp = $matches[1];
// }

// // Extraire la décision
// if (preg_match('/Décision : ([^\n]+)/', $texte, $matches)) {
//     $decision = $matches[1];
// }

// // Afficher les résultats
// echo "Nom et prénom : " . $nom_prenom . "<br>";
// echo "Matricule : " . $matricule . "<br>";
// echo "Numéro du relevé : " . $num_releve . "<br>";
// echo "MGP : " . $mgp . "<br>";
// echo "Décision : " . $decision . "<br>";
// // affichage
// echo "Relevenumero unique".$num_releve ." du candidat".$nom_prenom." "."de matricule".$matricule."avec une mgp de".$mgp." et la decision". $decision.$numero_releve."</br>";

// return $tab_joints;

//     $json = json_encode($tab, JSON_UNESCAPED_UNICODE);
// return response($json)->header('Content-Type', 'application/json; charset=UTF-8');
//     // /DICTOINNAIRE begin 
// // Charger le fichier JSON contenant le dictionnaire de mots
// $dictionary = json_decode(file_get_contents('dictionary.json'), true);


// $json = json_encode($dictionary, JSON_UNESCAPED_UNICODE);

// return response($json)
//     ->header('Content-Type', 'application/json; charset=UTF-8');

// return $dictionary;
// // Fonction pour suggérer une correction de mot
// function suggestCorrection($word, $dictionary) {
//   // Si le mot est dans le dictionnaire, retourner le mot tel quel
//   if (array_key_exists($word, $dictionary)) {
//     return $word;
//   }
  
//   // Sinon, trouver tous les mots du dictionnaire qui sont similaires
//   // au mot donné (par exemple, en utilisant l'algorithme de Levenshtein)
//   $similarWords = [];
//   foreach ($dictionary as $dictWord => $value) {
//     if (levenshtein($word, $dictWord) <= 2) {
//       $similarWords[] = $dictWord;
//     }
//   }
  
//   // Si des mots similaires ont été trouvés, retourner le premier de la liste
//   if (!empty($similarWords)) {
//     return $similarWords[0];
//   }
  
//   // Si aucun mot similaire n'a été trouvé, retourner le mot original
//   return $word;
// }

// // Utiliser la fonction pour suggérer une correction pour un mot donné
// $wordToCorrect = 'helo';
// $correctedWord = suggestCorrection($wordToCorrect, $dictionary);
// echo "Le mot correct est : " . $correctedWord;
} catch (RequestException $e) {
  echo $e->getMessage();
}
    }
 }




