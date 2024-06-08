<?php

namespace App\Http\Controllers;
use App\Models\JadwalPertemuan;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $doctors = JadwalPertemuan::all();
        return view('MenerimaReservasi', ['doctors' => $doctors]);
    }
}