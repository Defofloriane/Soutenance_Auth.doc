<?php

namespace Database\Seeders;

use App\Models\Archives;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArchivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archive=[
            [
                'chemin'=>'public/images/releves/20R2198_LICENCE 2.jpeg',
                'etudiant'=>'20R2198',
                'niveau'=>'LICENCE 2',
                'releve'=>'00097/EDG/L2/FS/ICT/222122'
            ]
            ];
            Archives::insert($archive);
    }
}
