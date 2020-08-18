<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', function() {
        $product = DB::table('products')->get();
        return view('users.index', ['product'=>$product]);
    });
   
    Auth::routes();

    Route::resource('/admin', 'AdminController');

    Route::get('product/{product:name}', 'ProductController@show');

    Route::resource('cart', 'CartController');

    Route::resource('check', 'CheckController');

    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');