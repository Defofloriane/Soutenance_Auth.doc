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
                'id_ue'=>'ICT15',
                'nom_ue'=>'INTRODUCTION TO COMPUTER NETWORKING',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT216',
                'nom_ue'=>'NETWORK ADMINISTRATION',
                'credit'=>5,
              ],
              //uekougaba
              [
                'id_ue'=>'ENGL303',
                'nom_ue'=>'ENGLISH III',
                'credit'=>3,
              ],
              [
                'id_ue'=>'ICT300',
                'nom_ue'=>'INTERNSHIP',
                'credit'=>11,
              ],
              [
                'id_ue'=>'ICT301',
                'nom_ue'=>'SOFTWARE ARCHITECTURE AND DESIGN',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT302',
                'nom_ue'=>'INTRODUCTION TO ARTIFICIAL INTELLIGENCE',
                'credit'=>4,
              ],
              [
                'id_ue'=>'ICT303',
                'nom_ue'=>'DATA COMMUNICATION AND SECURITY',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT304',
                'nom_ue'=>'SOFTWARE TESTING AND SECURITY',
                'credit'=>4,
              ],
              [
                'id_ue'=>'ICT305',
                'nom_ue'=>'WEB APLLICATION DEVELOPMENT',
                'credit'=>4,
              ],
              [
                'id_ue'=>'ICT306',
                'nom_ue'=>'BUSSINESS INTELLIGENCE',
                'credit'=>4,
              ],
              [
                'id_ue'=>'ICT307',
                'nom_ue'=>'COMPUTER SYSTEMS ENGINEERING',
                'credit'=>5,
              ],
              [
                'id_ue'=>'ICT308',
                'nom_ue'=>'SOFTWARE DEVELOPMENT IN JAVA II',
                'credit'=>4,
              ],
              [
                'id_ue'=>'ICT310',
                'nom_ue'=>'PROFESSIONAL ISSUES IN IT',
                'credit'=>3,
              ],
              [
                'id_ue'=>'ICT317',
                'nom_ue'=>'INFORMATIONAL SYSTEM ',
                'credit'=>4,
              ],
              [
                'id_ue'=>'ICT318',
                'nom_ue'=>'JAVA ENTREPRISE EDITION ',
                'credit'=>4,
              ],
            ];
            Ue::insert($ue);
    }
}
