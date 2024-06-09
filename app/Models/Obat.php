<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'medicine';
    protected $fillable = [
        'nama_obat',
        'nomor_resep',
        'resep_obat',
        'nomor_antrian',
    ];
}
