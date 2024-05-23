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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id("idkamar");
            $table->string("tipekamar");
            $table->bigInteger("harga");
            $table->integer("jumlahkamar");
            $table->string("gedunngkamar");
            $table->string("lantaikamar");
            $table->text("infokamar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
