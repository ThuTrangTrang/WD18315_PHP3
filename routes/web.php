<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;
use App\Http\Controllers\ProductController;
// GET, POST, PUT, PATCH, DELETE (method http)
//base url:http://127.0.0.1:8000/
//http://127.0.0.1:8000/test
//Dat ten chuan SEO: 'danh-sach-san-pham'
Route::get('test', function(){
    echo '123';
});
//http://127.0.0.1:8000/
Route::get('/', function(){
    echo 'Trang chu';
});
Route::get('list-product',[ProductController::class, 'showProduct']);
// Truyền dữ liệu từ Route => Controller

//slug
// http://127.0.0.1:8000/get-product/3/iphone12
Route::get('get-product/{id}/{name?}',[ProductController::class, 'getProduct']);

//Params
// http://127.0.0.1:8000/update-product/?id=3&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);

Route::get('thongtinsv',[InforController::class, 'thongtinsv']);