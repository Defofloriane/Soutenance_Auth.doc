<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantFiliereNiveau extends Model
{
    use HasFactory;
    protected $fillable = ['etudiant', 'filiere','niveau'];

}
