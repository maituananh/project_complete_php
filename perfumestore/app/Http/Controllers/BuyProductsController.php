<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BuyProductsController extends Controller
{
    public function BuyProduct($id_products) {
        try {
            $buy = DB::table('products')
            ->where('id_products', '=', $id_products)
            ->join('productcarrier', 'id_productCarrier', '=', 'product_carrier')
            ->select('products.name', 'products.id_products', 'products.price', 'products.image', 'productcarrier.Name', 'products.quantity', 'products.detail', 'products.id_products')
            ->get();
            return view("page.pay", ['buy' => $buy]);
        }catch(\Exception $e) {
            echo $e;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        try {
            // tạo id order random
            $queryOrder = 0; 
            $id_order = rand();
            while($queryOrder == 1) {
                $id_order = rand();
                $queryOrder = DB::table('orders')
                ->where('id_orders', '=', $id_order)
                ->count();
            }
            $payOrder = DB::table('orders')->insert(
                [
                    'id_orders' => $id_order,
                    'id_usersOrder' => $request->session()->get('id_users'),
                    'totalMoney' => ($request->price * $request->quantity),
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString() , 
                    'ngaySua' => $dt->toDateString(),
                    'gioSua' => $dt->toTimeString()     
                ]
            );

            $payOrderDetail =  DB::table('ordersdetail')->insert(
                [
                    'id_ordersOrdersdetail' => $id_order,
                    'id_ProductsOrdersdetail' => $request->id,
                    'price' => $request->price,
                    'quantity'=>  $request->quantity,
                    'status'=> 'Đã mua',
                    'ngayTao' => $dt->toDateString(),
                    'gioTao' => $dt->toTimeString() , 
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
    public function cart(Request $request)
    {
        try {
            $cart = DB::table('users')
            ->where('id_users', '=', $request->session()->get('id_users'))
            ->join('orders', 'id_usersOrder', '=', 'id_users')
            ->join('ordersdetail', 'id_ordersOrdersdetail', '=', 'id_orders')
            ->join('products', 'id_Products', '=', 'id_ProductsOrdersdetail')
            ->join('productcarrier', 'id_productCarrier', '=', 'product_carrier')
            ->select('products.name', 'products.id_products', 'products.price', 
            'products.image', 'productcarrier.Name', 'ordersdetail.quantity', 
            'orders.totalMoney')
            ->get();
            return view("page.cart", ['cart' => $cart]);
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
