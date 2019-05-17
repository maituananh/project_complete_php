<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYeucauchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeucauch', function (Blueprint $table) {
            $table->increments('idYeuCauCH');
            $table->integer('idUsers_YCCH');
            $table->string('MaSPYC');
            $table->integer('soLuong');
            $table->integer('trangThai'); // 0. Chưa đọc, 1 chấp nhận yêu cầu và sẽ gửi, 2 không đáp ứng
            $table->string('noiDung');
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
        Schema::dropIfExists('yeucauch');
    }
}
