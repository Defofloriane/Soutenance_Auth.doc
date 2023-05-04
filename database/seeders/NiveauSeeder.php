<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveau=[
            [
                'id_niveau' => 'L1',
                'nom_niveau' => 'LICENCE 1'
            ],
            [
                'id_niveau' => 'L2',
                'nom_niveau' => 'LICENCE 2'
            ],
            [
                'id_niveau' => 'L3',
                'nom_niveau' => 'LICENCE 3'
            ]
            ];
            Niveau::insert($niveau);
    }
}
