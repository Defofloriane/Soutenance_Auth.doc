<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;




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
}
