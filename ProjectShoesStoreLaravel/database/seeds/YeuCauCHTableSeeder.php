<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class YeuCauCHTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('yeucauch')->insert([[
            'idUsers_YCCH' => 3,
            'MaSPYC' => 'SP02',
            'soLuong' => 50,
            'trangThai' => 1,
            'noiDung' => 'cần gấp giầy này bán rất chạy và đã hết hàng',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'idUsers_YCCH' => 3,
            'MaSPYC' => 'SP03',
            'soLuong' => 1,
            'trangThai' => 1,
            'noiDung' => 'không cần loại giầy này',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
