<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
class TrangTaiKhoangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check_Signin(Request $request)
    {
        $Check_Users = DB::table('users')
        ->where('usersName', '=', $request->usersName, 'and', 'password', '=', $request->passWord)
        ->join('role', 'users.idRole', '=', 'role.idRole')
        ->select('role.role', 'users.usersName', 'users.idUsers')
        ->get();
        foreach($Check_Users as $us){
            if($us != ""){   
                $request->session()->put('idUsers', $us->idUsers);
                $request->session()->put('usersName', $us->usersName);
                $request->session()->put('role', $us->role); 
                Session::flash('thanhcong', 'Successfully sign in');
                return redirect('/trangChu');
            }
        }    
        Session::flash('thatbai', 'Wrong account or password');
        return view('page.trangDangNhap');
    }

    public function DangXuat(Request $request) {
        $request->session()->flush();
        return redirect('/trangChu');
    }

    public function thucHienDangKy(Request $request) {
        try{
            $us = $request->usersName;
            $pas = $request->passWord;
            $repas = $request->RepeatpassWord;
            $dt = Carbon::now('Asia/Ho_Chi_Minh');
            if($pas == $repas){
                // thêm vào bảng users
                $add_user = DB::table('users')
                ->insert(
                    [
                        'usersName' => $us,
                        'password' => $pas,
                        'idRole' => 2, // mặc định cho là khách -> 2
                        'ngayTao' => $dt->toDateString(),
                        'gioTao' => $dt->toTimeString(),
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()
                    ]
                );
            return redirect('dangnhap/trangDangKythanhcong');
            }else{
                $thongbao = 'Bạn Nhập Sai Repeat PassWord';
                Session::flash('saipass', $thongbao);
                return view('page.trangDangKy');
            }
        }catch(\Exception $e){
            // var_dump($e->errorInfo );
            $thongBaoTrungTaiKhoang = 'Tên Tài Khoảng Đã Tồn Tại';
            Session::flash('trungtaikhoang', $thongBaoTrungTaiKhoang);
            return view('page.trangDangKy');
        }    
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
