<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Doctor; 
use Illuminate\Validation\ValidationException;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasiens.index', ['pasiens' => $pasiens]);
    }

    public function createpasien()

    {
        $statusEnum = ['rawat inap', 'rawat jalan', 'sudah pulang'];
        $dokters = Doctor::all(); // Mengambil semua data dokter dari tabel dokter
        return view('pasiens.create', compact('statusEnum', 'dokters'));
    }

    public function store(Request $request)
    {
            $pasien = new Pasien;
            $pasien->namapasien = $request->namapasien;
            $pasien->nik = $request->nik;
            $pasien->nomerkamar = $request->nomerkamar;
            $pasien->no_hp = $request->no_hp;
            $pasien->lantaikamar = $request->lantaikamar;
            $pasien->penyakit = $request->penyakit;
            $pasien->dokter = $request->namadokter;
            $pasien->tanggal_masuk = $request->tanggal_masuk;
            $pasien->tanggal_keluar = $request->tanggal_keluar;
            $pasien->status = $request->status;
            $pasien->save();


            return redirect(url('/pasien'))->with('success', 'Pasien created successfully');
    }

    public function editpasien($id)
    {
        $pasien = Pasien::find($id);
        $statusEnum = ['rawat inap', 'rawat jalan', 'sudah pulang'];
        $dokters = Doctor::all();
        return view('pasiens.edit', compact('pasien', 'statusEnum', 'dokters'));
    }

    public function updatepasien(Request $request, $id)
    {

            $pasien = Pasien::find($id);
            $pasien->nomerkamar = $request->nomerkamar;
            $pasien->no_hp = $request->no_hp;
            $pasien->lantaikamar = $request->lantaikamar;
            $pasien->penyakit = $request->penyakit;
            $pasien->dokter = $request->namadokter;
            $pasien->tanggal_masuk = $request->tanggal_masuk;
            $pasien->tanggal_keluar = $request->tanggal_keluar;
            $pasien->status = $request->status;
            $pasien->save();

          

            return redirect(url('/pasien'))->with('success', 'Pasien updated successfully');
    }

}
