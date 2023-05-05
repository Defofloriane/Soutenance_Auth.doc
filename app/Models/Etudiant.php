<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table="etudiants";

    public function notes()
    {

     return $this->hasMany(Ue::class);

    }
}
