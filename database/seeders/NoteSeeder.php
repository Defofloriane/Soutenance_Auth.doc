<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Semestre;
use App\Models\Ue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      $etudiant_id = Etudiant::where(['matricule'=>'20R2198'])->firstOrFail()->matricule;
      $etudiant_id2 = Etudiant::where(['matricule'=>'19K2779'])->firstOrFail()->matricule;
        $note=[
            [
               'etudiant'=>$etudiant_id,
               'ue'=>Ue::where(['id_ue'=>'ENGL203'])->firstOrFail()->id_ue,
               'note'=>50.50,
               'decision'=>'CA',
               'mention'=>'C',
               'semestre'=>'1',
               'annee'=>2022
            ],
            [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT201'])->firstOrFail()->id_ue,
                'note'=>83.00,
                'decision'=>'CA',
                'mention'=>'A',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT202'])->firstOrFail()->id_ue,
                'note'=>77.75,
                'decision'=>'CA',
                'mention'=>'A-',
                'semestre'=>'2',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT203'])->firstOrFail()->id_ue,
                'note'=>69.00,
                'decision'=>'CA',
                'mention'=>'B',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT204'])->firstOrFail()->id_ue,
                'note'=>90.25,
                'decision'=>'CA',
                'mention'=>'A',
                'semestre'=>'2',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT205'])->firstOrFail()->id_ue,
                'note'=>81.00,
                'decision'=>'CA',
                'mention'=>'A',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT206'])->firstOrFail()->id_ue,
                'note'=>62.00,
                'decision'=>'CA',
                'mention'=>'B-',
                'semestre'=>'2',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT207'])->firstOrFail()->id_ue,
                'note'=>82.75,
                'decision'=>'CA',
                'mention'=>'A',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT208'])->firstOrFail()->id_ue,
                'note'=>78.00,
                'decision'=>'CA',
                'mention'=>'A-',
                'semestre'=>'4',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT210'])->firstOrFail()->id_ue,
                'note'=>75.00,
                'decision'=>'CA',
                'mention'=>'A-',
                'semestre'=>'2',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT215'])->firstOrFail()->id_ue,
                'note'=>55.75,
                'decision'=>'CA',
                'mention'=>'C+',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id,
                'ue'=>Ue::where(['id_ue'=>'ICT216'])->firstOrFail()->id_ue,
                'note'=>68.00,
                'decision'=>'CA',
                'mention'=>'B',
                'semestre'=>'2',
                'annee'=>2022
             ],
            
           
            ];    
            $note2=[
                //etudiant kougaba l2
            [
               'etudiant'=>$etudiant_id2 ,
              'ue'=>Ue::where(['id_ue'=>'ENGL203'])->firstOrFail()->id_ue,
               'note'=>53.00,
               'decision'=>'CA',
               'mention'=>'C',
               'semestre'=>'1',
               'annee'=>2022
            ],
            [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT201'])->firstOrFail()->id_ue,
                'note'=>72.50,
                'decision'=>'CA',
                'mention'=>'B+',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT202'])->firstOrFail()->id_ue,
                'note'=>72.50,
                'decision'=>'CA',
                'mention'=>'B+',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT203'])->firstOrFail()->id_ue,
                'note'=>70.00,
                'decision'=>'CA',
                'mention'=>'B+',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT204'])->firstOrFail()->id_ue,
                'note'=>51.00,
                'decision'=>'CA',
                'mention'=>'C',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT205'])->firstOrFail()->id_ue,
                'note'=>49.00,
                'decision'=>'CANT',
                'mention'=>'C-',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT206'])->firstOrFail()->id_ue,
                'note'=>39.75,
                'decision'=>'CANT',
                'mention'=>'D',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT207'])->firstOrFail()->id_ue,
                'note'=>51.50,
                'decision'=>'CA',
                'mention'=>'C',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT208'])->firstOrFail()->id_ue,
                'note'=>61.25,
                'decision'=>'CA',
                'mention'=>'B-',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT210'])->firstOrFail()->id_ue,
                'note'=>45.00,
                'decision'=>'CANT',
                'mention'=>'C-',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT217'])->firstOrFail()->id_ue,
                'note'=>64.00,
                'decision'=>'CA',
                'mention'=>'B-',
                'semestre'=>'1',
                'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT218'])->firstOrFail()->id_ue,
                'note'=>54.75,
                'decision'=>'CA',
                'mention'=>'C',
                'semestre'=>'1',
                'annee'=>2022
             ],      
            ] ;   
            $note3=[
               //etudiant kougaba l1
             [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ENGL104'])->firstOrFail()->id_ue,
               'note'=>62.00,
               'decision'=>'CA',
               'mention'=>'B-',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT101'])->firstOrFail()->id_ue,
                'note'=>55.25,
                'decision'=>'CA',
                'mention'=>'C+',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT102'])->firstOrFail()->id_ue,
                'note'=>60.00,
                'decision'=>'CA',
                'mention'=>'B-',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT103'])->firstOrFail()->id_ue,
                'note'=>35.00,
                'decision'=>'CANT',
                'mention'=>'D',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT104'])->firstOrFail()->id_ue,
                'note'=>51.50,
                'decision'=>'CA',
                'mention'=>'C',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT105'])->firstOrFail()->id_ue,
                'note'=>50.04,
                'decision'=>'CA',
                'mention'=>'C',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT106'])->firstOrFail()->id_ue,
                'note'=>42.50,
                'decision'=>'CANT',
                'mention'=>'D+',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT107'])->firstOrFail()->id_ue,
                'note'=>44.63,
                'decision'=>'CANT',
                'mention'=>'D+',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT108'])->firstOrFail()->id_ue,
                'note'=>67.00,
                'decision'=>'CA',
                'mention'=>'B',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT109'])->firstOrFail()->id_ue,
               'note'=>55.50,
               'decision'=>'CA',
               'mention'=>'C+',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT110'])->firstOrFail()->id_ue,
                'note'=>38.00,
                'decision'=>'CANT',
                'mention'=>'D',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
             [
                'etudiant'=>$etudiant_id2 ,
                'ue'=>Ue::where(['id_ue'=>'ICT111'])->firstOrFail()->id_ue,
                'note'=>62.63,
                'decision'=>'CA',
                'mention'=>'B-',
                'semestre'=>'1',
               //  'annee'=>2022
             ],
            ];
            $note4=[
                //etudiant kougaba l3
             [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ENGL303'])->firstOrFail()->id_ue,
               'note'=>38.00,
               'decision'=>'CANT',
               'mention'=>'D',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT300'])->firstOrFail()->id_ue,
               'note'=>84.10,
               'decision'=>'CA',
               'mention'=>'A',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT301'])->firstOrFail()->id_ue,
               'note'=>68.00,
               'decision'=>'CA',
               'mention'=>'B',
               'semestre'=>'1',
               // 'annee'=>2022

            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT302'])->firstOrFail()->id_ue,
               'note'=>61.25,
               'decision'=>'CA',
               'mention'=>'B-',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT303'])->firstOrFail()->id_ue,
               'note'=>62.70,
               'decision'=>'CA',
               'mention'=>'B-',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT304'])->firstOrFail()->id_ue,
               'note'=>43.95,
               'decision'=>'CANT',
               'mention'=>'D+',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT305'])->firstOrFail()->id_ue,
               'note'=>73.25,
               'decision'=>'CA',
               'mention'=>'B+',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT306'])->firstOrFail()->id_ue,
               'note'=>72.50,
               'decision'=>'CA',
               'mention'=>'B+',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT307'])->firstOrFail()->id_ue,
               'note'=>44.00,
               'decision'=>'CANT',
               'mention'=>'D+',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT308'])->firstOrFail()->id_ue,
               'note'=>57.00,
               'decision'=>'CA',
               'mention'=>'C+',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT310'])->firstOrFail()->id_ue,
               'note'=>76.26,
               'decision'=>'CA',
               'mention'=>'A-',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT317'])->firstOrFail()->id_ue,
               'note'=>63.00,
               'decision'=>'CA',
               'mention'=>'B-',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
            [
               'etudiant'=>$etudiant_id2 ,
               'ue'=>Ue::where(['id_ue'=>'ICT318'])->firstOrFail()->id_ue,
               'note'=>75.75,
               'decision'=>'CA',
               'mention'=>'A-',
               'semestre'=>'1',
               // 'annee'=>2022
            ],
         ];
            Note::insert($note);
            Note::insert($note2);
            // Note::insert($note3);
            // Note::insert($note4);
    }
}