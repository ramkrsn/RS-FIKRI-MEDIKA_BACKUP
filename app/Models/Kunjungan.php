<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungans';
    protected $primaryKey = 'idkunjungan'; // Correct primary key
    protected $fillable = ['nama_depan', 'nama_belakang', 'nik', 'email', 'no_hp', 'namapasien', 'tanggal', 'waktu'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'idpasien');
    }
}
