<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ChiTietHoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('chitiethoadon')->insert([[
            'MaSP' => "SP01",
            'idDonMuaHang' => 1,
            'soLuong' => 1,
            'gia' => 700,

            'size' => 41,
            'mau' => 'trắng',

            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' => "SP03",
            'idDonMuaHang' => 1,
            'soLuong' => 2,
            'gia' => 1200,

            'size' => 43,
            'mau' => 'đen',

            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' => "SP02",
            'idDonMuaHang' => 2,
            'soLuong' => 1,
            'gia' => 400,

            'size' => 38,
            'mau' => 'đen',
            
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
