<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        // Mengambil data fasilitas beserta nama_obat dan deskripsi_obat
        $fasilitas = Fasilitas::orderBy('nama_fasilitas')->get();

        return view('Fasilitas.fasilitas', compact('fasilitas'));
    }
}
