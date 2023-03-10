<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::firstOrCreate([
            'gender_desc' => "Male",
        ]);
        
        Gender::firstOrCreate([
            'gender_desc' => "Female",
        ]);        
    }
}
