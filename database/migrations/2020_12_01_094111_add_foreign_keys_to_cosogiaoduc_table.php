<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCosogiaoducTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cosogiaoduc', function (Blueprint $table) {
            $table->foreign('id_nguoiKD', 'cosogiaoduc_ibfk_1')->references('id_nguoiKD')->on('nguoikd')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cosogiaoduc', function (Blueprint $table) {
            $table->dropForeign('cosogiaoduc_ibfk_1');
        });
    }
}
