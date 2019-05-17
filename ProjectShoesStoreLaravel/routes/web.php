<?php

// mặc định vào trang chủ
Route::get('/', ['uses' => 'TrangChuController@trangChu']);

Route::group(['prefix'=>'/'],function(){
    Route::get('trangChu', ['uses' => 'TrangChuController@trangChu']);
    
    Route::get('trangDanOng', ['uses' => 'TrangDanOngController@trangDanOng']);

    Route::get('hang', ['uses' => 'TrangMasterController@items']);

    Route::get('trangPhuNu', ['uses' => 'TrangPhuNuController@trangPhuNu']);

    Route::get('trangChiTietSanPham/{MaSP}', ['uses' => 'TrangChiTietSanPhamController@trangChiTietSanPham']);

    Route::get('trangGioiThieu', function () {
        return view('page.trangGioiThieu');
    });

    Route::get('/trangLienHe', function () {
        return view('page.trangLienHe');
    });

    Route::post('trangTimKiem', ['uses' => 'TrangTimKiemSanPhamController@timKiemSP']);
});

Route::group(['prefix'=>'/dangnhap'],function(){
    Route::get('/trangDangNhap', function () {
        return view('page.trangDangNhap');
    });

    Route::post('/check_DangNhap', ['uses' => 'TrangTaiKhoangController@check_Signin']);

    Route::get('/trangDangXuat', ['uses' => 'TrangTaiKhoangController@DangXuat']);

    // đăng ký
    Route::get('/trangDangKy', function(){
        return view('page.trangDangKy');
    });

    Route::get('/trangDangKythanhcong', function(){
        return view('page.trangDangKyThanhCong');
    });
    
    Route::post('/thucHienDangKy', ['uses' => 'TrangTaiKhoangController@thucHienDangKy']);
});

Route::group(['prefix'=>'/hanghoa'],function(){
    //start route giỏ hàng
    Route::get('/DanhSachgiohang', ['uses' => 'TrangHangHoaController@DanhSachgiohang']);

    // khi thêm vào giỏ thì tự động tạo giỏ hàng cho user nên Controller sẽ vào TAOGIOHANG trước 
    Route::get('/themSPGioHang/{MaSP}/{soLuong}/{gia}', ['uses' => 'TrangHangHoaController@themSPGioHang']);

    Route::get('/deleteIdGioHang/{idChiTietGioHang}', ['uses' => 'TrangHangHoaController@deleteIdGioHang']);
    // end route giỏ hàng

    //start route muahang
    Route::post('/muahang', ['uses' => 'TrangMuaHangController@themSPChiTietHoaDon']);

    Route::get('/DanhSachMuaHang', ['uses' => 'TrangMuaHangController@DanhSachMuaHang']);
    //end route muahang

    // sử lý yêu cầu từ cửa hàng đến kho
    Route::get('/trangYeuCauHang', ['uses' => 'TrangHangHoaController@trangYeuCauHang']);

    Route::get('/trangFormYCSP/{MaSPCH}/{hinhAnh}', ['uses' => 'TrangHangHoaController@trangFormYCSP']);

    Route::post('/thucHienYCSP', ['uses' => 'TrangHangHoaController@thucHienYCSP']);

    // tìm theo hãng
    Route::get('/timhang/{tenHang}', ['uses' => 'TrangHangHoaController@timhang']);

    // trang đọc thư
    Route::get('/thuYC', ['uses' => 'TrangHangHoaController@thuYC']);
    
});

Route::group(['prefix'=>'/gioitinhSP'],function(){
    Route::get('/{tenTLGT}', ['uses' => 'TrangGioiTinhSanPhamController@tenTLGT']);
});

Route::group(['prefix'=>'/thongTinCaNhan'],function(){
    Route::get('/trangThongTin', function() {
        return view('page.trangThemThongTinCaNhan');
    });

    Route::get('/showthongtin', ['uses' => 'TrangThongTinCaNhanController@show_thongTinCaNhan']);

    Route::post('/ThuHienSuaThongtin', ['uses' => 'TrangThongTinCaNhanController@suaThongtin']);

    Route::get('/trangSuaThongtin', ['uses' => 'TrangThongTinCaNhanController@trangSuaThongtin']);

    Route::post('/themThongTin', ['uses' => 'TrangThongTinCaNhanController@themThongTin']);
});

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/trangChuAdmin', ['uses' => 'TrangAdminController@trangChuAdmin']); 

    Route::get('/trangTatCaSanPham', ['uses' => 'TrangAdminController@trangTatCaSanPham']);

    Route::get('/trangSanPhamTrongCuaHang', ['uses' => 'TrangAdminController@trangSanPhamTrongCuaHang']);

    // chức năng

    // dừng cung cấp
    Route::get('/dungCungCap/{MaSP}', ['uses' => 'TrangAdminController@dungCungCap']); 
    // cung cấp thêm
    Route::get('/cungCapThem/{MaSP}', ['uses' => 'TrangAdminController@cungCapThem']); 
    Route::post('/thucHienCungCapThem', ['uses' => 'TrangAdminController@thucHienCungCapThem']); 

    // xóa sản phẩm trong kho
    Route::get('/trangXoaSP', ['uses' => 'TrangAdminController@trangXoaSP']); 
    Route::get('/thucHienXoaSP/{MaSP}', ['uses' => 'TrangAdminController@thucHienXoaSP']); 

    // thêm sp vào kho
    Route::get('/trangThemSP', ['uses' => 'TrangAdminController@trangThemSP']); 

    Route::post('/thucHienThemSP', ['uses' => 'TrangAdminController@thucHienThemSP']); 

    // edit 
    Route::get('/trangCapNhap', ['uses' => 'TrangAdminController@trangCapNhap']); 

    Route::get('formCapNhapSP/{MaSP}/{tenmau}/{tenSize}', ['uses' => 'TrangAdminController@formCapNhapSP']); 

    Route::post('/thucHienCapNhap', ['uses' => 'TrangAdminController@thucHienCapNhap']); 

    Route::get('/trangDocThu/{idYeuCauCH}', ['uses' => 'TrangAdminController@trangDocThu']);

    // YÊU CẦU CỬA HÀNG
    Route::get('/khongChapNhanYCCH/{idYeuCauCH}', ['uses' => 'TrangAdminController@khongChapNhanYCCH']); 

    Route::get('ChapNhanYCCH/{idYeuCauCH}', ['uses' => 'TrangAdminController@ChapNhanYCCH']); 
});