<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganPasienController extends Controller
{

    public function index()
    {
        $kunjungan = Kunjungan::all();
        return view('KunjunganPasien');
    }
    public function Store(Request $request)
    {
        $kunjungan= new Kunjungan;
        $kunjungan->nama_depan = $request->nama_depan;
        $kunjungan->nama_belakang = $request->nama_belakang;
        $kunjungan->nik = $request->nik;
        $kunjungan->email = $request->email;
        $kunjungan->no_hp = $request->no_hp;
        $kunjungan->nama_pasien = $request->nama_pasien;
        $kunjungan->id_pasien = $request->id_pasien;
        $kunjungan->tanggal = $request->tanggal;
        $kunjungan->waktu= $request->waktu;

        $kunjungan->save();
        return redirect(url('/KunjunganPasien'));
    }
}