<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function endpoint(Request $request) {
        $data = $request->all();
        $users  = User::create([
            'name' => $data['name'],
            'password' => $data['password'],
            'email' => $data['email'],
        ]);

        return response()->json($users);
    }
}
