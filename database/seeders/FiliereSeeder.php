<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $depInfo= Departement::where(['id_departement'=>'depInfo'])->firstOrFail()->id_departement;
        $filiereInfo=[
            [
               'id_filiere' => 'ICT4D',
               'nom_filiere' => 'INFORMATION AND COMMUNICATION TECHNOLOGY FOR DEVELOPMENT',
               'departement'=> $depInfo
            ],
            [
                'id_filiere' => 'INFO',
                'nom_filiere' => 'INFORMATIQUE',
                'departement'=> $depInfo
             ]

            ];
        $depMath=Departement::where(['id_departement'=>'depMath'])->firstOrFail()->id_departement;
        $filiereMath=[
            [
                'id_filiere' => 'MATH',
                'nom_filiere' => 'MATHEMATIQUE',
                'departement'=> $depMath
            ]
            ];

            Filiere::insert($filiereInfo);
            Filiere::insert($filiereMath);
    }
}
