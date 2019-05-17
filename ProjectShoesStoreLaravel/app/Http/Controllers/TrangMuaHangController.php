<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Session;
class TrangMuaHangController extends Controller
{
    public function DanhSachMuaHang(Request $request) {
        $JoinMuaHang = DB::table('users')
        ->where('idUsers', '=', $request->session()->get('idUsers'))
        ->join('donmuahang', 'users.idUsers', '=', 'donmuahang.idUsersDMH')
        ->join('chitiethoadon', 'chitiethoadon.idDonMuaHang', '=', 'donmuahang.idDonMuaHang')
        ->join('nhapkho', 'nhapkho.MaSP', '=', 'chitiethoadon.MaSP')
        ->select('chitiethoadon.idChiTietHoaDon', 'chitiethoadon.MaSP', 'chitiethoadon.soLuong', 'chitiethoadon.gia', 'nhapkho.hinhAnh',
            'nhapkho.ten')
        ->get();
        return view('page.trangHangDaMua', ['HANG' => $JoinMuaHang]);
    }

    // tạo hóa đơn mua hàng
    public function taoDonMuaHang(Request $request) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $taoDonMuaHang = DB::table('donmuahang')
        ->insert(
            [
                // cho idgiohang = iduser
                'idDonMuaHang' => $request->session()->get('idUsers'),
                'idUsersDMH' => $request->session()->get('idUsers'),
                'ngayTao' => $dt->toDateString(),
                'gioTao' => $dt->toTimeString(),
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]
        );
    }

    // kiểm tra đơn mua hàng của khách đã có chưa
    public function check_DonMuaHang($request) {
        $check_DonMuaHang = DB::table('donmuahang')
        ->where('idUsersDMH', '=', $request->session()->get('idUsers'))
        ->count();
        if($check_DonMuaHang){
           return true; // không cần tạo
        }else{
            return false; // cần tạo
        }
    }

    // thêm sản phẩm vào đơn chi tiết mua hàng
    public function themSPChiTietHoaDon(Request $request){
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        if(!$this->check_DonMuaHang($request)) {
            // tạo đơn mua hàng sau đó add vào chi tiết đơn mua hàng
            $this->taoDonMuaHang($request);
        }

        // kiểm tra size + số lượng + màu có hợp lệ không
        $check_size = DB::table('cuahang')
        ->where('size.tenSize', '=', $request->tenSize, 'and', 'cuahang.MaSPCH', '=', $request->MaSP)
        ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
        ->join('nhapkho', 'xuatkho.MaSPXK', '=', 'nhapkho.MaSP')
        ->join('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
        ->join('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
        ->join('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
        ->join('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
        ->count();
        if($check_size) {
            $check_mau = DB::table('cuahang')
            ->where('mau.tenMau', '=', $request->mau, 'and', 'cuahang.MaSPCH', '=', $request->MaSP)
            ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
            ->join('nhapkho', 'xuatkho.MaSPXK', '=', 'nhapkho.MaSP')
            ->join('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
            ->join('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
            ->join('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
            ->join('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
            ->count();
            if($check_mau) {
                $check_soLuong = DB::table('cuahang')
                ->where('xuatkho.soLuong', '>', $request->quantity, 'and', 'cuahang.MaSPCH', '=', $request->MaSP)
                ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
                ->count();
                if($check_soLuong){
                    $add_chitietdonmuahang = DB::table('chitiethoadon')
                    ->insert(
                    [
                        'idDonMuaHang' => $request->session()->get('idUsers'),
                        // lấy từ trang chi tiết
                        'MaSP' => $request->MaSP, 
                        'soLuong' => $request->quantity,
                        'gia' => $request->gia * $request->quantity,
                        'size' => $request->tenSize,
                        'mau' => $request->mau,
                        'ngayTao' => $dt->toDateString(),
                        'gioTao' => $dt->toTimeString(),
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()
                    ]
                    );
                    // thực hiện giảm số lượng sản phẩm khi người dùng đã mua hàng
                    $this->giam_SoLuongSP($request, $request->quantity, $request->MaSP, $request->soLuongChinh);
                    // đáp ứng tất cả điều kiện
                    return redirect('hanghoa/DanhSachMuaHang');
                } else {
                    // ko hợp số lượng
                    if($request->quantity == 1) {
                        $thongBaoMuaHang = 'XIN LỖI BẠN GIẦY ĐÃ HẾT';
                        Session::flash('thongBaoMuaHang', $thongBaoMuaHang);
                    } else {
                        $thongBaoMuaHang = 'Mời Bạn Nhập Lại Số Lượng Từ 1->' . $request->soLuongChinh;
                        Session::flash('thongBaoMuaHang', $thongBaoMuaHang);
                    }
                    return redirect()->back();
                }
            } else {
                // không hợp màu
                $thongBaoMuaHang = 'Bạn Nhập Màu Giầy không có, Vui Lòng Nhập Màu Giầy Đang Có Phía Trên';
                Session::flash('thongBaoMuaHang', $thongBaoMuaHang);
                return redirect()->back();
            }
        } else {
            // không hợp size
            $thongBaoMuaHang = 'Bạn Nhập SIZE không có, Vui Lòng Nhập Số Size Đang Có Phía Trên';
            Session::flash('thongBaoMuaHang', $thongBaoMuaHang);
            return redirect()->back();
        }        
    }

    // giảm số lượng sản phẩm 
    public function giam_SoLuongSP($request, $soLuong, $MaSP, $soLuongChinh) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('xuatkho')
            ->where('MaSPXK', $MaSP)
            ->update(
                [
                    'soLuong' => $soLuongChinh - $soLuong, 
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()
                ]
            );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
