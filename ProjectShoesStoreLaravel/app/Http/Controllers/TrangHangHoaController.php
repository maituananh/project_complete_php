<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Session;
class TrangHangHoaController extends Controller
{
    public function DanhSachgiohang(Request $request) {
        $JoinGioHang = DB::table('users')
        ->where('idUsers', '=', $request->session()->get('idUsers'))
        ->join('giohang', 'users.idUsers', '=', 'giohang.gioHang_idUsers')
        ->join('chitietgiohang', 'giohang.idGioHang', '=', 'chitietgiohang.idGioHang')
        ->join('nhapkho', 'nhapkho.MaSP', '=', 'chitietgiohang.MaSP')
        ->select('chitietgiohang.idChiTietGioHang', 'chitietgiohang.MaSP', 'chitietgiohang.soLuong', 'chitietgiohang.gia', 'chitietgiohang.ngayTao',
            'nhapkho.ten', 'nhapkho.hinhAnh')
        ->get();
        return view('page.trangGioHang', ['HANG' => $JoinGioHang]);
    }

    public function deleteIdGioHang(Request $request, $idChiTietGioHang){
        $JoinGioHang = DB::table('chitietgiohang')
        ->where('idChiTietGioHang', '=', $idChiTietGioHang)
        ->delete();
        return redirect('hanghoa/DanhSachgiohang');
    }

    // tạo giỏ hàng
    public function taoGioHang(Request $request) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $add_giohang = DB::table('giohang')
        ->insert(
            [
                // cho idgiohang = iduser
                'idGioHang' => $request->session()->get('idUsers'),
                'gioHang_idUsers' => $request->session()->get('idUsers'),
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]
        );
    }

    // kiểm tra giỏ hàng của khách đã có chưa
    public function check_gioHang($request) {
        $check_giohang = DB::table('giohang')
        ->where('gioHang_idUsers', '=', $request->session()->get('idUsers'))
        ->count();
        if($check_giohang){
           return true; // không cần tạo
        }else{
            return false; // cần tạo
        }
    }

    //  yêu cầu
    public function trangFormYCSP($MaSPCH, $hinhAnh) {
        return view('page.trangFormYCSP', ['MaSPCH' => $MaSPCH, 'hinhAnh' => $hinhAnh]);
    }

    public function trangYeuCauHang() {
        try {
            $ListSanPham = DB::table('cuahang')
            ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
            ->join('nhapkho', 'xuatkho.MaSPXK', '=', 'nhapkho.MaSP')
            ->select('cuahang.MaSPCH', 'cuahang.trangThaiSP',
            'nhapkho.ten', 'nhapkho.hinhAnh', 'xuatkho.gia', 'xuatkho.soLuong')
            ->get();
            return view("page.trangYeuCauSP", ['HANG' => $ListSanPham]);
        }catch(\Exception $e) {
            return view('page.trangLoiKetNoi');
        }
    }

    public function thucHienYCSP(Request $request) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
            $add_SP = DB::table('yeucauch')
            ->insert([
                'idUsers_YCCH' => $request->session()->get('idUsers'),
                'MaSPYC' => $request->MaSPYC,
                'soLuong' => $request->soLuong,
                'trangThai' => 1,
                'noiDung' => $request->message,
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]);
            $request->session()->flash('yeucau', 'you request product successfully');
            return redirect('hanghoa/trangYeuCauHang');
    }   

    // thêm sản phẩm vào giỏ hàng
    public function themSPGioHang(Request $request, $MaSP, $soLuong, $gia){
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        if(!$this->check_gioHang($request)) {
            // tạo giỏ hàng sau đó add vào chi tiết giỏ hang
            $this->taoGioHang($request);
        }

        $add_chitietgiohang = DB::table('chitietgiohang')
        ->insert(
            [
                'idGioHang' => $request->session()->get('idUsers'),

                // lấy từ trang chi tiết
                'MaSP' => $MaSP, 
                    'soLuong' => $soLuong,
                'gia' => $gia,

                // thiếu size và màu chưa bk cách lấy tạm thời để 0
                'size' => 0,
                'mau' => "chưa biết",

                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]
        );
        //Add to cart successfully
        $request->session()->flash('themVaoGioHang', 'Add to cart successfully');
        return redirect('hanghoa/DanhSachgiohang');
    }

    public function timhang($tenHang) {
        $timhang = DB::table('hang')
        ->where('tenHang', '=', $tenHang)
        ->join('nhapkho', 'hang.maHang', '=', 'nhapkho.Mahang')
        ->join('xuatkho', 'nhapkho.MaSP', '=', 'MaSPXK')
        ->select('nhapkho.hinhAnh', 'xuatkho.gia', 'nhapkho.ten', 'nhapkho.MaSP')
        ->get();
        return view('page.trangTimKiem', ['SANPHAM' => $timhang]);
    }

    public function thuYC() {
        $thuCH = DB::table('yeucauch')
        ->where("trangthaiyc.idTrangThaiYC", "!=", 1)
        ->join("trangthaiyc", "yeucauch.trangThai", "=", "trangthaiyc.idTrangThaiYC")
        ->join("traloiyc", "yeucauch.idYeuCauCH", "=", "traloiyc.idYCCH_TLYC")
        ->get();
        return view('page.trangThuYC', ["TLYC" => $thuCH]);
    }
}
