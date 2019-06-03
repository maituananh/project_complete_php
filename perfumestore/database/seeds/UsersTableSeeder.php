<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *        Schema::create('users', function (Blueprint $table) {
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('users')->insert([
            [
                'Name' => 'nguyen van a',
                'birthday' => '12-6',
                'email' => 'nguyenvana@gmail.com',
                'address' => '19 nguyen van linh',
                'username' => 'admin',
                'password' => 'admin',
                'roles' => 1,
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ],
            [
                'Name' => 'nguyen van b',
                'birthday' => '6-12',
                'email' => 'nguyenvanb@gmail.com',
                'address' => '19 nguyen van thoai',
                'username' => 'khachhang',
                'password' => 'khachhang',
                'roles' => 0,
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ],
            [
                'Name' => 'nguyen van c',
                'birthday' => '13-9',
                'email' => 'nguyenvanc@gmail.com',
                'address' => '19 nguyen van cu',
                'username' => 'quanlycuahang',
                'password' => 'quanlycuahang',
                'roles' => 2,
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]
            ]);
    }
}
