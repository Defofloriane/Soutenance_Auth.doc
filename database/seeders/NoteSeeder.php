<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $note=[
            [
               'etudiant'=>'20R2198',
               'ue'=>'ENGL303',
               'note'=>50.50,
               'decision'=>'CA',
               'mention'=>'C'
            ],
            [
                'etudiant'=>'20R2198',
                'ue'=>'ICT201',
                'note'=>83.00,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT202',
                'note'=>77.75,
                'decision'=>'CA',
                'mention'=>'A-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT203',
                'note'=>69.00,
                'decision'=>'CA',
                'mention'=>'B'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT204',
                'note'=>90.25,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT205',
                'note'=>81.00,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT206',
                'note'=>62.00,
                'decision'=>'CA',
                'mention'=>'B-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT207',
                'note'=>82.75,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT208',
                'note'=>78.00,
                'decision'=>'CA',
                'mention'=>'A-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT210',
                'note'=>75.00,
                'decision'=>'CA',
                'mention'=>'A-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT215',
                'note'=>55.75,
                'decision'=>'CA',
                'mention'=>'C+'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT216',
                'note'=>68.00,
                'decision'=>'CA',
                'mention'=>'B'
             ],
             //etudiant kougaba l3
             [
               'etudiant'=>'19K2779',
               'ue'=>'ENGL 303',
               'note'=>38.00,
               'decision'=>'CANT',
               'mention'=>'D'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT300',
               'note'=>84.10,
               'decision'=>'CA',
               'mention'=>'A'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT301',
               'note'=>68.00,
               'decision'=>'CA',
               'mention'=>'B'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT302',
               'note'=>61.25,
               'decision'=>'CA',
               'mention'=>'B-'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT303',
               'note'=>62.70,
               'decision'=>'CA',
               'mention'=>'B-'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT304',
               'note'=>43.95,
               'decision'=>'CANT',
               'mention'=>'D+'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT305',
               'note'=>73.25,
               'decision'=>'CA',
               'mention'=>'B+'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT306',
               'note'=>72.50,
               'decision'=>'CA',
               'mention'=>'B+'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT307',
               'note'=>44.00,
               'decision'=>'CANT',
               'mention'=>'D+'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT308',
               'note'=>57.00,
               'decision'=>'CA',
               'mention'=>'C+'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT310',
               'note'=>76.26,
               'decision'=>'CA',
               'mention'=>'A-'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT317',
               'note'=>63.00,
               'decision'=>'CA',
               'mention'=>'B-'
            ],
            [
               'etudiant'=>'19K2779',
               'ue'=>'ICT 318',
               'note'=>75.75,
               'decision'=>'CA',
               'mention'=>'A-'
            ],
            //etudiant kougaba l2
            [
               'etudiant'=>'19K2779',
               'ue'=>'ENGL303',
               'note'=>53.00,
               'decision'=>'CA',
               'mention'=>'C'
            ],
            [
                'etudiant'=>'19K2779',
                'ue'=>'ICT201',
                'note'=>72.50,
                'decision'=>'CA',
                'mention'=>'B+'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT202',
                'note'=>72.50,
                'decision'=>'CA',
                'mention'=>'B+'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT203',
                'note'=>70.00,
                'decision'=>'CA',
                'mention'=>'B+'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT204',
                'note'=>51.00,
                'decision'=>'CA',
                'mention'=>'C'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT205',
                'note'=>49.00,
                'decision'=>'CANT',
                'mention'=>'C-'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT206',
                'note'=>39.75,
                'decision'=>'CANT',
                'mention'=>'D'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT207',
                'note'=>51.50,
                'decision'=>'CA',
                'mention'=>'C'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT208',
                'note'=>61.25,
                'decision'=>'CA',
                'mention'=>'B-'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT210',
                'note'=>45.00,
                'decision'=>'CANT',
                'mention'=>'C-'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT217',
                'note'=>64.00,
                'decision'=>'CA',
                'mention'=>'B-'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT218',
                'note'=>54.75,
                'decision'=>'CA',
                'mention'=>'C'
             ],
             //etudiant kougaba l1
             [
               'etudiant'=>'19K2779',
               'ue'=>'ENGL104',
               'note'=>62.00,
               'decision'=>'CA',
               'mention'=>'B-'
            ],
            [
                'etudiant'=>'19K2779',
                'ue'=>'ICT101',
                'note'=>55.25,
                'decision'=>'CA',
                'mention'=>'C+'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT102',
                'note'=>60.00,
                'decision'=>'CA',
                'mention'=>'B-'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT103',
                'note'=>35.00,
                'decision'=>'CANT',
                'mention'=>'D'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'IC104',
                'note'=>51.50,
                'decision'=>'CA',
                'mention'=>'C'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT105',
                'note'=>50.04,
                'decision'=>'CA',
                'mention'=>'C'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT106',
                'note'=>42.50,
                'decision'=>'CANT',
                'mention'=>'D+'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT107',
                'note'=>44.63,
                'decision'=>'CANT',
                'mention'=>'D+'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT108',
                'note'=>67.00,
                'decision'=>'CA',
                'mention'=>'B'
             ],
             [
               'etudiant'=>'19K2779',
               'ue'=>'ICT109',
               'note'=>55.50,
               'decision'=>'CA',
               'mention'=>'C+'
            ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT110',
                'note'=>38.00,
                'decision'=>'CANT',
                'mention'=>'D'
             ],
             [
                'etudiant'=>'19K2779',
                'ue'=>'ICT111',
                'note'=>62.63,
                'decision'=>'CA',
                'mention'=>'B-'
             ],
            ];
            Note::insert($note);
    }
}