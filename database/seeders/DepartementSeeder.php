<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departement=[
            [
              'id_departement' =>'depInfo',
              'nom_departement' =>'departement informatique',
              'faculte'=>'FS'
            ],
            [
                'id_departement' =>'depMath',
                'nom_departement' =>'departement mathematique',
                'faculte'=>'FS'
              ]

            ];
            Departement::insert($departement);
    }
}
