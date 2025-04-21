<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Ryo',
                'alamat' => 'Semarang',
                'no_hp' => '087766665555',
                'email' => 'dokter1@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mikel',
                'alamat' => 'Semarang',
                'no_hp' => '089866777755',
                'email' => 'dokter2@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rayhan',
                'alamat' => 'Semarang',
                'no_hp' => '081276543218',
                'email' => 'pasien1@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dian',
                'alamat' => 'Semarang',
                'no_hp' => '081254329876',
                'email' => 'pasien2@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}