<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = ['id_evaluation'];
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function ue()
    {
        return $this->belongsTo(Ue::class);
    }
}
