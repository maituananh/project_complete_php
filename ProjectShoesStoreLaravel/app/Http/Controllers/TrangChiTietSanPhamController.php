<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrangChiTietSanPhamController extends Controller
{
    public function trangChiTietSanPham($MaSP) {
        $JoinSP = DB::table('cuahang')
        ->where('MaSP', '=', $MaSP)
        ->leftjoin('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
        ->leftjoin('nhapkho', 'xuatkho.MaSPXK', '=', 'nhapkho.MaSP')
        ->leftjoin('loai', 'nhapkho.maLoai', '=', 'loai.maLoai')  
        ->leftjoin('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
        ->leftjoin('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
        ->leftjoin('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
        ->leftjoin('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
        ->leftjoin('danhgia', 'danhgia.MaSanPham', '=', 'nhapkho.MaSP')
        ->leftjoin('hang', 'nhapkho.MaHang', '=', 'hang.MaHang')
        ->select('nhapkho.MaSP', 'xuatkho.soLuong', 'nhapkho.ten', 'xuatkho.gia', 'nhapkho.moTa', 'nhapkho.hinhAnh', 
        'loai.tenLoai', 'hang.tenHang', 'size.tenSize', 'mau.tenMau', 'danhgia.noiDung')
        ->get();
        return view('page.trangChiTietSanPham', ['joinSanPham' => $JoinSP]);
    }
}
