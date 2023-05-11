<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semestre=[
            [
              'id_semestre' =>'1',
              'nom_semestre' =>'semestre 1'
            ],
            [
                'id_semestre' =>'2',
                'nom_semestre' =>'semestre 2'
              ],
              [
                'id_semestre' =>'3',
                'nom_semestre' =>'semestre 3'
              ],
              [
                'id_semestre' =>'4',
                'nom_semestre' =>'semestre 4'
              ],
             
            ];
    }
}
