<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periksa;
use App\Models\User;

class PeriksaSeeder extends Seeder
{
    public function run(): void
    {
        $pasien = User::where('role', 'pasien')->first();
        $dokter = User::where('role', 'dokter')->first();

        if ($pasien && $dokter) {
            Periksa::insert([
                [
                    'id_pasien' => $pasien->id,
                    'id_dokter' => $dokter->id,
                    'tgl_periksa' => now(),
                    'catatan' => 'Demam tinggi dan batuk pilek',
                    'biaya_periksa' => 60000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id_pasien' => $pasien->id,
                    'id_dokter' => $dokter->id,
                    'tgl_periksa' => now()->subDays(2),
                    'catatan' => 'Sakit Diare',
                    'biaya_periksa' => 55000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}