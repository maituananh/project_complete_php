<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {    
        try{
            // thư của admin
            $yeucauch = DB::table('yeucauch')
            ->where('trangThai', '=', 1)
            ->get();
            View::share('thongbaoAdmin', $yeucauch);

            // item của store menu
            $hang = DB::table('hang')
            ->get();
            View::share('HANGMENU', $hang);

            //thư của ql cửa hàng
            $thuCH = DB::table('yeucauch')
            ->where("trangthaiyc.idTrangThaiYC", "!=", 1)
            ->join("trangthaiyc", "yeucauch.trangThai", "=", "trangthaiyc.idTrangThaiYC")
            ->join("traloiyc", "yeucauch.idYeuCauCH", "=", "traloiyc.idYCCH_TLYC")
            ->select("traloiyc.idTLYC")
            ->get();
            View::share("ThuQLCH", $thuCH); 

            // danh sách giới tính sản phẩm
            $gioiTinhSP = DB::table('loaigioitinh')
            ->select("tenTLGT")
            ->get();
            View::share("GTSP", $gioiTinhSP); 
        }catch(\Exception $e) {
            return view('page.trangLoiKetNoi');
        }
        
    }
}
