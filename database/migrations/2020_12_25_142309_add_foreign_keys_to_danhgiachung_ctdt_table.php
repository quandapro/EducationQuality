<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDanhgiachungCtdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danhgiachung_ctdt', function (Blueprint $table) {
            $table->foreign('id_CTDT', 'danhgiachung_ctdt_ibfk_1')->references('id_CTDT')->on('tieuchi_ctdt')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('danhgiachung_ctdt', function (Blueprint $table) {
            $table->dropForeign('danhgiachung_ctdt_ibfk_1');
        });
    }
}
