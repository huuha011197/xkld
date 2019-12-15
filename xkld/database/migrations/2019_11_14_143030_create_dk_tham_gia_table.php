<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDkThamGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dk_tham_gia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donhang_id')->unsigned();
            $table->tinyInteger('gioi_tinh');
            $table->string('doi_tuoi');
            $table->string('trinh_do_hv');
            $table->string('yc_kn');
            $table->string('yc_khac');
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
        Schema::dropIfExists('dk_tham_gia');
    }
}
