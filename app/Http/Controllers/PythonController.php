<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class PythonController extends Controller
{
    public function signature(Request $request){
        $imagePath = 'images/image1.jpg';

        $client = new \GuzzleHttp\Client();
        
        $response = $client->request('POST', 'http://localhost:5000/endpoint', [
            'multipart' => [
                [
                    'name'     => 'image',
                    'contents' => fopen($imagePath, 'r'),
                ],
            ]
        ]);
        $body = $response->getBody();
        echo $body;
}
}
