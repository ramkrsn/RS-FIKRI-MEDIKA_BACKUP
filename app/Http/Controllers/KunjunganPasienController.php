<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganPasienController extends Controller
{
    public function index(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'nik_ktp' => 'required|integer|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|integer|max:255',
            'no_handphone' => 'required|string|max:255',
            'patient_id' => 'required|integer|max:255',
        ]);

        // Store data in session
        $request->session()->put('kunjungans', $request->all());

        // Redirect to the schedule selection page
        return redirect('/KunjunganPasienCek');
    }

    public function showScheduleForm(Request $request)
    {
        // Ensure visitor data is available in session
        if (!$request->session()->has('kunjungans')) {
            return redirect('/KunjunganPasien');
        }

        return view('KunjunganPasienCek');
    }

    public function JadwalKunjungan(Request $request)
    {
        // Validate the schedule input
        $request->validate([
            'tanggal' => 'required|tanggal',
            'waktu' => 'required',
        ]);

        // Retrieve visitor data from session
        $visitorData = $request->session()->get('kunjungans');

        // Process the scheduling (e.g., save to database)

        // Clear the session data
        $request->session()->forget('kunjungans');

        // Return a success message
        return back()->with('status', 'Visit scheduled successfully!');
    }
}