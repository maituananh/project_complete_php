<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrangGioiTinhSanPhamController extends Controller
{
    public function tenTLGT($tenTLGT)
    {
        $QueryGT = DB::table('loaigioitinh')
        ->where('tenTLGT', '=', $tenTLGT)
        ->join('gioitinhsanpham', 'loaigioitinh.MaTLGT', '=', 'gioitinhsanpham.MaTLGTSP')
        ->join('cuahang', 'gioitinhsanpham.MaSPGT', '=', 'cuahang.MaSPCH')
        ->join('nhapkho', 'nhapkho.MaSP', '=', 'cuahang.MaSPCH')
        ->join('xuatkho', 'cuahang.MaSPCH', '=', 'xuatkho.MaSPXK')
        ->select('nhapkho.MaSP', 'xuatkho.soLuong', 'nhapkho.ten', 'xuatkho.gia', 'nhapkho.moTa', 'nhapkho.hinhAnh')
        ->get();
        return view('page.trangGioiTinh', ['SANPHAM' => $QueryGT]);
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
