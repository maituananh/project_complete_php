<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ThongTinCaNhanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('thongtincanhan')->insert([[
            'ten' => "admin mai tuấn anh",
            'tuoi' => "21",
            'email' => "maituananh12061998@gmail.com",
            'phone' => "0774349901",
            'diaChi' => "196 Nguyễn Thiện Kế",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'ten' => "Nguyễn Văn A",
            'tuoi' => "24",
            'email' => "nguyenvana@gmail.com",
            'phone' => "0336654852",
            'diaChi' => "196 phạm cự lượng",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'ten' => "Người quản lý",
            'tuoi' => "40",
            'email' => "quanly@gmail.com",
            'phone' => "0336654852",
            'diaChi' => "196 ngô quyền",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
