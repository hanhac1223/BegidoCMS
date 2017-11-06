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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD



//Route::get('/tintuc', function () {
//    return view('admin.Tintuc');
//});
//
//Route::get('/tintuc/capnhat', function () {
//    return view('admin.Chinhsua_tintuc');
//});
//
//Route::get('/tintuc/danhmuc/them', function () {
//    return view('admin.Danhmuc_tintuc');
//});
//
//Route::get('/tintuc/danhmuc/capnhat', function () {
//    return view('admin.Chinhsua_dmtintuc');
//});

// ****** LOGIN ******** //
//Route::get('login',  ['as' => 'getLogin',  'uses' => 'LoginController@getLogin']);
//Route::get('postLogin', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);

=======
<<<<<<< HEAD
/*
Route::get('/tintuc', function () {
    return view('admin.Tintuc');
});

Route::get('/tintuc/capnhat', function () {
    return view('admin.Chinhsua_tintuc');
});
>>>>>>> 592c232a542eec399b1c7120911a9bb847e049d3


<<<<<<< HEAD
=======
// ****** LOGIN ******** //
=======

>>>>>>> d411ae29da2e98d32a81ff88fce44d274b664635
>>>>>>> 729caebea0270e524998dadfad79837f5b646520
>>>>>>> 86ed12b29b820b08fdbd0bdbf367f1ee12932beb
>>>>>>> 592c232a542eec399b1c7120911a9bb847e049d3
Route::get('login',  ['as' => 'getLogin',  'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);

Route::group(['middleware' => 'auth'],  function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view('admin.index');
        });
    });
});

Route::get('admin', ['as' => 'admin', function() {
    return view('admin.tintuc');
}]);

