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
        return redirect(url('/jadwalpertemuan'));
    }
}
