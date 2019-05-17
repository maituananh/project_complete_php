<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\products; // gọi class model để làm vc
class productsController extends Controller
{
    public function getAllProducts()
    {
        return products::orderBy('idProducts', 'ASC')->get();
    }

    public function search(Request $request) 
    {
        $name = $request->Search;
        $listSearch = products::where('name', 'like', $name.'%')->get();
        return view('pages.search', ['list' => $listSearch]);
    }

    public function listSingle(Request $request, $id) 
    {
        $id = $request->id;
        $listSingle = products::where('id', '=', $id)->get();
        return view('pages.single', ['listSingle' => $listSingle]);
    }

    public function deleteProduct($idProducts)
    {
        products::where('idProducts', '=', $idProducts)->delete();
        return redirect('admin/ListProducts');
        // dùng để chuyển hướng trang mà không mang theo dữ liệu cũ trên đường link
    }

    public function updateProduct($idProducts)
    {
        return view('pages.updateProducts',
            [
                'id' => $idProducts
            ]
        );
    }

    public function submitUpdateProduct(Request $request, $idProducts)
    {
        $Products = new products;
        $files = $request->file('files');
        $fileName = $files->getClientOriginalName('files');
        $files->move('image', $fileName);

        DB::table('products')
            ->where('idProducts', $idProducts)
            ->update(
                ["name" => $request->Name],
                ["price" => $request->price],
                ["category"=> $request->category],
                ["describe" => $request->describe],
                ["content_details" =>$request->content_details],
                ["reviews" =>$request->reviews],
                ["like" =>$Products->like = 0],
                ["updated_at" =>new DateTime()],
                ["created_at" =>new DateTime()],
                ["image" =>$Products->image = $fileName]
            );
        if ($Products != "") {
            return view('pages.index');
        } else {
            return view('pages.addProducts');
        }
    }

    public function SubmitAddProduct(Request $request)
    {
        $Products = new products;
        $Products->name = $request->Name;
        $Products->price = $request->price;

        $files = $request->file('files');
        $fileName = $files->getClientOriginalName('files');
        $files->move('image', $fileName);
        $Products->image = $fileName;

        $Products->category = $request->category;
        $Products->like = 0;
        $Products->describe = $request->describe;
        $Products->content_details = $request->content_details;
        $Products->reviews = $request->reviews;
        $Products->updated_at = new DateTime();
        $Products->created_at = new DateTime();
        if ($Products != "") {
            $Products->save();
            return view('pages.index');
        } else {
            return view('pages.addProducts');
        }
    }

    public function listProducts(Request $request)
    {
        if ($request->session()->has('username') == "" || $request->session()->has('username') != 'admin') {
            return view('pages.errorLogin');
        } else {
            return view('pages.listProducts');
        }
    }

    public function addProducts(Request $request)
    {
        if ($request->session()->has('username') == "" || $request->session()->has('username') != 'admin') {
            return view('pages.errorLogin');
        } else {
            return view('pages.addProducts');
        }
    }

    public function listSingleadidas() 
    {
        $listSearch = products::where('name', 'like', 'adidas%')->get();
        return view('pages.search', ['list' => $listSearch]);
    }

    public function listSingleconverse() 
    {
        $listSearch = products::where('name', 'like', 'converse%')->get();
        return view('pages.search', ['list' => $listSearch]);
    }

    public function listSinglenike() 
    {
        $listSearch = products::where('name', 'like', 'nike%')->get();
        return view('pages.search', ['list' => $listSearch]);
    }

    public function listSinglenew() 
    {
        $listSearch = products::orderBy('created_at', 'ASC')->get();
        return view('pages.search', ['list' => $listSearch]);
    }
}