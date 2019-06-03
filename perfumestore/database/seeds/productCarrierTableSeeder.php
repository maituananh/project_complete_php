<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class productCarrierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *        Schema::create('productCarrier', function (Blueprint $table) {
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('productCarrier')->insert([
            [
                'name' => "hãng 1",
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ],
            [
                'name' => "hãng 2",
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]
        ]);
    }
}
