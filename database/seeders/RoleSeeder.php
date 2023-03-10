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
            'role_id' => 1,
            'role_name' => "Admin",
        ]);

        Role::firstOrCreate([
            'role_id' => 2,
            'role_name' => "User",
        ]);
    }
}
