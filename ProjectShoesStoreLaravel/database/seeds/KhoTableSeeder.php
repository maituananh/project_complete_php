<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class KhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('kho')->insert([[
            'MaSPNK' => "SP01",
            'trangThaiXK' => 1,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSPNK' => "SP02",
            'trangThaiXK' => 1,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSPNK' => "SP03",
            'trangThaiXK' => 0,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ,
        [
            'MaSPNK' => "SP04",
            'trangThaiXK' => 1,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ,
        [
            'MaSPNK' => "SP05",
            'trangThaiXK' => 1,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ,
        [
            'MaSPNK' => "SP06",
            'trangThaiXK' => 1,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ]);
    }
}
