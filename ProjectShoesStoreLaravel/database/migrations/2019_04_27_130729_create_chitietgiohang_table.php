<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietgiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietgiohang', function (Blueprint $table) {
            $table->increments('idChiTietGioHang');
            $table->integer('idGioHang');
            $table->string('MaSP');
            $table->integer('soLuong');

            $table->string('mau');
            $table->integer('size');

            $table->double('gia');
            $table->date('ngayTao');
            $table->time('gioTao');
            $table->date('ngaySua');
            $table->time('gioSua');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietgiohang');
    }
}
