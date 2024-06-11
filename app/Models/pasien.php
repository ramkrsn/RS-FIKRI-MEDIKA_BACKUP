<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $primaryKey="idpasien";
    protected $fillable = ["namapasien", "nik", "nomerkamar", "no_hp", "tanggal_masuk", "tanggal_keluar", "lantaikamar", "infokamar", "penyakit", "dokter", "tanggal_masuk", "tanggal_keluar", "status"]; 
    protected $guarded="idpasien";
    public function status()
    {
        return $this->hasOne(statuspasiens::class, 'idpasien');
    }
}

