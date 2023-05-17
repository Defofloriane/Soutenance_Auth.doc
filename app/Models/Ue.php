<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ue extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     *
     */
    protected $fillable = [
        'id_ue',
        'nom_ue',
        'credit',
    ];
    protected $primaryKey = 'id_ue'; // Nom de la colonne clé primaire
    protected $keyType = 'string';
    // protected $primaryKey = 'id_ue';


    protected $table="ues";

    public function etudiants(){
        return $this->belongsTo(Etudiant::class);
    }
}
