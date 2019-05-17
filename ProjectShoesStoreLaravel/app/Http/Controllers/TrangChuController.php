<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\SanPhamModel;
class TrangChuController extends Controller
{
    public function trangChu() {
        try {
            $ListSanPham = DB::table('cuahang')
            ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
            ->join('nhapkho', 'xuatkho.MaSPXK', '=', 'nhapkho.MaSP')
            ->select('cuahang.MaSPCH', 'cuahang.trangThaiSP',
            'nhapkho.ten', 'nhapkho.hinhAnh', 'xuatkho.gia', 'xuatkho.soLuong')
            ->get();
            return view("page.trangChu", ['SANPHAM' => $ListSanPham]);
        }catch(\Exception $e) {
            return view('page.trangLoiKetNoi');
        }
    }
}
