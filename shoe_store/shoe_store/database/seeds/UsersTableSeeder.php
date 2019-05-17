<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'address' => '196 Nguyễn Thiện Kế',
                'password' => 'admin',
                'role' => true,
                'city' => 'DaNang City',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'name' => 'khach',
                'email' => 'khach@gmail.com',
                'address' => 'khach',
                'password' => 'khach',
                'role' => false,
                'city' => 'DaNang City',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
        ]);
    }
}
