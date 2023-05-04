<?php

namespace Database\Seeders;

use App\Models\Releve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $releve=[
            [
                'id_releve'=>'00097/EDG/L2/FS/ICT/222122',
                'etudiant'=>'20R2198',
                'decision'=>'ADMIS',
                'filiere'=>'INFORMATION AND COMMUNICATION FOR DEVELOPMENT',
                'niveau'=>'LiCENCE 2',
                'mgp'=>3.39,
                'anneeAcademique'=>'2021/2022',
            ],
            ];
            Releve::insert($releve);
    }
}
