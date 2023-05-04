<?php

namespace Database\Seeders;
use App\Models\UeFiliereNiveauSpecialite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UeFiliereNiveauSpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ueSpecialite=[
            [
              'ue'=>\App\Models\Ue::class,
              'filiere'=>\App\Models\Filiere::class,
              'specialite'=>\App\Models\Specialite::class,
            ],
           
            ];
            UeFiliereNiveauSpecialite::insert($ueSpecialite);
    
    }
}
