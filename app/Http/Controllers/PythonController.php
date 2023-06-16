<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PythonController extends Controller
{
    public function signature(Request $request){
        $imagePath = 'images/david.jpeg';
        $imagePath1 = 'images/david1.jpeg';

        $client = new Client();
        
        $response = $client->request('POST', 'http://localhost:5000/endpoint', [
            'multipart' => [
                [
                    'name'     => 'image_1',
                    'contents' => fopen($imagePath, 'r'),
                ],
                [
                    'name'     => 'image_2',
                    'contents' => fopen($imagePath1, 'r'),
                ],
            ]
        ]);
        
        $body = $response->getBody()->getContents();
        return $body;
}
}
