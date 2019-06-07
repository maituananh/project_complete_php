<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteProductInCart($id_products)
    {
        $addCartDetail = DB::table('cartdetail')
        ->where('id_productDetail', '=', $id_products)
        ->delete();
        return redirect('/cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCart(Request $request)
    {
        try{
            $dt = Carbon::now('Asia/Ho_Chi_Minh');
            $price = 0;

            // tạo giỏ hàng khi chưa có
            $creatCart = DB::table('cart')
            ->where('id_cart', '=', $request->session()->get('id_users'))
            ->count();
            if($creatCart != 1) {
                $addCart =  DB::table('cart')->insert(
                    [
                        'id_cart' => $request->session()->get('id_users'), 
                        'id_userCart' => $request->session()->get('id_users'),
                        'ngayTao' => $dt->toDateString(),
                        'gioTao' => $dt->toTimeString() , 
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()     
                    ]
                );
            }

            $checkProducts = DB::table('products')
            ->where('id_products', '=', $request->id_products)
            ->get();
            foreach($checkProducts as $item) {
                $price = $item->price;
            }

            $addCartDetail = DB::table('cartdetail')->insert(
                    [
                        'id_cartCartDetail' => $request->session()->get('id_users'),
                        'id_productDetail' => $request->id_products,
                        'price' => $price,
                        'quantity' => $request->quantity,
                        'status' => "unpaid", // mặc định chưa thanh toán
                        'ngayTao' => $dt->toDateString(),
                        'gioTao' => $dt->toTimeString() , 
                        'ngaySua' => $dt->toDateString(),
                        'gioSua' => $dt->toTimeString()     
                    ]
                );
                return redirect('/cart');
        }catch(\Exception $e){
            echo $e;
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
    public function show(Request $request)
    {
        $showCartInCart = DB::table('cartdetail')
        ->where('status' ,'=', 'unpaid', 'AND', 'id_cartCartDetail', '=', $request->session()->get('id_users'))
        ->join('cart', 'id_cart', '=', 'id_cartCartDetail')
        ->join('products', 'id_products', '=', 'id_productDetail')
        ->join('productcarrier', 'id_productCarrier', '=', 'product_carrier')
        ->select('cartdetail.quantity', 'products.id_products', 'products.name', 'products.price', 'products.image', 'productcarrier.Name')
        ->get();
        return view('page.cart', ['cart' => $showCartInCart]);
        echo $showCartInCart;
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
