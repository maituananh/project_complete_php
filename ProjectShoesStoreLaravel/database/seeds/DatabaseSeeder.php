<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NhapKhoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CuaHangTableSeeder::class);
        $this->call(ChiTietGioHangTableSeeder::class);
        $this->call(DonMuaHangTableSeeder::class);
        $this->call(GioHangTableSeeder::class);
        $this->call(HangTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        $this->call(MauSanPhamTableSeeder::class);
        $this->call(ChiTietHoaDonTableSeeder::class);
        $this->call(MauTableSeeder::class);
        $this->call(PhanHoiTableSeeder::class);
        $this->call(SizeSanPhamTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ThongTinCaNhanTableSeeder::class);
        $this->call(DanhGiaTableSeeder::class);
        $this->call(GioiTinhSanPhamTableSeeder::class);
        $this->call(LoaiGioiTinhTableSeeder::class);
        $this->call(XuatKhoTableSeeder::class);
        $this->call(KhoTableSeeder::class);
        $this->call(YeuCauCHTableSeeder::class);
        $this->call(TrangThaiYCTableSeeder::class);
        $this->call(TraLoiYCTableSeeder::class);
    }
}
