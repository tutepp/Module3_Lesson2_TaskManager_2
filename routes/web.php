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
// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index', "\App\Http\Controllers\TaskController@index");
//         Hiển thị danh sách khách hàng

    Route::get('create', "\App\Http\Controllers\TaskController@creat");
        // Hiển thị Form tạo khách hàng

    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });

    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    });

    Route::get('edit', "\App\Http\Controllers\TaskController@edit");
        // Hiển thị Form chỉnh sửa thông tin khách hàng

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
});



