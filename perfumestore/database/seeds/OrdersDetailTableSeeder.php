<?php

use Illuminate\Database\Seeder;

class OrdersDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *Schema::create('ordersdetail', function (Blueprint $table) {
            $table->increments('id_ordersdetail');
            $table->integer('id_orders');
            $table->integer('id_Products');
            $table->string('price');
            $table->integer('quantity');
            $table->date('ngayTao');
            $table->time('gioTao');
            $table->date('ngaySua');
            $table->time('gioSua');
        });
     * @return void
     */
    public function run()
    {
        //không có dữ liệu mẫu
    }
}
