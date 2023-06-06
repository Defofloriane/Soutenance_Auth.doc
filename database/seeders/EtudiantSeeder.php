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
                'date_naissance'=>'2001/08/04',
                'lieu_naissance'=>'AKOM',
            ],
            [
                'matricule'=>'19K2779',
                'nom'=>'KOUGABA',
                'prenom'=>'MARLIN BLERIAUX',
                'date_naissance'=>'1997/02/14',
                'lieu_naissance'=>'DOUALA',

            ],
            [
                'matricule'=>'20V2412',
                'nom'=>'ESSOLA ESSOLA',
                'prenom'=>'JOSEPH JULIEN',
                'date_naissance'=>'1999/05/20',
                'lieu_naissance'=>'BONDJOCK',

            ],
            [
                'matricule'=>'20V2512',
                'nom'=>'KEMGNE DEFO',
                'prenom'=>'FLORIANE INGRIDE',
                'date_naissance'=>'2002/01/01',
                'lieu_naissance'=>'MBOUDA',

            ],
            [
                'matricule'=>'20R2313',
                'nom'=>'MBIADA FOSSO',
                'prenom'=>'CEDRIC GEORDAN',
                'date_naissance'=>'2001/12/09',
                'lieu_naissance'=>'BAZOU',

            ],
           
           ];
    Etudiant::insert($etudiant);
    }
}
