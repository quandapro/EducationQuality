<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNguoikdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nguoikd', function (Blueprint $table) {
            $table->foreign('id_user', 'nguoikd_ibfk_1')->references('id_user')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_DVKD', 'nguoikd_ibfk_2')->references('id_DVKD')->on('donvikiemdinh')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nguoikd', function (Blueprint $table) {
            $table->dropForeign('nguoikd_ibfk_1');
            $table->dropForeign('nguoikd_ibfk_2');
        });
    }
}
