<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ManagementProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CheckRole ($request) {
       if ($request->session()->get('roles') == 1){
           return true;
       } else {
           return false;
       }
    }
    
    public function index(Request $request)
    {
        if(!$this->CheckRole($request)) {
           echo "lỗi quyền"; 
        } else {
            try {
                $ListProducts = DB::table('products')
                ->get();
                return view("page.edit", ['ListProducts' => $ListProducts]);
            }catch(\Exception $e) {
                echo $e;
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!$this->CheckRole($request)) {
            echo "lỗi quyền truy cập";
        } else {
            try {
                $dt = Carbon::now('Asia/Ho_Chi_Minh');
                $file = $request->file('file');
                $image = $file->getClientOriginalName();
                $destinationPath = public_path('images');
                $file->move($destinationPath, $image);
                
                $ADD = DB::table('products')->insert(
                    [
                        'name' => $request->name,
                        'price' => $request->price,
                        'quantity' => $request->quantity,
                        'product_carrier' => $request->Carrier,
                        'image' => $image,
                        'detail' => $request->detail,
                        'ngayTao' => $dt->toDateString(),
                        'gioTao' => $dt->toTimeString() , 
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()  
                    ]
                );
                return redirect('/edit');
            }catch(\Exception $e) {
                echo $e;
            }
        }
        
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
    public function show(Request $request, $id_products)
    {
        if(!$this->CheckRole($request)){
            echo "lỗi quyền";
        } else {
            try {
                $update = DB::table('products')
                ->where('id_products', '=', $id_products)
                ->get();
                return view('page.update', ['update' => $update]);
            }catch(\Exception $e) {
                echo $e;
            }
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id_products)
    {
        if(!$this->CheckRole($request)){
            echo "lỗi quyền";
        } else {
            try {
                $delete = DB::table('products')
                ->where('id_products', '=', $id_products)
                ->delete();
                return redirect('/edit');
            }catch(\Exception $e) {
                echo $e;
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(!$this->CheckRole($request)){
            echo "lỗi quyền";
        }else {
            try {
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
                $update = DB::table('products')
                ->where('id_products', '=', $request->id)
                ->update([
                    'name' => $request->name,
                    'product_carrier' => $request->Carrier,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                    'detail' => $request->detail,
                    'image' => $image,
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()     
                ]);
                return redirect('/edit');
            }catch(\Exception $e) {
                echo $e;
            }
        }
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
