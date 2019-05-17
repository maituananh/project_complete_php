<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ChiTietGioHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('chitietgiohang')->insert([[
            'idGioHang' => 1,
            'MaSP' => 'SP02',
            'soLuong' => 1,
            'gia' => 700,

            'size' => 38,
            'mau' => 'đen',

            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'idGioHang' => 1,
            'MaSP' => 'SP03',
            'soLuong' => 1,
            'gia' => 600,

            'size' => 43,
            'mau' => 'đen',

            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'idGioHang' => 2,
            'MaSP' => 'SP01',
            'soLuong' => 2,
            'gia' => 1.400,

            'size' => 41,
            'mau' => 'xanh',

            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
