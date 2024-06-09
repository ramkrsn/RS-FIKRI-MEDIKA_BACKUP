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
            $table->time("seninstart")->nullable();
            $table->time("seninend")->nullable();
            $table->time("selasastart")->nullable();
            $table->time("selasaend")->nullable();
            $table->time("rabustart")->nullable();
            $table->time("rabuend")->nullable();
            $table->time("kamisstart")->nullable();
            $table->time("kamisend")->nullable();
            $table->time("jumatstart")->nullable();
            $table->time("jumatend")->nullable();
            $table->time("sabtustart")->nullable();
            $table->time("sabtuend")->nullable();
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
