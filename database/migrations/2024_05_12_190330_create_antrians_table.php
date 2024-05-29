<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id("id_antrian");
            $table->string("no_antrian");
            $table->string("nama_pasien");
            $table->string("keluhan");
            $table->string("dokter");
            $table->string("poli");
            $table->date("tanggal");
            $table->string("est_jadwal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
