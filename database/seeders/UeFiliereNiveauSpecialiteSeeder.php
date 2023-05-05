<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Ue;
use App\Models\UeFiliereNiveauSpecialite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UeFiliereNiveauSpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ueFilNiveauSpecialite=[
           
            [
              'ue'=>Ue::where(['id_ue'=>'ENGL203'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT201'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT202'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT203'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT204'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT205'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT206'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT207'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT208'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT210'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT215'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
            [
              'ue'=>Ue::where(['id_ue'=>'ICT216'])->firstOrFail()->id_ue,
              'filiere'=>Filiere::where(['id_filiere'=>'ICT4D'])->firstOrFail()->id_filiere,
              'niveau'=>Niveau::where(['id_niveau'=>'L2'])->firstOrFail()->id_niveau,
            ],
          
         
            ];
            UeFiliereNiveauSpecialite::insert($ueFilNiveauSpecialite);
    
    }
}
