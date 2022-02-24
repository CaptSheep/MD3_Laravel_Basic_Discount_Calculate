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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',function (Illuminate\Http\Request $request){
    return view('product_info');
});

Route::post("/login", function (Illuminate\Http\Request $request) {
    $productDescription = $request->descripstion;
    $price = $request->price;
    $discountPercent = $request->discountPercent;
    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountPercent;

    return compact(["productDescription","price","discountPercent","discountAmount","discountPrice"]);

});
