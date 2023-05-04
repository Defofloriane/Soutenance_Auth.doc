<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filiere=[
            [
               'id_filiere' => 'ICT4D',
               'nom_filiere' => 'INFORMATION AND COMMUNICATION TECHNOLOGY AND DEVELOPMENT',
               'departement'=>'FS'
            ],
            [
                'id_filiere' => 'MATH',
                'nom_filiere' => 'MATHEMATIQUE',
                'departement'=>'FS'
             ]

            ];
    }
}
