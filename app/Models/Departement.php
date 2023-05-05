<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $table = 'departements';

    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
    public function faculte()
    {
        return $this->belongsTo(Faculte::class);
    }
}
