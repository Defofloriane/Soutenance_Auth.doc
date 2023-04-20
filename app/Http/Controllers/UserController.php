<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\MyService;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function endpoint(Request $request) {
        $data = $request->all();
        return response()->json([
            'message' => 'Données reçues avec succès !',
            'data' => $data
        ]);
    }
}
