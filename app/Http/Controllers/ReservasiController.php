<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use App\Models\JadwalPertemuan;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $queues = Antrian::all();
        return view('MenerimaReservasi', ['queues' => $queues]);
    }
}
