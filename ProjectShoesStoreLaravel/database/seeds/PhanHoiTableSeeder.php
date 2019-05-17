<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PhanHoiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('phanhoi')->insert([[
            'IdChiTietHoaDon' => 3,
            'NoiDung' => "hàng hóa tốt không có vấn đề gì good",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'IdChiTietHoaDon' => 1,
            'NoiDung' => "hàng hóa không được tốt cho lắm",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
