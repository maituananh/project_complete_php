<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TrangThongTinCaNhanController extends Controller
{
    public function themThongTin(Request $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $themThongTin = DB::table('thongtincanhan')
        ->insert([
                    'idUsers' => $request->session()->get('idUsers'), 
                    'ten' => $request->name,
                    'tuoi' => $request->age,
                    'email' => $request->Email,
                    'phone' => $request->Phone,
                    'diaChi' => $request->address,
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString(),
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()
                ]);
        $showThongTin = $this->queryupdatethongtin($request);
    }
    
    public function show_thongTinCaNhan(Request $request) {
        $showThongTin = $this->queryupdatethongtin($request);
        foreach($showThongTin as $tt) {
            if($tt->idUsers != 0) {
                return view('page.trangShowThongTinCaNhan', ['thongTin' => $showThongTin]);
            }
        }
        return view('page.trangChuaCoThongTin');
    }

    public function queryupdatethongtin($request){
        $showThongTin = DB::table('thongtincanhan')
        ->where('idUsers', '=', $request->session()->get('idUsers'))
        ->select('*')
        ->get();
        return $showThongTin;
    }

    public function suaThongtin(Request $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $suaThongTin = DB::table('thongtincanhan')
        ->where('idUsers', '=', $request->session()->get('idUsers'))
        ->update(
                    [
                        'ten' => $request->name,
                        'tuoi' => $request->age,
                        'email' => $request->Email,
                        'phone' => $request->Phone,
                        'diaChi' => $request->address,
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()
                    ]
                );
        $showThongTin = $this->queryupdatethongtin($request);
        return view('page.trangShowThongTinCaNhan', ['thongTin' => $showThongTin]);
    }

    public function trangSuaThongtin(Request $request) {
        $showThongTin = $this->queryupdatethongtin($request);
        return view('page.trangSuaThongTinCaNhan', ['thongtin'=>$showThongTin]);
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
