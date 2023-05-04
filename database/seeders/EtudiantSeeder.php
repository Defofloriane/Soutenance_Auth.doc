<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etudiant=[
            [
                'matricule'=>'20R2198',
                'nom'=>'EZO\'O',
                'prenom'=>'DAVID GAEL',
                'date_naissance'=>'2001/08/04'
            ],
            [
                'matricule'=>'19K2779',
                'nom'=>'KOUGABA',
                'prenom'=>'MARLIN BLERIAUX',
                'date_naissance'=>'1997/02/14'

            ],
           
           ];
    Etudiant::insert($etudiant);
    }
}
