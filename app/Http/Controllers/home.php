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
    public function forgot_password()
    {
        return view('forgot-password');
    }

    public function signup()
    {
        return view('signup');
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
  
        $file_name = time() . "_" . $request->file('name_file')->getClientOriginalName();
$file_path = $request->file('name_file')->storeAs("upload", $file_name, "public");

// Get the absolute path to your storage directory
$storage_path = storage_path('app/public');

// Append the subdirectory and file name to get the complete file path
$file_path = $storage_path . '/' . $file_path;

echo $file_path; // D:\projet\soutenance\auth.doc\storage\app/public/upload/644c037d79f0e.png



    // return  $file_name;
    try {
        $client = new Client();
        $response = $client->request('POST', 'https://api.ocr.space/parse/image', [
            'headers' => [
                'apikey' => 'K83600417488957'
            ],
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($file_path, 'r')
                ]
            ]
        ]);

        $text = json_decode($response->getBody(), true)['ParsedResults'][0]['ParsedText'];
        return $text;
        
        $filename = $file_path;
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
}
