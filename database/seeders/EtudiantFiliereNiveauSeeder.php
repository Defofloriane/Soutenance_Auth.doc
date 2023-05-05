<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\EtudiantFiliereNiveau;
use App\Models\Filiere;
use App\Models\Niveau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantFiliereNiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etuFilNiv=[
            [
               'etudiant' =>Etudiant::where(['matricule'=>'20R2198'])->firstOrFail()->matricule,
               'filiers'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
               'niveau' =>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ]
            ];

            EtudiantFiliereNiveau::insert($etuFilNiv);
    }
}
