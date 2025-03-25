<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Dr. Fauziawan',
                'alamat' => 'Jl. Medika No. 10',
                'no_hp' => '081234567891',
                'email' => 'fauziawan@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dr. Anindya',
                'alamat' => 'Jl. Sehat No. 5',
                'no_hp' => '081234567892',
                'email' => 'anindya@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Merdeka No. 20',
                'no_hp' => '081234567893',
                'email' => 'budisantoso@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'pasien',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ani Wijaya',
                'alamat' => 'Jl. Harmoni No. 15',
                'no_hp' => '081234567894',
                'email' => 'aniwijaya@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'pasien',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
