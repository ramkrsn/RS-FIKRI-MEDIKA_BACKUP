<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\JadwalPertemuan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
{
    // Fetch the data from JadwalPertemuan
    $jadwalPertemuans = JadwalPertemuan::all();
    $user = User::all();

    // Loop through the data and create queue number
    foreach ($jadwalPertemuans as $jadwal) {
        // Generate queue number based on your logic
        $no_antrian = $this->generateQueueNumber($jadwal->jampertemuan);

        // Save the data to the antrian table
        Antrian::updateOrCreate(
            ['idjadwalpertemuan' => $jadwal->idjadwalpertemuan], // using idjadwalpertemuan as a reference
            [
                'no_antrian' => $no_antrian,
                'nama_pasien' => $jadwal->namadepan,
                'keluhan' => $jadwal->keluhanpasien,
                'tanggal' => $jadwal->tanggalpertemuan,
                'est_jadwal' => $jadwal->jampertemuan,
                'dokter' => $jadwal->namadokter,
                'poli' => $jadwal->polidokter,
            ]
        );
    }

    // Fetch the data from antrian table
    $antrians = Antrian::all();

    return view('antrian.index', compact('antrians'));
}

private function generateQueueNumber($jampertemuan)
{
    $queueMap = [
        '07:00:00' => 'P001',
        '07:30:00' => 'P002',
        '08:00:00' => 'P003',
        '08:30:00' => 'P004',
        '09:00:00' => 'P005',
        '09:30:00' => 'P006',
        '10:00:00' => 'P007',
        '10:30:00' => 'P008',
        '11:00:00' => 'P009',
        '11:30:00' => 'P010',
        '12:00:00' => 'P011',
        '12:30:00' => 'P012',
        '13:00:00' => 'P013',
        '13:30:00' => 'P014',

    ];

    \Log::info('jampertemuan: ' . $jampertemuan);
    return $queueMap[$jampertemuan] ?? 'N/A';
}
}
