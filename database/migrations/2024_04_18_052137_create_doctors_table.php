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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id("iddokter");
            $table->string("namadokter");
            $table->time("seninstart");
            $table->time("seninend");
            $table->time("selasastart");
            $table->time("selasaend");
            $table->time("rabustart");
            $table->time("rabuend");
            $table->time("kamisstart");
            $table->time("kamisend");
            $table->time("jumatstart");
            $table->time("jumatend");
            $table->time("sabtustart");
            $table->time("sabtuend");
            $table->string("polidokter");
            $table->string("wajahdokter");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
