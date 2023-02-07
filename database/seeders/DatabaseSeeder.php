<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AccountSeeder::class);
    }
}
