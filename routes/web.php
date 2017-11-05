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
   Route::post('postThem', 'TinTucController@postThem');

});

<<<<<<< HEAD

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

// ****** LOGIN ******** //
Route::get('login',  ['as' => 'getLogin',  'uses' => 'LoginController@getLogin']);
Route::get('postLogin', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);

Route::get('admin', ['as' => 'admin', function() {
    return view('admin.tintuc');
}]);
=======
>>>>>>> 172c45a046b5708e3f218aded34dd6bd2f1bca5c
