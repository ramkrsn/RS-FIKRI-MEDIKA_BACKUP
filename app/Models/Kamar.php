<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamars';
    protected $primaryKey="idkamar";
    protected $fillable = ["tipekamar", "harga", "jumlahkamar", "gedungkamar", "lantaikamar", "infokamar"]; 
    protected $guarded="idkamar";
}
