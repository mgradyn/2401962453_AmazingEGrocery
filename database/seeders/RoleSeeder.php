<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'role_name' => "Admin",
        ]);

        Role::firstOrCreate([
            'role_name' => "User",
        ]);
    }
}
