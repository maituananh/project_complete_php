<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersdetail', function (Blueprint $table) {
            $table->increments('id_ordersdetail');
            $table->integer('id_ordersOrdersdetail');
            $table->integer('id_ProductsOrdersdetail');
            $table->string('price');
            $table->integer('quantity');
            $table->string('status');
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
        Schema::dropIfExists('ordersdetail');
    }
}
