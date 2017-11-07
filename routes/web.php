<?php
//Route::get('/', 'LoginController@getLogin')->name("index");
//Route::post('/dangnhap', 'LoginController@postLogin');
//


Route::prefix('tintuc')->group(function () {
    Route::get('/', 'TinTucController@DanhSachTinTuc');
    Route::get('/them', 'TinTucController@getDanhMucTinTuc');
    Route::get('/capnhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
    Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
    Route::post('/capnhattrangthai', 'TinTucController@CapNhatTrangThai');
    Route::post('postThem', 'TinTucController@postThem');
    Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
});

Route::get('/nhan', 'NhanController@DanhSachNhanJSON');

//Route::get('login',  ['as' => 'getLogin',  'uses' => 'LoginController@getLogin']);
//Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);


//Route::group(['prefix' => 'tintuc',  'middleware' => 'KiemTraDangNhap'], function()
//{
//    Route::get('/', 'TinTucController@DanhSachTinTuc');
//    Route::get('/them', 'TinTucController@getDanhMucTinTuc');
//    Route::get('/capnhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
//    Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
//    Route::post('/capnhattrangthai', 'TinTucController@CapNhatTrangThai');
//    Route::post('postThem', 'TinTucController@postThem');
//    Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
//});