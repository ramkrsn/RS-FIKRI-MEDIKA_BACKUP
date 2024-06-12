<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwalpertemuans', function (Blueprint $table) {
            $table->id("idjadwalpertemuan");
            $table->string("namadepan");
            $table->string("namabelakang");
            $table->bigInteger("NIK");
            $table->text("keluhanpasien");
            $table->date("tanggalpertemuan");
            $table->time("jampertemuan");
            $table->string('polidokter'); 
            $table->string('namadokter'); 
            $table->string("opsi");
            $table->string("status")->default("pending");

            $table->string("nomerantrian");
            $table->string("statusobat")->default("pending");

            $table->integer("id");

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwalpertemuans');
    }
};
