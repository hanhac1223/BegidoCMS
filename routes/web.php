<?php

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
    return view('admin.master');
});

Route::get('/sanpham', function () {
    return view('Sanpham.view-san-pham');
});

Route::get('/sanpham/them', function () {
    return view('Them_sanpham');
});

Route::get('/sanpham/capnhat', function () {
    return view('admin.Chinhsua_sanpham');
});

Route::get('/sanpham/danhmuc', function () {
    return view('admin.Danhmuc_sanpham');
});

Route::get('/sanpham/danhmuc/capnhat', function () {
    return view('admin.Chinhsua_dmsanpham');
});

Route::get('/donhang', function () {
    return view('admin.Donhang');
});

Route::get('/donhang/capnhat', function () {
    return view('admin.Chinhsua_donhang');
});

//Route::prefix('sanpham')->group(function (){
//   Route::get('/', 'SanPhamController@getSanPham');
//   Route::get('/them', 'SanPhamController@Them');
//});

//Tin tuc
Route::prefix('tintuc')->group(function (){
   Route::get('/them', 'TinTucController@getDanhMucTinTuc');
   Route::post('postThem', 'TinTucController@postThem');

});


Route::get('/tintuc', function () {
    return view('admin.Tintuc');
});

Route::get('/tintuc/capnhat', function () {
    return view('admin.Chinhsua_tintuc');
});

Route::get('/tintuc/danhmuc/them', function () {
    return view('admin.Danhmuc_tintuc');
});

Route::get('/tintuc/danhmuc/capnhat', function () {
    return view('admin.Chinhsua_dmtintuc');
});
