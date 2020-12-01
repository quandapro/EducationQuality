<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoikdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoikd', function (Blueprint $table) {
            $table->integer('id_nguoiKD', true);
            $table->integer('id_user')->nullable()->index('id_user');
            $table->string('full_name')->nullable();
            $table->date('ngaySinh')->nullable();
            $table->string('queQuan')->nullable();
            $table->integer('id_DVKD')->nullable()->index('id_DVKD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoikd');
    }
}
