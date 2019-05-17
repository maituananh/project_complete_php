<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DanhGiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('danhgia')->insert([[
            'MaSanPham' => "SP01",
            'IdUsers' => 1,
            'noiDung' => "sản phẩm rất tốt, mang vừa chân",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSanPham' => "SP02",
            'IdUsers' => 2,
            'noiDung' => "sản phẩm rất tốt, mang vừa chân",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSanPham' => "SP03",
            'IdUsers' => 1,
            'noiDung' => "sản phẩm rất tốt, mang vừa chân, và ấm, đi êm",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
