<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat'; // Menentukan nama tabel secara manual

    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
