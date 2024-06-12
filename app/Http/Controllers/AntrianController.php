<?php

namespace App\Http\Controllers;

use App\Models\JadwalPertemuan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the currently logged-in user
    
        // Fetch only the queues that belong to the logged-in user
        $queues = JadwalPertemuan::where('id', $user->id)
            ->orderBy('tanggalpertemuan') // Order by date
            ->orderBy('jampertemuan') // Then order by time
            ->get()
            ->map(function($queue) {
                $queue->nama_pasien = $queue->namadepan . ' ' . $queue->namabelakang;
                $queue->keluhan = $queue->keluhanpasien;
                $queue->tanggal = Carbon::parse($queue->tanggalpertemuan)->translatedFormat('d F Y');
                $queue->est_jadwal = $queue->jampertemuan;
                $queue->dokter = $queue->namadokter;
                $queue->no_antrian = $this->generateQueueNumber($queue->tanggalpertemuan, $queue->jampertemuan);
                return $queue;
            });
    
        return view('antrian.index', compact('queues'));
    }
    
    
    private function generateQueueNumber($tanggalpertemuan, $jampertemuan)
    {
        // Fetch all appointments for the same date up to the current time slot
        $count = JadwalPertemuan::where('tanggalpertemuan', $tanggalpertemuan)
            ->where('jampertemuan', '<=', $jampertemuan)
            ->count();

        // Generate the queue number based on the count
        return sprintf('P%03d', $count);
    }

    public function getAntrianObat()
    {
        // Get the ID of the current user
        $userId = Auth::id();
    
        // Fetch only the records associated with the current user where status is 'done'
        $data_antrian_obat = JadwalPertemuan::where('id', $userId)
            ->where('status', 'done')
            ->orderBy('tanggalpertemuan') // Order by date
            ->orderBy('jampertemuan') // Order by time
            ->get();
    
        // Iterate over each item and compute the queue number
        foreach ($data_antrian_obat as $data) {
            $data->no_antrian = $this->generateQueueNumber($data->tanggalpertemuan, $data->jampertemuan);
        }
    
        return view('antrian.antrian-obat', compact('data_antrian_obat'));
    }
}
