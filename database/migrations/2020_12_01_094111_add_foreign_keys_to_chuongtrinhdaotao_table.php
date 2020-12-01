<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToChuongtrinhdaotaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuongtrinhdaotao', function (Blueprint $table) {
            $table->foreign('id_nguoiKD', 'chuongtrinhdaotao_ibfk_1')->references('id_nguoiKD')->on('nguoikd')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chuongtrinhdaotao', function (Blueprint $table) {
            $table->dropForeign('chuongtrinhdaotao_ibfk_1');
        });
    }
}
