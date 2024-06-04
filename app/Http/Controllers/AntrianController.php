<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\JadwalPertemuan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
//     public function index(){
//        $queues = Antrian::all()->map(function($queue) {
//         $queue->tanggal = Carbon::parse($queue->tanggal)->translatedFormat('d F Y');
//         return $queue;
//     });
//         return view('antrian.index', compact('queues'));
// }

    public function index(){
        $queues = JadwalPertemuan::all()->map(function($queue) {
            $queue->nama_pasien = $queue->namadepan . ' ' . $queue->namabelakang;
            $queue->keluhan = $queue->keluhanpasien;
            $queue->tanggal = Carbon::parse($queue->tanggalpertemuan)->translatedFormat('d F Y');
            $queue->est_jadwal = $queue->jampertemuan;
            $queue->dokter = $queue->namadokter;
            $queue->no_antrian = $this->generateQueueNumber($queue->jampertemuan);
            return $queue;
        });

        return view('antrian.index', compact('queues'));
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