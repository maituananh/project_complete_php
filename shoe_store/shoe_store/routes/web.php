<?php

Route::get('getAllUsers', ['uses' => 'userController@listUsers']);

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/ErrorLogin', function () {
    return view('pages.errorLogin');
});

Route::get('/deleteBag/{id}', ['uses' => 'buyproductsController@deleteProductsBag']);


Route::get('getAllslides', ['uses' => 'slidesController@listSlide']);

Route::get('getAllProducts', ['uses' => 'productsController@getAllProducts']);

Route::get('/logout', ['uses' => 'userController@logout']);

Route::post('/addUser', ['uses' => 'userController@addUser']);

Route::post('/Check_User', ['uses' => 'userController@Check_User']);

Route::get('/bag', function () {
    return view('pages.bagProducts');
});

Route::get('author', function() {
    return view('pages.footer');
});

Route::post('getSearch', ['uses' => 'productsController@search']);

Route::get('countProducts', ['uses' => 'buyproductsController@countProducts']);

Route::group(['prefix' => 'myBag'], function () {
    
    Route::get('/', ['uses' => 'buyproductsController@listsBag']);

    Route::get('/addtobag', ['uses' => 'buyproductsController@addbag']);
});

Route::group(['prefix' => '/kind'], function () {

    Route::get('/adidas',['uses' => 'productsController@listSingleadidas']);

    Route::get('/converse', ['uses' => 'productsController@listSingleconverse']);

    Route::get('/nike', ['uses' => 'productsController@listSinglenike']);

    Route::get('/new', ['uses' => 'productsController@listSinglenew']);
});

// NHÓM ROUTE MUA HÀNG
Route::group(['prefix' => 'single'], function () {

    Route::get('{id}',['uses' => 'productsController@listSingle']);

    Route::post('buyProduct/{idProducts}', ['uses' => 'buyproductsController@buyProduct']);

    Route::get('buyProductnow/{idProducts}', ['uses' => 'buyproductsController@buyProduct']);
});

// NHÓM ROUTE CHO ADMIN
Route::group(['prefix' => 'admin'], function () {

    Route::get('addProducts', ['uses' => 'productsController@addProducts']);

    Route::get('ListProducts', ['uses' => 'productsController@listProducts']);

    Route::get('ListUsers', ['uses' => 'userController@ListUserspage']);

    Route::get('deleteProducts/{id}', ['uses' => 'productsController@deleteProduct']);

    Route::post('addProduct', ['uses' => 'productsController@SubmitAddProduct']);

    Route::get('updateProducts/{idProducts}', ['uses' => 'productsController@updateProduct']);

    Route::post('updateProducts/submitUpdateProduct/{idProducts}', ['uses' => 'productsController@submitUpdateProduct']);

    Route::get('delete_User/{id}', ['uses' => 'userController@deleteUser']);
});