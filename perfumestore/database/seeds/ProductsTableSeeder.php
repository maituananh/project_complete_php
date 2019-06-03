<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductsTableSeeder extends Seeder
{
    /**
     * $table->increments('id_products');
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('products')->insert([[
            'name' => "nước hoa 1",
            'price' => '200',
            'image' => "image_1.jpg",
            'detail' => 'xyz',
            'quantity' => "100",
            'product_carrier' => '1',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'name' => "nước hoa 2",
            'price' => '400',
            'image' => "image_2.jpg",
            'detail' => 'xyz',
            'quantity' => "100",
            'product_carrier' => '1',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'name' => "nước hoa 3",
            'price' => '400',
            'image' => "image_3.jpg",
            'detail' => 'xyz',
            'quantity' => "100",
            'product_carrier' => '1',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'name' => "nước hoa 4",
            'price' => '400',
            'image' => "image_4.jpg",
            'detail' => 'xyz',
            'quantity' => "100",
            'product_carrier' => '1',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'name' => "nước hoa 5",
            'price' => '400',
            'image' => "image_5.jpg",
            'detail' => 'xyz',
            'quantity' => "100",
            'product_carrier' => '1',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'name' => "nước hoa 6",
            'price' => '400',
            'image' => "image_6.jpg",
            'detail' => 'xyz',
            'quantity' => "100",
            'product_carrier' => '1',
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]
        ]);
    }
}
