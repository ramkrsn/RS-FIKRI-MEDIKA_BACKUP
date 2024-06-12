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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id("idpasien")->primary();
            $table->string("namapasien");
            $table->bigInteger("nik")->unique();
            $table->integer("nomerkamar")->nullable();
            $table->bigInteger("no_hp");
            $table->integer("lantaikamar")->nullable();
            $table->string("penyakit")->nullable();
            $table->string("dokter")->nullable();
            $table->date("tanggal_masuk")->nullable();
            $table->date("tanggal_keluar")->nullable();
            $table->enum('status', ['rawat inap', 'rawat jalan', 'sudah pulang'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
