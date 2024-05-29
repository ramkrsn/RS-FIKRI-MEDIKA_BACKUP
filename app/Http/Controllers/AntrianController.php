<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\Obat;
use Carbon\Carbon;

class AntrianController extends Controller
{
    public function home()
    {
        return view('mobile');
    }

    public function showAntrian()
    {
        return view('antrian.index');
    }

    public function index(){
        $queues = Antrian::all()->map(function($queue) {
         $queue->tanggal = Carbon::parse($queue->tanggal)->translatedFormat('d F Y');
         return $queue;
     });
         return view('antrian.index', compact('queues'));
    }

    public function getAntrianObat()
    {
        $data_antrian_obat = Obat::all();
        return view('antrian.antrian-obat', compact('data_antrian_obat'));
    }

    
}
