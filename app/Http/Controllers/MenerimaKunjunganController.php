<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class MenerimaKunjunganController extends Controller
{
    public function index()
    {
        $kunjungans = Kunjungan::all();
        return view('AdminKunjunganPasien', ['kunjungans' => $kunjungans]);
    }

    public function deletekunjungan($idkunjungan) // Accept idkunjungan as parameter
    {
        $kunjungan = Kunjungan::find($idkunjungan); // Correctly reference the primary key
        if ($kunjungan) {
            $kunjungan->delete();
        }
        return redirect(url('menerimakunjungan'));
    }
}
