<?php

namespace Database\Seeders;

use App\Models\Hashe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HasheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hach=[
            [
              'hache'=>'7808b330fcd8b0ed397f172d7d185818bd1ac022765f6d85e0fd26a5c607d7a4'
            ]
            ];

            Hashe::insert($hach);
    }
}
