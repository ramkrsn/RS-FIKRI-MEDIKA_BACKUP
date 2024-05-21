<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        // Isi method index disini, misalnya:
        return view('artikel');
    }
}
