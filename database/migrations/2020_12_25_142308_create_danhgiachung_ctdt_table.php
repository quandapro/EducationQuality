<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhgiachungCtdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhgiachung_ctdt', function (Blueprint $table) {
            $table->integer('id_CTDT')->index('id_CTDT');
            $table->float('mucTrungBinh', 10, 0);
            $table->integer('soTieuChiDat');
            $table->float('tiLeSoTieuChiDat', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhgiachung_ctdt');
    }
}
