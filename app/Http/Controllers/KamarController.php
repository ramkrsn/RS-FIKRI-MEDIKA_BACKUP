<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('ManajemenKamar', ['kamars' => $kamars]); // Change 'Kamar' to 'kamars'
    }

    public function createkamar(Request $request)
    {
        $kamar = new Kamar; // Change 'Doctor' to 'Kamar'
        $kamar->tipekamar = $request->tipekamar;
        $kamar->harga = $request->harga;
        $kamar->jumlahkamar = $request->jumlahkamar;
        $kamar->gedungkamar = $request->gedungkamar;
        $kamar->lantaikamar = $request->lantaikamar;
        $kamar->infokamar = $request->infokamar;
        $kamar->save();
        return redirect(url('/kamar')); // Adjust the redirect URL if needed
    }
}
