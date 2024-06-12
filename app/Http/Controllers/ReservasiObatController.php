<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPertemuan;
use Session;

class ReservasiObatController extends Controller
{
    public function index(Request $request)
    {
        $date = $request->input('date');
        $query = JadwalPertemuan::where('status', 'done');

        // If a date is specified, filter the results by that date
        if ($date) {
            $query->whereDate('tanggalpertemuan', $date);
        }

        // Fetch records ordered by date and time
        $reservasiobat = $query->orderBy('tanggalpertemuan')
            ->orderBy('jampertemuan')
            ->get();

        // Loop through each reservation and calculate the queue number
        foreach ($reservasiobat as $reservation) {
            $reservation->nomor_antrian = $this->generateQueueNumber($reservation->tanggalpertemuan, $reservation->jampertemuan);
        }
        
        // Pass the filtered records to the view
        return view('admin.reservasi-obat', [
            'reservasiobat' => $reservasiobat,
            'date' => $date // Pass the date for the form
        ]);
    }

    private function generateQueueNumber($tanggalpertemuan, $jampertemuan)
    {
        // Fetch all appointments for the same date up to the current time slot
        $count = JadwalPertemuan::where('tanggalpertemuan', $tanggalpertemuan)
            ->where('jampertemuan', '<=', $jampertemuan)
            ->count();

        // Generate the queue number based on the count
        return sprintf('P%03d', $count);
    }

    public function addReservasi(Request $request, $idjadwalpertemuan)
    {
        $statusObat = JadwalPertemuan::find($idjadwalpertemuan);
        $statusObat->statusobat = $request->input('statusobat');
        $statusObat->save();

        Session::flash('success', "Status Obat berhasil diubah menjadi $statusObat->statusobat");
        return redirect('/reservasi-obat');
    }
}
