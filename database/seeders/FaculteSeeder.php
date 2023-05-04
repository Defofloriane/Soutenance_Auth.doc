<?php

namespace Database\Seeders;

use App\Models\Faculte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaculteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculte=[
            [
            'id_faculte'=>'fs',
            'nom_faculte'=>'faculté des sciences'
            ],
            [
            'id_faculte'=>'fl',
            'nom_faculte'=>'faculté de lettre'
            ]
    ];
    Faculte::insert($faculte);
    }
}
