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
    return view('SanPham.view-san-pham');
});

Route::get('/sanpham/them', function () {
    return view('SanPham.view-them-san-pham');
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


Route::prefix('tintuc')->group(function (){
   Route::get('/', 'TinTucController@DanhSachTinTuc');
   Route::get('/them', 'TinTucController@getDanhMucTinTuc');
   Route::get('/capnhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
   Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
   Route::post('/capnhattrangthai', 'TinTucController@CapNhatTrangThai');
   Route::post('postThem', 'TinTucController@postThem');
   Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');

});
Route::get('login',  ['as' => 'getLogin',  'uses' => 'LoginController@getLogin']);
Route::get('postLogin', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);

Route::get('admin', ['as' => 'admin', function() {
    return view('admin.tintuc');
}]);
