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
}
