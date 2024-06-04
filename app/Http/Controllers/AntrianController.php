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
            return $queue;
        });
        
        return view('antrian.index', compact('queues'));
    }
}

