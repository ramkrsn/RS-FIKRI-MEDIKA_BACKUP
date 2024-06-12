<?php

namespace App\Http\Controllers;

use App\Models\JadwalPertemuan;
use Illuminate\Http\Request;
use Session;

class AdminReservasiObatController extends Controller
{
    public function index()
    {
        $jadwalpertemuan = JadwalPertemuan::where('status', 'done')->get();
        
        return view('admin.manage-obat', compact('jadwalpertemuan')); 
        $jadwalpertemuan->no_antrian = $this->generateQueueNumber($jadwalpertemuan->jampertemuan);
    }

    public function destroyantrian($idjadwalpertemuan)
    {
        $jadwalpertemuan = JadwalPertemuan::find($idjadwalpertemuan);
        if ($jadwalpertemuan) {
            $jadwalpertemuan->delete();
        }
        return redirect(url('/manage-reservasi'));
    }

    private function generateReservasiNumber($jampertemuan)
    {
        $reservasiMap = [
            '07:00:00' => 'P001',
            '07:30:00' => 'P002',
            '08:00:00' => 'P003',
            '08:30:00' => 'P004',
            '09:00:00' => 'P005',
            '09:30:00' => 'P006',
            '10:00:00' => 'P007',
            '10:30:00' => 'P008',
            '11:00:00' => 'P009',
            '11:30:00' => 'P010',
            '12:00:00' => 'P011',
            '12:30:00' => 'P012',
            '13:00:00' => 'P013',
            '13:30:00' => 'P014',
        ];

        \Log::info('jampertemuan: ' . $jampertemuan);
        return $reservasiMap[$jampertemuan] ?? 'N/A';
    }

    public function updateStatusReservasi(Request $request, $idjadwalpertemuan)
    {
        $statusAntrian = JadwalPertemuan::find($idjadwalpertemuan);
        $statusAntrian->statusobat = $request->input('status');
        $statusAntrian->save();

        Session::flash('success',"Status pasien dengan NIK $statusAntrian->NIK berhasil diubah menjadi $statusAntrian->status");
        return redirect('manage-reservasi');
    }


}
