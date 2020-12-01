<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTieuchiCsgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieuchi_csgd', function (Blueprint $table) {
            $table->integer('id_CSGD')->primary();
            $table->integer('tieuChuan1')->nullable();
            $table->tinyInteger('tieuChi1_1')->nullable();
            $table->tinyInteger('tieuChi1_2')->nullable();
            $table->integer('tieuChuan2')->nullable();
            $table->tinyInteger('tieuChi2_1')->nullable();
            $table->tinyInteger('tieuChi2_2')->nullable();
            $table->tinyInteger('tieuChi2_3')->nullable();
            $table->tinyInteger('tieuChi2_4')->nullable();
            $table->tinyInteger('tieuChi2_5')->nullable();
            $table->tinyInteger('tieuChi2_6')->nullable();
            $table->tinyInteger('tieuChi2_7')->nullable();
            $table->integer('tieuChuan3')->nullable();
            $table->tinyInteger('tieuChi3_1')->nullable();
            $table->tinyInteger('tieuChi3_2')->nullable();
            $table->tinyInteger('tieuChi3_3')->nullable();
            $table->tinyInteger('tieuChi3_4')->nullable();
            $table->tinyInteger('tieuChi3_5')->nullable();
            $table->tinyInteger('tieuChi3_6')->nullable();
            $table->integer('tieuChuan4')->nullable();
            $table->tinyInteger('tieuChi4_1')->nullable();
            $table->tinyInteger('tieuChi4_2')->nullable();
            $table->tinyInteger('tieuChi4_3')->nullable();
            $table->tinyInteger('tieuChi4_4')->nullable();
            $table->tinyInteger('tieuChi4_5')->nullable();
            $table->tinyInteger('tieuChi4_6')->nullable();
            $table->tinyInteger('tieuChi4_7')->nullable();
            $table->integer('tieuChuan5')->nullable();
            $table->tinyInteger('tieuChi5_1')->nullable();
            $table->tinyInteger('tieuChi5_2')->nullable();
            $table->tinyInteger('tieuChi5_3')->nullable();
            $table->tinyInteger('tieuChi5_4')->nullable();
            $table->tinyInteger('tieuChi5_5')->nullable();
            $table->tinyInteger('tieuChi5_6')->nullable();
            $table->tinyInteger('tieuChi5_7')->nullable();
            $table->tinyInteger('tieuChi5_8')->nullable();
            $table->integer('tieuChuan6')->nullable();
            $table->tinyInteger('tieuChi6_1')->nullable();
            $table->tinyInteger('tieuChi6_2')->nullable();
            $table->tinyInteger('tieuChi6_3')->nullable();
            $table->tinyInteger('tieuChi6_4')->nullable();
            $table->tinyInteger('tieuChi6_5')->nullable();
            $table->tinyInteger('tieuChi6_6')->nullable();
            $table->tinyInteger('tieuChi6_7')->nullable();
            $table->tinyInteger('tieuChi6_8')->nullable();
            $table->tinyInteger('tieuChi6_9')->nullable();
            $table->integer('tieuChuan7')->nullable();
            $table->tinyInteger('tieuChi7_1')->nullable();
            $table->tinyInteger('tieuChi7_2')->nullable();
            $table->tinyInteger('tieuChi7_3')->nullable();
            $table->tinyInteger('tieuChi7_4')->nullable();
            $table->tinyInteger('tieuChi7_5')->nullable();
            $table->tinyInteger('tieuChi7_6')->nullable();
            $table->tinyInteger('tieuChi7_7')->nullable();
            $table->integer('tieuChuan8')->nullable();
            $table->tinyInteger('tieuChi8_1')->nullable();
            $table->tinyInteger('tieuChi8_2')->nullable();
            $table->tinyInteger('tieuChi8_3')->nullable();
            $table->integer('tieuChuan9')->nullable();
            $table->tinyInteger('tieuChi9_1')->nullable();
            $table->tinyInteger('tieuChi9_2')->nullable();
            $table->tinyInteger('tieuChi9_3')->nullable();
            $table->tinyInteger('tieuChi9_4')->nullable();
            $table->tinyInteger('tieuChi9_5')->nullable();
            $table->tinyInteger('tieuChi9_6')->nullable();
            $table->tinyInteger('tieuChi9_7')->nullable();
            $table->tinyInteger('tieuChi9_8')->nullable();
            $table->tinyInteger('tieuChi9_9')->nullable();
            $table->integer('tieuChuan10')->nullable();
            $table->tinyInteger('tieuChi10_1')->nullable();
            $table->tinyInteger('tieuChi10_2')->nullable();
            $table->tinyInteger('tieuChi10_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tieuchi_csgd');
    }
}
