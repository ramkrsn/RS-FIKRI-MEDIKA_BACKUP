<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id("idkunjungan");
            $table->string("nama_depan");
            $table->string("nama_belakang");
            $table->bigInteger("nik");
            $table->string("email");
            $table->bigInteger("no_hp");
            $table->unsignedBigInteger('idpasien')->nullable();
            $table->foreign('idpasien')->references('idpasien')->on('pasiens')->onDelete('set null');
            $table->date('tanggal');
            $table->time('waktu');
            $table->integer('id');
            $table->timestamps();
        }); 
    }

    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};

