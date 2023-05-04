<?php

namespace Database\Seeders;

use App\Models\Ue;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ue=[
            [
              'id_ue'=>'ENGL303',
              'nom_ue'=>'ENGLISH II',
              'credit'=>3,
            ],
            [
                'id_ue'=>'ICT201',
                'nom_ue'=>'INTRODUCTION TO SOFTWARE INGENIERING',
                'credit'=>6,
              ],
              [
                'id_ue'=>'ICT202',
                'nom_ue'=>'SOFTWARE DEVELOPMENT FOR MOBILE DEVICES',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT203',
                'nom_ue'=>'DATABASES SYSTEMS',
                'credit'=>6,
              ],
              [
                'id_ue'=>'ICT204',
                'nom_ue'=>'INTRODUCTION TO OPERATING SYSTEME',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT205',
                'nom_ue'=>'INTRODUCTION TO PROGRAMMING IN .NET',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT206',
                'nom_ue'=>'INTRODUCTION TO COMPUTER NETWORK',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT207',
                'nom_ue'=>'SOFTWARE DEVELOPMENT IN JAVA I',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT208',
                'nom_ue'=>'COMPUTER ARCHITECTURE',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT210',
                'nom_ue'=>'DATABASES PROGRAMMING',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT215',
                'nom_ue'=>'INTRODUCTION TO COMPUTER NETWORKING',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT216',
                'nom_ue'=>'NETWORK ADMINISTRATION',
                'credit'=>5,
              ],
            ];
            Ue::insert($ue);
    }
}
