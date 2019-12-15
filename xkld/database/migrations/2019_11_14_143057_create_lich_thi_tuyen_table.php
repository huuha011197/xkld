<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichThiTuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_thi_tuyen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donhang_id')->unsigned();
            $table->date('ngay_thi');
            $table->string('lich_bay');
            $table->timestamps();

            $table->foreign('donhang_id')->references('id')->on('don_hang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_thi_tuyen');
    }
}
