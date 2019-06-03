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

Route::get('/buy/{id_products}', ['uses' => 'BuyProductsController@BuyProduct']);

Route::post('/pay', ['uses' => 'BuyProductsController@pay']);

Route::get('/cart', ['uses' => 'BuyProductsController@cart']);

Route::get('/registration', function(){
    return view('page.registration');
});

Route::post('/submitregistration', ['uses' => 'UsersController@create']);
