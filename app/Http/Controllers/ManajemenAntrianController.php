<?php

namespace App\Http\Controllers;
use App\Models\JadwalPertemuan;


use Illuminate\Http\Request;

class ManajemenAntrianController extends Controller
{
    //
    public function index()
    {
        $jadwalpertemuan = JadwalPertemuan::all(); // Fetch the data from your model
        return view('manage-antrian', compact('jadwalpertemuan')); // Pass the variable to the view
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

    public function destroyantrina(Request $request)
    {
        $jadwalpertemuan = JadwalPertemuan::find($request->idjadwalpertemuan);
        $jadwalpertemuan->delete();
        return redirect(url('/manage-antrian'));
    }

};