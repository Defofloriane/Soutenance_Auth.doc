<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoReleve extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'filiere',
        'faculte',
        'niveau',
        'mgp',
        'annee',
        'decision'
    ];

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function getFiliere()
    {
        return $this->filiere;
    }

    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;
    }

    public function getFaculte()
    {
        return $this->faculte;
    }

    public function setFaculte($faculte)
    {
        $this->faculte = $faculte;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }

    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    public function getMgp()
    {
        return $this->mgp;
    }

    public function setMgp($mgp)
    {
        $this->mgp = $mgp;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    public function getDecision()
    {
        return $this->decision;
    }

    public function setDecision($decision)
    {
        $this->decision = $decision;
    }
}
