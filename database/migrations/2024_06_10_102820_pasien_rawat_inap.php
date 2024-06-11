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
            $table->integer("nomerkamar");
            $table->bigInteger("no_hp");
            $table->integer("lantaikamar");
            $table->string("penyakit");
            $table->string("dokter");
            $table->date("tanggal_masuk");
            $table->date("tanggal_keluar");
            $table->enum('status', ['rawat inap', 'rawat jalan', 'sudah pulang']);
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
