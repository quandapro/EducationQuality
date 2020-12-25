<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCosogiaoducTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosogiaoduc', function (Blueprint $table) {
            $table->integer('id_CSGD', true);
            $table->string('ten_CSGD')->nullable();
            $table->integer('id_nguoiKD')->nullable()->index('id_nguoiKD');
            $table->date('ngay_kd')->nullable();
            $table->date('ngayHetHan_kd')->nullable();
            $table->integer('thoiHan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cosogiaoduc');
    }
}
