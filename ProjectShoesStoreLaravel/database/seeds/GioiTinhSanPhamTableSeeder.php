<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GioiTinhSanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('gioitinhsanpham')->insert([[
            'MaTLGTSP' => 'MTLSP01',
            'MaSPGT' => 'SP01',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaTLGTSP' => 'MTLSP02',
            'MaSPGT' => 'SP02',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaTLGTSP' => 'MTLSP03',
            'MaSPGT' => 'SP03',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ]);
    }
}
