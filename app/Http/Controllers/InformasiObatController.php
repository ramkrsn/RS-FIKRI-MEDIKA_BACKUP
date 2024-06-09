<?php

namespace App\Http\Controllers;

use App\Models\InformasiObat;
use Illuminate\Http\Request;

class InformasiObatController extends Controller
{
    // Menampilkan daftar semua informasi obat
    public function index()
    {
        // Mendapatkan semua data informasi obat dari database
        $informasiobat = InformasiObat::all();

        // Menampilkan view obat.index dan meneruskan data informasiobat ke dalam view
        return view('informasiobat.index', ['informasiobat' => $informasiobat]);
    }

    // Menampilkan form untuk membuat informasi obat baru
    public function create()
    {
         // Menampilkan formulir untuk membuat informasi obat baru
         return view('informasiobat.create');

    }

    // Menyimpan informasi obat baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        InformasiObat::create($request->all());

        return redirect()->route('informasiobat.index')
                         ->with('success', 'Informasi Obat berhasil ditambahkan.');
    }

    // Menampilkan detail informasi obat tertentu
    public function show(InformasiObat $informasiobat)
    {
        return view('informasiobat.show', compact('informasiobat'));
    }

    // Menampilkan form untuk mengedit informasi obat tertentu
    public function edit(InformasiObat $informasiobat)
    {
        return view('informasiobat.edit', compact('informasiobat'));
    }

    // Memperbarui informasi obat tertentu di database
    public function update(Request $request, InformasiObat $informasiobat)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $informasiobat->update($request->all());

        return redirect()->route('informasiobat.index')
                         ->with('success', 'Informasi Obat berhasil diupdate.');
    }

    // Menghapus informasi obat tertentu dari database
    public function destroy(InformasiObat $informasiobat)
    {
        $informasiobat->delete();

        return redirect()->route('informasiobat.index')
                         ->with('success', 'Informasi Obat berhasil dihapus.');
    }
}
