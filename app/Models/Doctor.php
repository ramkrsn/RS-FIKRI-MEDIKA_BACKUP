<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        "namadokter",
        "seninstart",
        "seninend",
        "selasastart",
        "selasaend",
        "rabustart",
        "rabuend",
        "kamisstart",
        "kamisend",
        "jumatstart",
        "jumatend",
        "sabtustart",
        "sabtuend",
        "polidokter",
        "wajahdokter"
    ];

    protected $primaryKey = "iddokter";
    protected $guarded="iddokter";
}
