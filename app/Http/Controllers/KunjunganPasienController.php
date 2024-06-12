<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use App\Models\pasien;

class KunjunganPasienController extends Controller
{
    public function index()
    {
        // Mengambil semua data kunjungan
        $kunjungan = Kunjungan::all();

        $pasiens = pasien::all();
        
        // Mengambil pasien dengan status 'rawat inap' atau 'dirawat'
        $pasiens = pasien::whereIn('status', ['rawat inap'])->get();
        
        // Mengirim data kunjungan dan pasien ke view
        return view('KunjunganPasien', ['kunjungan' => $kunjungan, 'pasiens' => $pasiens]);
    }

    public function store(Request $request)
    {
        // Simpan data kunjungan ke database
        $kunjungan = new Kunjungan;
        $kunjungan->nama_depan = $request->nama_depan;
        $kunjungan->nama_belakang = $request->nama_belakang;
        $kunjungan->nik = $request->nik;
        $kunjungan->email = $request->email;
        $kunjungan->no_hp = $request->no_hp;
        $kunjungan->namapasien = $request->namapasien;
        $kunjungan->tanggal = $request->tanggal;
        $kunjungan->waktu = $request->waktu;
        $kunjungan->save();

        // // Mengambil detail pasien untuk ditampilkan dalam pop-up
        // $pasiens = Pasien::where('namapasien', $request->namapasien)->first();


        // // Menampilkan pop-up dengan detail kamar pasien
        // return redirect(url('/KunjunganPasien'))->with('patientDetails', [
        //     'Nama Pasien' => $pasiens->namapasien,
        //     'Kamar' => $pasiens->nomerkamar,
        //     'Lantai Kamar' => $pasiens->lantaikamar,
        // ]);
    }
}
