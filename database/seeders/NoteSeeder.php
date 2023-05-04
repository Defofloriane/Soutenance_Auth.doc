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
               'note'=>50,50,
               'decision'=>'CA',
               'mention'=>'C'
            ],
            [
                'etudiant'=>'20R2198',
                'ue'=>'ICT201',
                'note'=>83,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT202',
                'note'=>77,75,
                'decision'=>'CA',
                'mention'=>'A-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT203',
                'note'=>69,00,
                'decision'=>'CA',
                'mention'=>'B'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT204',
                'note'=>90,25,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT205',
                'note'=>81,00,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT206',
                'note'=>62,00,
                'decision'=>'CA',
                'mention'=>'B-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT207',
                'note'=>82,75,
                'decision'=>'CA',
                'mention'=>'A'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT208',
                'note'=>78,00,
                'decision'=>'CA',
                'mention'=>'A-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT210',
                'note'=>75,00,
                'decision'=>'CA',
                'mention'=>'A-'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT215',
                'note'=>55,75,
                'decision'=>'CA',
                'mention'=>'C+'
             ],
             [
                'etudiant'=>'20R2198',
                'ue'=>'ICT216',
                'note'=>68,00,
                'decision'=>'CA',
                'mention'=>'B'
             ],
            ];
            Note::insert($note);
    }
}
