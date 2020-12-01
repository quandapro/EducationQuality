<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTieuchiCsgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tieuchi_csgd', function (Blueprint $table) {
            $table->foreign('id_CSGD', 'tieuchi_csgd_ibfk_1')->references('id_CSGD')->on('cosogiaoduc')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tieuchi_csgd', function (Blueprint $table) {
            $table->dropForeign('tieuchi_csgd_ibfk_1');
        });
    }
}
