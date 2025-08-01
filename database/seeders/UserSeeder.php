<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Desaku',
            'email' => 'admin@gmail.com',
            'password' => ('password'),
            'status' => 'approved',
            'role_id' => 1, // Assuming role_id 1 is Admin
        ]);
    }
}
