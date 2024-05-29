<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungans';
    protected $primarykey = 'idkunjungan';
    protected $fillable = ['nama_depan', 'nama_belakang', 'nik', 'email', 'no_hp', 'nama_pasien', 'id_pasien', 'tanggal', 'waktu'];
    protected $guarded = 'idkunjungan';
}
