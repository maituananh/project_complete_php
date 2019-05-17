<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhapkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhapkho', function (Blueprint $table) {
            $table->string('MaSP');
            $table->string('ten');
            $table->double('gia', 15, 3);
            $table->integer('soLuong');
            $table->string('hinhAnh');
            $table->string('moTa');
            $table->string('Mahang');
            $table->string('Maloai');
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
        Schema::dropIfExists('nhapkho');
    }
}
