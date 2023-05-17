<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AttestationController extends Controller
{
    public function attestation(){
        return View('attestation');
    }
}
