<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTieuchiCtdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tieuchi_ctdt', function (Blueprint $table) {
            $table->foreign('id_CTDT', 'tieuchi_ctdt_ibfk_1')->references('id_CTDT')->on('chuongtrinhdaotao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tieuchi_ctdt', function (Blueprint $table) {
            $table->dropForeign('tieuchi_ctdt_ibfk_1');
        });
    }
}
