<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('size')->insert([[
            'MaSize' => "MS01",
            'tenSize' => "38",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSize' => "MS02",
            'tenSize' => "39",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSize' => "MS03",
            'tenSize' => "40",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSize' => "MS04",
            'tenSize' => "41",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSize' => "MS05",
            'tenSize' => "42",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSize' => "MS06",
            'tenSize' => "43",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
