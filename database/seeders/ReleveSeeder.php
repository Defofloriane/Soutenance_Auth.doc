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
                'filiere'=>'INFORMATION AND COMMUNICATION TECHNOLOGY FOR DEVELOPMENT',
                'niveau'=>'LICENCE 2',
                'mgp'=>3.39,
                'anneeAcademique'=>'2021/2022',
            ],
            [
                'id_releve'=>'00152/KMB/L3/FS/ICT/222122',
                'etudiant'=>'19K2779',
                'decision'=>'ADMIS',
                'filiere'=>'INFORMATION AND COMMUNICATION TECHNOLOGY FOR DEVELOPMENT',
                'niveau'=>'LICENCE 3',
                'mgp'=>2.83,
                'anneeAcademique'=>'2021/2022',
            ],
            [
                'id_releve'=>'09875/KMB/L2/FS/ICT/212022',
                'etudiant'=>'19K2779',
                'decision'=>'ADMIS',
                'filiere'=>'INFORMATION AND COMMUNICATION TECHNOLOGY FOR DEVELOPMENT',
                'niveau'=>'LICENCE 2',
                'mgp'=>2.26,
                'anneeAcademique'=>'2020/2021',
            ],
            [
                'id_releve'=>'13335/KMB/L1/FS/ICT/201920',
                'etudiant'=>'19K2779',
                'decision'=>'ADMIS',
                'filiere'=>'INFORMATION AND COMMUNICATION FOR DEVELOPMENT',
                'niveau'=>'LICENCE 1',
                'mgp'=>2.01,
                'anneeAcademique'=>'2019/2020',
            ],
            ];
            Releve::insert($releve);
    }
}
