<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuongtrinhdaotaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinhdaotao', function (Blueprint $table) {
            $table->integer('id_CTDT', true);
            $table->string('ten_CTDT')->nullable();
            $table->integer('id_nguoiKD')->nullable()->index('id_nguoiKD');
            $table->date('ngay_kd')->nullable();
            $table->date('ngayHetHan_kd')->nullable();
            $table->integer('thoiHan')->nullable();
            $table->text('vanBan_kd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chuongtrinhdaotao');
    }
}
