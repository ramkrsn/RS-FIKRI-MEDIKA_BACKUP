<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('jadwalpertemuans', function (Blueprint $table) {
            $table->string('statusobat')->default('pending');
        });
    }

    public function down(): void
    {
        Schema::table('jadwalpertemuans', function (Blueprint $table) {
            $table->dropColumn('statusobat');
        });
    }
};
