<?php

Route::get('/', ['uses' => 'ProductController@home']);

Route::get('/home', ['uses' => 'ProductController@home']);

Route::get('/single/{id_products}', ['uses' => 'ProductController@single']);

Route::get('/all', ['uses' => 'ProductController@all']);

Route::get('/login', function () {
    return view('page.login');
});

Route::post('/CheckLogin', ['uses' => 'UsersController@CheckLogin']);

Route::get('/logout', ['uses' => 'UsersController@LogOut']);

Route::get('/edit', ['uses' => 'ManagementProducts@index']);

Route::get('/delete/{id_products}', ['uses' => 'ManagementProducts@delete']);

Route::get('/showUpdate/{id_products}', ['uses' => 'ManagementProducts@show']);

Route::post('/update', ['uses' => 'ManagementProducts@update']);

Route::get('/viewadd', function(){
    return view('page.add');
});

Route::post('/add', ['uses' => 'ManagementProducts@create']);



Route::get('/addOne/{id_products}', ['uses' => 'BuyProductsController@addone']); // thêm 1 sản phẩm vào giỏ hàng

Route::get('/pay/{tongtien}', ['uses' => 'BuyProductsController@pay']); // tính tiền trong giỏ hàng hiện tại

Route::get('/purchased', ['uses' => 'BuyProductsController@purchased']); // sản phẩm đã mua

Route::get('/registration', function(){ // vào trang đăng kí
    return view('page.registration');
});

Route::post('/submitregistration', ['uses' => 'UsersController@create']); // thực hiện đăng ký

Route::post('/addCart', ['uses' => 'CartController@addCart']); // thêm sản phẩm vào giỏ hàng + số lượng

Route::get('/cart', ['uses' => 'CartController@show']); // sản phẩm đang có trong giỏ CHƯA TÍNH TIỀN

Route::get('/deleteProductInCart/{id_products}', ['uses' => 'CartController@deleteProductInCart']); // xóa sản phẩm bất kì trong giỏ hàng
