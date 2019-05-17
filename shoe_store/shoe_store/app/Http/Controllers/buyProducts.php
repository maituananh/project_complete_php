<?php

namespace App\Http\Controllers;

use App\buyproducts;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB; 

class buyproductsController extends Controller
{
    public function buyProduct(Request $request, $idProducts) {
        $buyProducts = new buyproducts;
        $buyProducts->idProducts = $idProducts;
        $buyProducts->name_Users = $request->session()->get('username');
        $buyProducts->updated_at = new DateTime();
        $buyProducts->created_at = new DateTime();
        $buyProducts->save();
        if($buyProducts != '') {
            echo "<script> alert('BUY PRODUCTS SUCCESS') </script>";
        }else {
            echo "<script> alert('BUY PRODUCTS NOT SUCCESS') </script>";
        }
        return redirect('/');
    }

    public function listsBag(Request $request) {
        $name = $request->session()->get('username');
        $join = DB::table('buyproducts')
        ->select('products.*', 'buyproducts.*')
        ->join('products', "products.idProducts", '=', "buyproducts.idProducts")
        ->where('name_Users', '=', $name)
        ->get();
        return view('pages.mybag', ['list'=>$join]);
    }

    public function addbag(Request $request, $idProducts) {
        $buyProducts = new buyproducts;
        $buyProducts->idProducts = $idProducts;
        $buyProducts->name_Users = $request->session()->get('username');
        $buyProducts->updated_at = new DateTime();
        $buyProducts->created_at = new DateTime();
        $buyProducts->save();
        if($buyProducts != '') {
            echo "<script> alert('BUY PRODUCTS SUCCESS') </script>";
            return redirect('/');
        }else {
            echo "<script> alert('BUY PRODUCTS NOT SUCCESS') </script>";
            return redirect('/');
        }
    }

    public function deleteProductsBag(Request $request, $id) {
        DB::table('buyproducts')->where('id', $id)->delete();
        return redirect('/');
    }

    public function countProducts() {
        $count = DB::table('buyproducts')
        ->select('buyproducts.idProducts', 'products.name', 'products.price', 'products.image', 'products.category', 'products.describe','products.content_details', 'products.reviews', 'products.created_at', 'products.like',
        DB::raw('COUNT(buyproducts.idProducts) as products_count'))
        ->join('products', "products.idProducts", '=', "buyproducts.idProducts")
        ->groupBy('buyproducts.idProducts', 'products.name', 'products.price', 'products.image', 'products.category', 'products.describe','products.content_details', 'products.reviews', 'products.created_at', 'products.like')
        ->having('products_count', '>=' , 1)
        ->orderby('products_count', 'desc')
        ->get();
        //echo $count;
        return view('pages.topSell', ['list'=>$count]);
    }
    
}