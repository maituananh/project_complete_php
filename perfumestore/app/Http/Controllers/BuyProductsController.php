<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BuyProductsController extends Controller
{
    public function addone(Request $request, $id_products) {
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
            ->where('id_products', '=', $id_products)
            ->get();
            foreach($checkProducts as $item) {
                $price = $item->price;
            }

            $addCartDetail = DB::table('cartdetail')->insert(
                    [
                        'id_cartCartDetail' => $request->session()->get('id_users'),
                        'id_productDetail' => $id_products,
                        'price' => $price,
                        'quantity' => 1,
                        'status' => "unpaid", // mặc định là thanh toán
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request, $tongtien)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        try {
            // tạo id order random
            $queryOrder = 0; 
            $id_order = rand();
            
            do{
                $id_order = rand();
                $queryOrder = DB::table('orders')
                ->where('id_orders', '=', $id_order)
                ->count();
            }while($queryOrder == 1);

            $payOrder = DB::table('orders')->insert(
                [
                    'id_orders' => $id_order,
                    'id_cartOrder' => $request->session()->get('id_users'),
                    'totalMoney' => $tongtien,
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString() , 
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()     
                ]
            );

            // đổi trạng thái thành đã thanh toán
            $statuscCartdetail = DB::table('cartdetail')->update(
                [
                    'status' => "paid",
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()     
                ]
            );
            return view('page.successfulPurchases');
        }catch(\Exception $e) {
            echo $e;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchased(Request $request)
    {
        try {
            $cart = DB::table('users')
            ->where('id_users', '=', $request->session()->get('id_users'), 'and', 'ordersdetail.status', '=', 'paid')
            ->join('cart', 'id_userCart', '=', 'id_users')
            ->join('cartdetail', 'id_cartCartDetail', '=', 'id_cart')
            ->join('products', 'id_Products', '=', 'id_productDetail')
            ->join('productcarrier', 'id_productCarrier', '=', 'product_carrier')
            ->join('orders', 'id_cartOrder', '=', 'id_cart')
            ->select('products.name', 'products.id_products', 'products.price', 
            'products.image', 'productcarrier.Name', 'cartdetail.quantity', 
            'orders.totalMoney')
            ->get();
            return view("page.purchased", ['cart' => $cart]);
        }catch(\Exception $e) {
            echo $e;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
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
