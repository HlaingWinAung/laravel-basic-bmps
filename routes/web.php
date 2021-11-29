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
Route::get("/about", function () {
    return "this is about page";
});
Route::get("/contact", function () {
    return "this is contact page";
});
Route::get("products/{product_id}/shop/{shop_id}", function ($product_id, $shop_id) {
    return "this is products page for ".$product_id." for ".$shop_id;
});