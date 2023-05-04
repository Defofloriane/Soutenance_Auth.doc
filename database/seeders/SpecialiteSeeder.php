<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialite=[
            [
              'id_specialite'=>'GL',
              'nom_specialite'=>'GENIE LOGICIEL',
            ],
            [
                'id_specialite'=>'SECU',
                'nom_specialite'=>'SECURITE',
             ]
        ];
    }
}
