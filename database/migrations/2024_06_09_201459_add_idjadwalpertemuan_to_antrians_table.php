<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdjadwalpertemuanToAntriansTable extends Migration
{
    public function up()
    {
        Schema::table('antrians', function (Blueprint $table) {
            $table->unsignedBigInteger('idjadwalpertemuan')->after('id_antrian');
            $table->index('idjadwalpertemuan');
        });
    }

    public function down()
    {
        Schema::table('antrians', function (Blueprint $table) {
            $table->dropColumn('idjadwalpertemuan');
            $table->dropIndex(['idjadwalpertemuan']);
        });
    }
}