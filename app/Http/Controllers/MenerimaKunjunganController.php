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

}
