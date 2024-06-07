<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Session;

class ObatController extends Controller
{
    public function showManageObat()
    {
        $data_obat = Obat::all();
        return view('admin.manage-obat', compact('data_obat'));
    }

    public function addObat(Request $request)
    {
        $request->validate([
            'nomor_resep' => 'required',
            'resep_obat' => 'required',
            'nomor_antrian' => 'required',
        ]);

        $createObat = Obat::create([
            'nomor_resep' => $request->input('nomor_resep'),
            'resep_obat' => $request->input('resep_obat'),
            'nomor_antrian' => $request->input('nomor_antrian'),
        ]);

        if($createObat) {
            Session::flash('success','Data Obat Berhasil Ditambahkan');
            return redirect('manage-obat');
        } else { 
            Session::flash('fail', 'Data Obat Gagal Ditambahkan');
            return redirect('manage-obat');
        }

        
    }

    public function deleteObat($id)
    {
        $deleteObat = Obat::find($id);
        $deleteObat->delete();   
        
        if($deleteObat) {
            Session::flash('successDeleteObat','Data berhasil dihapus');
            return redirect('manage-obat');
        } 
    }
}
