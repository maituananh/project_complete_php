<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TrangThaiYCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('trangthaiyc')->insert([[
            'idTrangThaiYC' => 1,
            'tenTrangThaiYC' => "Chưa đọc",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'idTrangThaiYC' => 2,
            'tenTrangThaiYC' => "Chấp nhận",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'idTrangThaiYC' => 3,
            'tenTrangThaiYC' => "Không chấp nhận",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ]);
    }
}
