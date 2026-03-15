<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Antrian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Antrian::create([
            'no_antrian' => 'P003',
            'nama_pasien' => 'Agung Ramasa',
            'keluhan' => 'Sakit Jantung',
            'dokter' => 'dr. AdA Hafni, Sp.A',
            'poli' => 'Anak',
            'tanggal' =>  Carbon::now()->format('Y-m-d'),
            'est_jadwal' => '09:00 - 09:30',
            'idjadwalpertemuan' => 1,
        ]);
    }
}
