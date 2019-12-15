<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('danhmuc_id')->unsigned();
            $table->string('name');
            $table->integer('so_luong');
            $table->string('cong_viec');
            $table->date('thoi_gian_hd');
            $table->string('dia_diem_lv');
            $table->integer('muc_luong');
            $table->string('quyen_loi');
            $table->timestamps();

            $table->foreign('danhmuc_id')->references('id')->on('danh_muc')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_hang');
    }
}
