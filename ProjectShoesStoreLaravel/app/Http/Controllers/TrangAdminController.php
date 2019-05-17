<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TrangAdminController extends Controller
{
    // check quyền -> phải là quyền 1 admin mới vào đây được
    public function check_role($request) {
        if($request->session()->get('role') == 1){
            return true;
        } else {
            return false;
        }
    }
    
    public function trangThemSP(Request $request) {
        if($this->check_role($request)){
            $listHang = DB::table('hang')
            ->get();
    
            $listSize = DB::table('size')
            ->get();
    
            $listLoai = DB::table('loai')
            ->get();
    
            $listMau = DB::table('mau')
            ->get();
    
            $loaigioitinh = DB::table('loaigioitinh')
            ->get();
    
            return view('adminPage.trangThemHang', ['listHang' => $listHang,
            'listSize' => $listSize, 'listLoai' => $listLoai, 'listMau' => $listMau, 'loaigioitinh' => $loaigioitinh]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        } 
    }

    public function trangChuAdmin(Request $request)
    {
        if($this->check_role($request)){
            return view('adminPage.indexAdmin');
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
    }

    public function trangTatCaSanPham(Request $request)
    {
        if($this->check_role($request)){
            $ListSanPham = DB::table('nhapkho')
            ->orderBy('nhapkho.MaSP', 'asc')
            ->leftjoin('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
            ->leftjoin('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
            ->leftjoin('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
            ->leftjoin('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
            
            ->select('nhapkho.MaSP', 'nhapkho.ten', 'nhapkho.gia', 'nhapkho.hinhAnh', 'nhapkho.soLuong',
            'mau.tenmau', 'size.tenSize', 'nhapkho.ngayTao', 'nhapkho.gioTao')
            ->groupby('nhapkho.MaSP', 'nhapkho.ten', 'nhapkho.gia', 'nhapkho.hinhAnh', 'nhapkho.soLuong',
            'mau.tenmau', 'size.tenSize', 'nhapkho.ngayTao', 'nhapkho.gioTao')
            ->get();
            return view('adminPage.trangTatCaSanPham', ['SANPHAM' => $ListSanPham]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
        
    }

    public function trangSanPhamTrongCuaHang(Request $request)
    {
        if($this->check_role($request)){
            $ListSanPham = DB::table('cuahang')
            ->orderBy('cuahang.MaSPCH', 'asc')
            ->join('nhapkho', 'nhapkho.MaSP', '=', 'cuahang.MaSPCH')
            ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
            ->leftjoin('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
            ->leftjoin('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
            ->leftjoin('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
            ->leftjoin('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
            
            ->select('nhapkho.MaSP', 'nhapkho.ten', 'nhapkho.gia', 'nhapkho.hinhAnh', 'xuatkho.soLuong',
            'mau.tenmau', 'size.tenSize', 'nhapkho.ngayTao', 'nhapkho.gioTao')
            ->get();
            return view('adminPage.trangSanPhamTrongCuaHang', ['SANPHAM' => $ListSanPham]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
        
    }

    public function dungCungCap( Request $request, $MaSP) {
        if($this->check_role($request)){
            $deleteSPCH = DB::table('cuahang')->where('MaSPCH', '=', $MaSP)->delete();
            return redirect()->back();
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
    }

    public function cungCapThem(Request $request, $MaSP) {
        if($this->check_role($request)){
            $updateSoLuong = DB::table('cuahang')
            ->where('MaSPCH', '=', $MaSP)
            ->join('nhapkho', 'nhapkho.MaSP', '=', 'cuahang.MaSPCH')
            ->join('xuatkho', 'xuatkho.MaSPXK', '=', 'cuahang.MaSPCH')
            ->select('cuahang.MaSPCH', 'nhapkho.ten', 'nhapkho.SOLUONG', 'xuatkho.soluong',
            'nhapkho.hinhAnh')
            ->get();
        return view('adminPage.trangCungCapSPCH', ['updateSOLUONG' => $updateSoLuong]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }
        
    }

    public function trangCapNhap(Request $request) {
        if($this->check_role($request)){
            $ListSanPham = DB::table('nhapkho')
            ->orderBy('nhapkho.MaSP', 'asc')
            ->leftjoin('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
            ->leftjoin('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
            ->leftjoin('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
            ->leftjoin('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
            
            ->select('nhapkho.MaSP', 'nhapkho.ten', 'nhapkho.gia', 'nhapkho.hinhAnh', 'nhapkho.soLuong',
            'mau.tenmau', 'size.tenSize', 'nhapkho.ngayTao', 'nhapkho.gioTao')
            ->groupby('nhapkho.MaSP', 'nhapkho.ten', 'nhapkho.gia', 'nhapkho.hinhAnh', 'nhapkho.soLuong',
            'mau.tenmau', 'size.tenSize', 'nhapkho.ngayTao', 'nhapkho.gioTao')
            ->get();
            return view('adminPage.trangCapNhapSP', ['SANPHAM' => $ListSanPham]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }
    }

    public function formCapNhapSP(Request $request, $MaSP, $tenmau, $tenSize) {
        if($this->check_role($request)){
            $ListSanPham = DB::table('nhapkho')
            ->where('MaSP', '=', $MaSP, 'and', 'mau.tenMau', '=', $tenmau, 'and' ,'size.tenSize', '=', $tenSize)
            ->leftjoin('size_SanPham', 'nhapkho.MaSP', '=', 'size_SanPham.maSanPham')
            ->leftjoin('size', 'size_SanPham.MaSize', '=', 'size.MaSize')
            ->leftjoin('mausanpham', 'nhapkho.MaSP', '=', 'mausanpham.MaSanPham')
            ->leftjoin('mau', 'mausanpham.MaMau', '=', 'mau.MaMau')
            ->leftjoin('hang', 'nhapkho.Mahang', '=', 'hang.maHang')
            ->leftjoin('loai', 'nhapkho.Maloai', '=', 'loai.MaLoai')
            ->select('nhapkho.MaSP', 'nhapkho.ten', 'nhapkho.gia', 'nhapkho.hinhAnh', 'nhapkho.soLuong',
            'mau.tenmau', 'mau.MaMau', 'size.tenSize', 'size.MaSize', 'nhapkho.ngayTao', 'nhapkho.gioTao',
            'hang.maHang', 'hang.tenHang', 'loai.MaLoai', 'loai.tenLoai', 'nhapkho.moTa')
            ->get();
            return view('adminPage.trangFormCapNhapSP', ['SANPHAM' => $ListSanPham]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }
    }

    public function thucHienCapNhap(Request $request) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $image ="";
        $file ="";
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $image = $file->getClientOriginalName();
            $destinationPath = public_path('images');
            $file->move($destinationPath, $image);
        }else {
            $image = $request->SaveImage;
        }
        
        $addProdcts = DB::table('nhapkho')->update([
            'MaSP' => $request->MaSP,
            'ten' => $request->TenSP,
            'moTa' => $request->MoTa,
            'soLuong' => $request->soLuong,
            'gia' => $request->gia,
            'Mahang' => $request->MaHang,
            'Maloai' => $request->MaLoai,
            'hinhAnh' => $image,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()     
        ]);  
    }

    public function thucHienCungCapThem(Request $request) {
        if($this->check_role($request)){
            $dt = Carbon::now('Asia/Ho_Chi_Minh');
            if($request->SLkho < $request->SLcungcap)
            {
                // số lượng cập nhập không thể lớn hơn số lượng kho
                $request->session()->flash('capnhaphang', 'Số lượng cập nhập lớn hơn số lượng kho');
                return redirect()->back();
            } else {
                if($request->SLkho > 0) {
                    $updateSoLuong = DB::table('xuatkho')
                    ->where('MaSPXK', '=', $request->MaSPXK)
                    ->update([
                        'soLuong' => ($request->SLcuahang + $request->SLcungcap),
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()
                    ]);

                    // cập nhập trạng thái của sản phẩm trong cửa hàng
                    $updateSoLuongCH = DB::table('cuahang')
                    ->where('MaSPCH', '=', $request->MaSPXK)
                    ->update([
                        'trangThaiSP' => 'CÒN',
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()
                    ]);

                    // giảm số lượng trong nhập kho
                    $updateSoLuongCH = DB::table('nhapkho')
                    ->where('MaSP', '=', $request->MaSPXK)
                    ->update([
                        'soLuong' => $request->SLkho - $request->SLcungcap,
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()
                    ]);
                    $request->session()->flash('capnhaphang', 'Cập nhập hàng thành công');
                    return redirect('/admin/trangSanPhamTrongCuaHang');
                } else {
                    // hàng trong kho đã hết
                    $request->session()->flash('capnhaphang', 'Đã hết hàng trong kho');
                    return redirect()->back();
                }
            } 
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
    }

    public function trangXoaSP( Request $request) {
        if($this->check_role($request)){
            $ListSanPham = DB::table('nhapkho')
            ->orderBy('nhapkho.MaSP', 'asc')
            ->get();
            return view('adminPage.trangDelete', ['SANPHAM' => $ListSanPham]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
    }

    public function thucHienXoaSP($MaSP, Request $request) {
        if($this->check_role($request)){
            $delteSP = DB::table('nhapkho')
            ->where('MaSP', '=', $MaSP)
            ->delete();

            $deleteCH = DB::table('cuahang')
            ->where('MaSPCH', '=', $MaSP)
            ->delete();

            $deleteCH = DB::table('xuatkho')
            ->where('MaSPXK', '=', $MaSP)
            ->delete();

            $deleteCH = DB::table('kho')
            ->where('MaSPNK', '=', $MaSP)
            ->delete();

            $request->session()->flash('xoahang', 'Xóa mặt hàng thành công');
            return redirect()->back();
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
        
    }

    public function thucHienThemSP(Request $request) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        if($this->check_role($request)) {
            if($this->KT_size($request, $dt, $request->MaSize, $request->SoSize)){
                if($this->KT_mau($request, $dt, $request->MaMau, $request->TenMau)) {
                    if($this->KT_loai($request, $dt, $request->MaLoai, $request->TenLoai)) {
                        if($this->KT_Hang($request, $dt, $request->MaHang, $request->TenHang)) {
                            try {
                                $file = $request->file('file');
                                $image = $file->getClientOriginalName();
                                $destinationPath = public_path('images');
                                $file->move($destinationPath, $image);
                                $addProdcts = DB::table('nhapkho')->insert([
                                'MaSP' => $request->MaSP,
                                'ten' => $request->TenSP,
                                'moTa' => $request->MoTa,
                                'soLuong' => $request->soLuong,
                                'gia' => $request->gia,
                                'Mahang' => $request->MaHang,
                                'Maloai' => $request->MaLoai,
                                'hinhAnh' => $image,
                                'ngayTao' => $dt->toDateString(),
                                'gioTao' => $dt->toTimeString(),
                                'ngaySua' => $dt->toDateString(),
                                'gioSua' => $dt->toTimeString()
                            ]);

                            $this->Them_Mau_SP($request->MaSP, $request->MaMau, $dt);
                            $this->Them_Size_SP($request->MaSP, $request->MaSize, $dt);
                            $request->session()->flash('themSP', 'Thêm Sản Phẩm Thành Công');
                            return redirect('admin/trangTatCaSanPham');
                            }catch(\Exception $e) {
                                $request->session()->flash('LoiNhap', 'Bạn vui lòng nhập lại, lỗi kiểu khi nhập');
                                return redirect()->back();
                            }
                        }
                    }
                }
            } 
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }  
        // kiểm tra lần lượt hãng, size, màu, loại
    }


    public function Them_Mau_SP($MaSP, $MaMau, $dt) {
        $themMau_SP = DB::table('mausanpham')
        ->insert([
            'MaSanPham' => $MaSP,
            'MaMau' => $MaMau,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]);        
    }

    public function Them_Size_SP($MaSP, $MaSize, $dt) {
        $themSize_SP = DB::table('size_sanpham')
        ->insert([
            'MaSanPham' => $MaSP,
            'MaSize' => $MaSize,
            'ngayTao' => $dt->toDateString(),
            'gioTao' => $dt->toTimeString(),
            'ngaySua' => $dt->toDateString(),
            'gioSua' => $dt->toTimeString()
        ]);        
    }

    public function KT_size($request, $dt, $MaSize, $SoSize) {
        // kiểm tra mã size - tên size
        $size = DB::table('size')->where('MaSize', '=', $MaSize, 'and', 'tenSize', '=', $SoSize)
        ->count();
        if($size) {
            // đã có mã size và số size nên ko cần tạo
            return true;
        } else {
            // chưa có mã size và số size
            $ktMaSize = DB::table('size')->where('MaSize', '=', $MaSize)
            ->count();
            // kiểm tra mã size đã tồn tại chưa
            if($ktMaSize) {
                // đã tồn tại mã size và yêu cầu tạo cái mới hoặc dùng mã cũ
                return redirect()->back();
            } else {
                $ktTenSize = DB::table('size')->where('tenSize', '=', $SoSize)
                ->count();
                // kiểm tra tên size tồn tại chưa
                if($ktTenSize) {
                    // đã tồn tại tên size và yêu cầu tạo tên mới hặc có thể dùng tên cũ
                    return redirect()->back();
                } else {
                    // tạo mã size và tên size
                    $creatSize = DB::table('size')
                    ->insert([
                    'MaSize' => $MaSize,
                    'tenSize' => $SoSize,
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString(),
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()
                    ]);
                }
            }
            return true;
        }       
    }

    public function KT_mau($request, $dt, $MaMau, $TenMau) {
        // kiểm tra mã size - tên size
        $mau = DB::table('mau')->where('MaMau', '=', $MaMau, 'and', 'tenMau', '=', $TenMau)
        ->count();
        if($mau) {
            // đã có mã size và số size nên ko cần tạo
            return true;
        } else {
            // chưa có mã size và số size
            $ktMaMau = DB::table('mau')->where('MaMau', '=', $MaMau)
            ->count();
            // kiểm tra mã size đã tồn tại chưa
            if($ktMaMau) {
                // đã tồn tại mã size và yêu cầu tạo cái mới hoặc dùng mã cũ
                return redirect()->back();
            } else {
                $kttenMau = DB::table('mau')->where('tenMau', '=', $TenMau)
                ->count();
                // kiểm tra tên size tồn tại chưa
                if($kttenMau) {
                    // đã tồn tại tên size và yêu cầu tạo tên mới hặc có thể dùng tên cũ
                    return redirect()->back();
                } else {
                    // tạo mã size và tên size
                    $creatMau= DB::table('mau')
                    ->insert([
                    'MaMau' => $MaMau,
                    'tenMau' => $TenMau,
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString(),
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()
                    ]);
                }
            }
            return true;
        }       
    }

    
    public function KT_loai($request, $dt, $MaLoai, $TenLoai) {
        // kiểm tra mã size - tên size
        $loai = DB::table('loai')->where('MaLoai', '=', $MaLoai, 'and', 'tenLoai', '=', $TenLoai)
        ->count();
        if($loai) {
            // đã có mã size và số size nên ko cần tạo
            return true;
        } else {
            // chưa có mã size và số size
            $ktMaLoai = DB::table('loai')->where('MaLoai', '=', $MaLoai)
            ->count();
            // kiểm tra mã size đã tồn tại chưa
            if($ktMaLoai) {
                // đã tồn tại mã size và yêu cầu tạo cái mới hoặc dùng mã cũ
                return redirect()->back();
            } else {
                $kttenLoai = DB::table('loai')->where('tenLoai', '=', $TenLoai)
                ->count();
                // kiểm tra tên size tồn tại chưa
                if($kttenLoai) {
                    // đã tồn tại tên size và yêu cầu tạo tên mới hặc có thể dùng tên cũ
                    return redirect()->back();
                } else {
                    // tạo mã size và tên size
                    $creatLoai= DB::table('loai')
                    ->insert([
                    'MaLoai' => $MaLoai,
                    'tenLoai' => $TenLoai,
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString(),
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()
                    ]);
                }
            }
            return true;
        }       
    }

    public function KT_Hang($request, $dt, $MaHang, $TenHang) {
        // kiểm tra mã size - tên size
        $hang = DB::table('hang')->where('maHang', '=', $MaHang, 'and', 'tenHang', '=', $TenHang)
        ->count();
        if($hang) {
            // đã có mã size và số size nên ko cần tạo
            return true;
        } else {
            // chưa có mã size và số size
            $ktMaHang = DB::table('hang')->where('maHang', '=', $MaHang)
            ->count();
            // kiểm tra mã size đã tồn tại chưa
            if($ktMaHang) {
                // đã tồn tại mã size và yêu cầu tạo cái mới hoặc dùng mã cũ
                return redirect()->back();
            } else {
                $kttenHang = DB::table('hang')->where('tenHang', '=', $TenHang)
                ->count();
                // kiểm tra tên size tồn tại chưa
                if($kttenHang) {
                    // đã tồn tại tên size và yêu cầu tạo tên mới hặc có thể dùng tên cũ
                    return redirect()->back();
                } else {
                    // tạo mã size và tên size
                    $creatHang= DB::table('hang')
                    ->insert([
                    'maHang' => $MaHang,
                    'tenHang' => $TenHang,
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString(),
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()
                    ]);
                }
            }
            return true;
        }       
    }

    public function trangDocThu(Request $request, $idYeuCauCH) {
        if($this->check_role($request)){
            $docthu = DB::table('yeucauch')
            ->where('idYeuCauCH', '=', $idYeuCauCH)
            ->join('users', 'yeucauch.idUsers_YCCH', '=', 'users.idUsers')
            ->join('thongtincanhan', 'users.idUsers', '=', 'thongtincanhan.idUsers')
            ->join('cuahang', 'yeucauch.MaSPYC', '=', 'cuahang.MaSPCH')
            ->join('nhapkho', 'cuahang.MaSPCH', '=', 'nhapkho.MaSP')
            ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
            ->select('cuahang.MaSPCH', 'cuahang.trangThaiSP', 'thongtincanhan.ten', 'nhapkho.hinhAnh',
            'xuatkho.gia', 'nhapkho.Gia', 'nhapkho.soLuong', 'xuatkho.soluong', 'yeucauch.noiDung', 'yeucauch.idYeuCauCH')
            ->get();
            //echo $docthu;
            return view('adminPage.trangDocThu', ['docthu' => $docthu]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }
    }

    // sử lý yêu cầu từ cửa hàng
    public function khongChapNhanYCCH(Request $request, $idYeuCauCH) {
        $dktt = 3;
        $this->YCCH($request, $idYeuCauCH, $dktt);
        return redirect('/admin/trangSanPhamTrongCuaHang');
    }

    public function ChapNhanYCCH(Request $request, $idYeuCauCH) {
        $dktt = 2;
        $this->YCCH($request, $idYeuCauCH, $dktt);
        return redirect('/admin/trangSanPhamTrongCuaHang');
    }

    public function YCCH($request, $idYeuCauCH, $dktt) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        if($this->check_role($request)){
            $docthu = DB::table('yeucauch')
            ->where('idYeuCauCH', '=', $idYeuCauCH) 
            ->update([
                'trangThai' => $dktt,
                'ngaySua' => $dt->toDateString(),
                'gioSua' => $dt->toTimeString()
            ]);
        } else {
            return view('adminPage.trangLoiQuyenTruyCap');
        }
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
