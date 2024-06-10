<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\JadwalPertemuan;

class JadwalController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('JadwalPertemuan', ['doctors' => $doctors]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'namadepan' => 'required|string|max:255',
            'namabelakang' => 'required|string|max:255',
            'NIK' => 'required|string|max:255',
            'keluhanpasien' => 'required|string',
            'tanggalpertemuan' => 'required|date',
            'jampertemuan' => 'required|date_format:H:i',
            'namadokter' => 'required|string|max:255',
            'polidokter' => 'required|string|max:255',
            'opsi' => 'required|string'
        ]);

        // Check if an appointment already exists for the given date and time
        $existingAppointment = JadwalPertemuan::where('tanggalpertemuan', $request->tanggalpertemuan)
            ->where('jampertemuan', $request->jampertemuan)
            ->where('namadokter', $request->namadokter)
            ->first();

        if ($existingAppointment) {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'The selected doctor is already booked for the given date and time.');
        }

        // Create a new appointment
        $jadwalpertemuan = new Jadwalpertemuan;
        $jadwalpertemuan->namadepan = $request->namadepan;
        $jadwalpertemuan->namabelakang = $request->namabelakang;
        $jadwalpertemuan->NIK = $request->NIK;
        $jadwalpertemuan->keluhanpasien = $request->keluhanpasien;
        $jadwalpertemuan->tanggalpertemuan = $request->tanggalpertemuan;
        $jadwalpertemuan->jampertemuan = $request->jampertemuan;
        $jadwalpertemuan->namadokter = $request->namadokter;
        $jadwalpertemuan->polidokter = $request->polidokter;
        $jadwalpertemuan->opsi = $request->opsi;

        $jadwalpertemuan->save();

        // Flash success message
        return redirect(url('/jadwalpertemuan'))->with('success', 'Appointment scheduled successfully.');
    }
}

