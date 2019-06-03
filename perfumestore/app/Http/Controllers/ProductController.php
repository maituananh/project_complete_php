<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home() {
        try {
            $ListProductsHome = DB::table('products')
            ->skip(4)
            ->take(5)
            ->get();
            return view("page.home", ['ListProductsHome' => $ListProductsHome]);
        }catch(\Exception $e) {
            return view('page.trangLoiKetNoi');
        }
    }

    public function single($id_products) {
        try {
            $single = DB::table('products')
            ->where('id_products', '=', $id_products)
            ->join('productcarrier', 'id_productCarrier', '=', 'product_carrier')
            ->select('products.name', 'products.price', 'products.image', 'productcarrier.Name', 'products.quantity', 'products.detail', 'products.id_products')
            ->get();
            return view("page.single", ['single' => $single]);
        }catch(\Exception $e) {
            return view('page.trangLoiKetNoi');
        }
    }

    public function all() {
        try {
            $all = DB::table('products')
            ->get();
            return view("page.all", ['all' => $all]);
        }catch(\Exception $e) {
            return view('page.trangLoiKetNoi');
        }
    }
}
