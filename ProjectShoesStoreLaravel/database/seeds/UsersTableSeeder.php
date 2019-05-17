<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('users')->insert([[
            'usersName' => "adminshoes",
            'password' => "admin",
            'idRole' => 1,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'usersName' => "maituananh",
            'password' => "maituananh",
            'idRole' => 2,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'usersName' => "quanLyCuaHang",
            'password' => "123",
            'idRole' => 3,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ]);
    }
    
}
