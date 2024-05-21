<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPertemuan extends Model
{
    use HasFactory;
    protected $table = 'jadwalpertemuans';
    protected $primaryKey="idjadwalpertemuan";
    protected $fillable = ["namadepan", "namabelakang", "NIK", "keluhanpasien", "tanggalpertemuan", "jampertemuan", "polidokter", "namadokter", "opsi"]; 
    protected $guarded="idjadwalpertemuan";
}
