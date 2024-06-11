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
            $table->string("namapasien");
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};
