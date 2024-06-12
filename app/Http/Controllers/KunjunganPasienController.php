<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use App\Models\Pasien; // Correct model namespace
use Illuminate\Support\Facades\Auth;

class KunjunganPasienController extends Controller
{
    public function index()
    {
        $kunjungan = Kunjungan::all();

        $pasiens = Pasien::whereIn('status', ['rawat inap'])->get();
        
        return view('KunjunganPasien', ['kunjungan' => $kunjungan, 'pasiens' => $pasiens]);
    }

    public function store(Request $request)
    {
        $kunjungan = new Kunjungan;
        $kunjungan->nama_depan = $request->nama_depan;
        $kunjungan->nama_belakang = $request->nama_belakang;
        $kunjungan->nik = $request->nik;
        $kunjungan->email = $request->email;
        $kunjungan->no_hp = $request->no_hp;
        $kunjungan->idpasien = $request->idpasien; // Use idpasien instead of namapasien
        $kunjungan->tanggal = $request->tanggal;
        $kunjungan->waktu = $request->waktu;
        $kunjungan->id= Auth::id();
        $kunjungan->save();

        return redirect(url('/KunjunganPasien'))->with('success', 'Appointment scheduled successfully.');
    }

    public function view()
    {
        $userId = Auth::id();
        $kunjungans = Kunjungan::where('id', $userId)->get();
        return view('KunjunganPasienView', ['kunjungans' => $kunjungans]);
    }
}
