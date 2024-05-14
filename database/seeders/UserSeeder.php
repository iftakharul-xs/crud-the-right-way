<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => \App\Constants\Role::ADMIN
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Seller',
            'email' => 'seller@example.com',
        ]);
    }
}
