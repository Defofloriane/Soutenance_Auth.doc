<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstInscritDansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estInscritDans=[
            [
               "matricule"=>"20R2198",
               "filiere"=>"ICT4D",
               "niveau"=>"L2",
               "anneeAcademique"=>"2021/2022"
            ],
            [
                "matricule"=>"19K2779",
                "filiere"=>"ICT4D",
                "niveau"=>"L3",
                "anneeAcademique"=>"2021/2022"
             ],
            ];
    }
}
