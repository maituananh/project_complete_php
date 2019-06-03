<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCarrierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productCarrier', function (Blueprint $table) {
            $table->increments('id_productCarrier');
            $table->string('name');
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
        Schema::dropIfExists('productCarrier');
    }
}
