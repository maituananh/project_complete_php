<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TraLoiYCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('traloiyc')->insert([[
            'idUserTLYC' => 1,
            'idYCCH_TLYC' => 1,
            'noiDungTLYC' => "kho hàng sẽ giao hàng sớm cho cửa hàng",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'idUserTLYC' => 1,
            'idYCCH_TLYC' => 2,
            'noiDungTLYC' => "kho đã nhận được yêu cầu của cửa hàng",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ]);
    }
}
