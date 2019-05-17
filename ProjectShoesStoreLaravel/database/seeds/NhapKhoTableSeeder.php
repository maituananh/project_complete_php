<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class NhapKhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('nhapkho')->insert([[
            'MaSP' =>"SP01",
            'ten' => "Nike Maca",
            'gia' => "590",
            'soLuong' => "90",
            'hinhAnh' => "item-1.jpg",
            'moTa' => "đây là sản phẩm tốt",
            'Mahang' => "MH03",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP02",
            'ten' => "Nike Meaghan",
            'gia' => "700",
            'soLuong' => "100",
            'hinhAnh' => "item-2.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH03",
            'Maloai' => "ML02",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP03",
            'ten' => "Nike Air Force",
            'gia' => "800",
            'soLuong' => "80",
            'hinhAnh' => "item-3.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH03",
            'Maloai' => "ML02",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP04",
            'ten' => "Nike Vapor Max",
            'gia' => "300",
            'soLuong' => "80",
            'hinhAnh' => "item-4.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH03",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP05",
            'ten' => "Adidas Prophere",
            'gia' => "100",
            'soLuong' => "300",
            'hinhAnh' => "item-5.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH01",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP06",
            'ten' => "Adidas Alphabounce Instinct",
            'gia' => "900",
            'soLuong' => "320",
            'hinhAnh' => "item-6.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH01",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP07",
            'ten' => "ADIDAS SUPERSTAR GOLDEN BRAND",
            'gia' => "1000",
            'soLuong' => "320",
            'hinhAnh' => "item-7.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH01",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP08",
            'ten' => "Puma Suede Classic",
            'gia' => "2000",
            'soLuong' => "100",
            'hinhAnh' => "item-8.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH02",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP09",
            'ten' => "Puma Platform",
            'gia' => "2050",
            'soLuong' => "100",
            'hinhAnh' => "item-9.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH02",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ],
        [
            'MaSP' =>"SP10",
            'ten' => "Puma Basket Heart Teddy",
            'gia' => "3050",
            'soLuong' => "200",
            'hinhAnh' => "item-10.jpg",
            'moTa' => "đây là sản phẩm tuyệt vời",
            'Mahang' => "MH02",
            'Maloai' => "ML01",
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]]);
    }
}
