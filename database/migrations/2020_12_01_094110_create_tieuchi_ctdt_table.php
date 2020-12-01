<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTieuchiCtdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieuchi_ctdt', function (Blueprint $table) {
            $table->integer('id_CTDT')->primary();
            $table->integer('tieuChuan1')->nullable();
            $table->tinyInteger('tieuChi1_1')->nullable();
            $table->tinyInteger('tieuChi1_2')->nullable();
            $table->tinyInteger('tieuChi1_3')->nullable();
            $table->integer('tieuChuan2')->nullable();
            $table->tinyInteger('tieuChi2_1')->nullable();
            $table->tinyInteger('tieuChi2_2')->nullable();
            $table->tinyInteger('tieuChi2_3')->nullable();
            $table->integer('tieuChuan3')->nullable();
            $table->tinyInteger('tieuChi3_1')->nullable();
            $table->tinyInteger('tieuChi3_2')->nullable();
            $table->tinyInteger('tieuChi3_3')->nullable();
            $table->integer('tieuChuan4')->nullable();
            $table->tinyInteger('tieuChi4_1')->nullable();
            $table->tinyInteger('tieuChi4_2')->nullable();
            $table->tinyInteger('tieuChi4_3')->nullable();
            $table->integer('tieuChuan5')->nullable();
            $table->tinyInteger('tieuChi5_1')->nullable();
            $table->tinyInteger('tieuChi5_2')->nullable();
            $table->tinyInteger('tieuChi5_3')->nullable();
            $table->tinyInteger('tieuChi5_4')->nullable();
            $table->tinyInteger('tieuChi5_5')->nullable();
            $table->integer('tieuChuan6')->nullable();
            $table->tinyInteger('tieuChi6_1')->nullable();
            $table->tinyInteger('tieuChi6_2')->nullable();
            $table->tinyInteger('tieuChi6_3')->nullable();
            $table->tinyInteger('tieuChi6_4')->nullable();
            $table->tinyInteger('tieuChi6_5')->nullable();
            $table->tinyInteger('tieuChi6_6')->nullable();
            $table->tinyInteger('tieuChi6_7')->nullable();
            $table->integer('tieuChuan7')->nullable();
            $table->tinyInteger('tieuChi7_1')->nullable();
            $table->tinyInteger('tieuChi7_2')->nullable();
            $table->tinyInteger('tieuChi7_3')->nullable();
            $table->tinyInteger('tieuChi7_4')->nullable();
            $table->tinyInteger('tieuChi7_5')->nullable();
            $table->integer('tieuChuan8')->nullable();
            $table->tinyInteger('tieuChi8_1')->nullable();
            $table->tinyInteger('tieuChi8_2')->nullable();
            $table->tinyInteger('tieuChi8_3')->nullable();
            $table->tinyInteger('tieuChi8_4')->nullable();
            $table->tinyInteger('tieuChi8_5')->nullable();
            $table->integer('tieuChuan9')->nullable();
            $table->tinyInteger('tieuChi9_1')->nullable();
            $table->tinyInteger('tieuChi9_2')->nullable();
            $table->tinyInteger('tieuChi9_3')->nullable();
            $table->tinyInteger('tieuChi9_4')->nullable();
            $table->tinyInteger('tieuChi9_5')->nullable();
            $table->integer('tieuChuan10')->nullable();
            $table->tinyInteger('tieuChi10_1')->nullable();
            $table->tinyInteger('tieuChi10_2')->nullable();
            $table->tinyInteger('tieuChi10_3')->nullable();
            $table->tinyInteger('tieuChi10_4')->nullable();
            $table->tinyInteger('tieuChi10_5')->nullable();
            $table->tinyInteger('tieuChi10_6')->nullable();
            $table->integer('tieuChuan11')->nullable();
            $table->tinyInteger('tieuChi11_1')->nullable();
            $table->tinyInteger('tieuChi11_2')->nullable();
            $table->tinyInteger('tieuChi11_3')->nullable();
            $table->tinyInteger('tieuChi11_4')->nullable();
            $table->tinyInteger('tieuChi11_5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tieuchi_ctdt');
    }
}
