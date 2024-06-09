<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiObat extends Model
{
    use HasFactory;

    protected $table = 'informasiobat'; // Menentukan nama tabel secara manual

    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
