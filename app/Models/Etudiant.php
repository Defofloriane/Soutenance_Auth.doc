<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table="etudiants";
    protected $fillable = ['nom', 'prenom', 'matricule', 'date_naissance', 'lieu_naissance'];

    public function notes()
    {

     return $this->hasMany(Ue::class);

    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
