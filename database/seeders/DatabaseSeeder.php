<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EtudiantUe;
use App\Models\Faculte;
use App\Models\Filiere;
use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       $this->call([
         UserSeeder::class,
        EtudiantSeeder::class,
        FaculteSeeder::class,
        DepartementSeeder::class,
        FiliereSeeder::class,
        NiveauSeeder::class,
        ReleveSeeder::class,
        // SpecialiteSeeder::class,
         UeSeeder::class,
         NoteSeeder::class,
        // UeFiliereNiveauSpecialiteSeeder::class,
        EtudiantFiliereNiveauSeeder::class,

       ]);
    }
}
