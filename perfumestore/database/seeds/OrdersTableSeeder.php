<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_orders');
            $table->integer('id_users');
            $table->string('totalMoney');
            $table->date('ngayTao');
            $table->time('gioTao');
            $table->date('ngaySua');
            $table->time('gioSua');
     * @return void
     */
    public function run()
    {
        // không có dữ liệu mẫu
    }
}
