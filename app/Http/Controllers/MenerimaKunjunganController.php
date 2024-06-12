<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use App\Models\pasien;

class MenerimaKunjunganController extends Controller
{
    public function index()
    {
        $pasiens = pasien::all();

        $kunjungans = Kunjungan::with('pasien')->get();

        return view('AdminKunjunganPasien', [
            'kunjungans' => $kunjungans
        ]);
    }

    

    // public function deletekunjungan($idkunjungan) // Accept idkunjungan as parameter
    // {
    //     $kunjungan = Kunjungan::find($idkunjungan); // Correctly reference the primary key
    //     if ($kunjungan) {
    //         $kunjungan->delete();
    //     }
    //     return redirect(url('menerimakunjungan'));
    // }
}
