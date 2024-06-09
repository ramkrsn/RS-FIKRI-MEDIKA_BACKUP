<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\jadwalpertemuan;
use Session;

class ObatController extends Controller
{
    public function showManageObat()
    {
        $data_obat = Obat::all();
        $id_pertemuan = jadwalpertemuan::all();
        return view('admin.manage-obat', compact('data_obat', 'id_pertemuan'));
    }

    public function addObat(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'resep_obat' => 'required',
            'idjadwalpertemuan' => 'required',
        ]);

        $createObat = Obat::create([
            'nama_obat' => $request->input('nama_obat'),
            'resep_obat' => $request->input('resep_obat'),
            'nomor_antrian' => $request->input('idjadwalpertemuan'),
            'idjadwalpertemuan' => $request->input('idjadwalpertemuan'),
        ]);

        if($createObat) {
            Session::flash('success','Data Obat Berhasil Ditambahkan');
            return redirect('manage-obat');
        } else { 
            Session::flash('fail', 'Data Obat Gagal Ditambahkan');
            return redirect('manage-obat');
        }
    }

    public function editObat(Request $request, string $id){
        $artikel = Obat::find($id);

        $request->validate([
            'nama_obat' => 'required',
            'resep_obat' => 'required',
            'idjadwalpertemuan' => 'required',
        ]);

        $artikel->nama_obat = $request->input('nama_obat');
        $artikel->resep_obat = $request->input('resep_obat');
        $artikel->idjadwalpertemuan = $request->input('idjadwalpertemuan');

        $artikel->save();

        if($artikel) {
            return redirect()->back()->with('success', 'Data Berhasil Diubah');

        } else {
            dd('asdas');
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

    public function showReservasiObat()
    {
        $data_obat = Obat::all();
        return view('admin.reservasi-obat', compact('data_obat'));
    }

    public function updateStatusReservasi(Request $request, $id)
    {
        $statusReservasi = Obat::find($id);
        $statusReservasi->status = $request->input('status');
        $statusReservasi->save();

        Session::flash('success',"Data berhasil diubah menjadi $statusReservasi->status");
        return redirect('reservasi-obat');
    }

    public function deleteReservasi($id)
    {
        $deleteReservasi = Obat::find($id);        
        $deleteReservasi->delete();
        
        if($deleteReservasi) {
            Session::flash('success','Data berhasil dihapus');
            return redirect('reservasi-obat');
        } else {
            Session::flash('fail','Data gagal dihapus');
            return redirect('reservasi-obat');
        }
    }
    
}

