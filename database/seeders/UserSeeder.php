<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Dummy Admin
        User::updateOrCreate(
            ['email' => 'admin@contoh.com'],
            [
                'nama' => 'Admin Poliklinik',
                'alamat' => 'Jl. Nakula No.5',
                'no_hp' => '081234588890',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );
    }
}