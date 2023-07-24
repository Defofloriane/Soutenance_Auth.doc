<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\Faculte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculte_id = Faculte::where(['id_faculte'=>'fs'])->firstOrFail()->id_faculte;
        $departement=[
            [
              'id_departement' =>'depInfo',
              'nom_departement' =>'departement informatique',
              'faculte'=>$faculte_id
            ],
            [
                'id_departement' =>'depMath',
                'nom_departement' =>'departement mathematique',
                'faculte'=>$faculte_id
            ],
            [
                'id_departement' =>'depBios',
                'nom_departement' =>'departement bioscience',
                'faculte'=>$faculte_id
            ],
            [
                'id_departement' =>'depChim',
                'nom_departement' =>'departement chimie',
                'faculte'=>$faculte_id
            ],
            [
                'id_departement' =>'depPhy',
                'nom_departement' =>'departement physique',
                'faculte'=>$faculte_id
            ],

            ];
            Departement::insert($departement);
    }
}
