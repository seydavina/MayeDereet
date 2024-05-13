<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'super@test.sn',
            'password' => bcrypt('super123'),
            'role' => 'super_admin',
            'must_change_password' => false,
        ]);
    }
}
