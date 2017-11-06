<?php

//Route::prefix('tintuc')->group(function (){
//   Route::get('/', 'TinTucController@DanhSachTinTuc');
//   Route::get('/them', 'TinTucController@getDanhMucTinTuc');
//   Route::get('/capnhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
//   Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
//   Route::post('/capnhattrangthai', 'TinTucController@CapNhatTrangThai');
//   Route::post('postThem', 'TinTucController@postThem');
//   Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
//
//});
//
Route::get('login',  ['as' => 'getLogin',  'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);

//Route::group(['middleware' => 'CheckLogin'], function () {
//    Route::group(['prefix' => 'admin'], function () {
//        Route::get('/', function () {
//            return view('admin.Tintuc');
//        });
//
////        Route::group(['prefix' => 'tintuc'], function () {
////            Route::get('/', 'TinTucController@DanhSachTinTuc');
////           Route::get('/them', 'TinTucController@getDanhMucTinTuc');
////           Route::get('/capnhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
////           Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
////           Route::post('/capnhattrangthai', 'TinTucController@CapNhatTrangThai');
////           Route::post('postThem', 'TinTucController@postThem');
////           Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
////        });
//    });
//});

Route::group(['prefix' => 'tintuc',  'middleware' => 'CheckLogin'], function()
{
    Route::get('/', 'TinTucController@DanhSachTinTuc');
    Route::get('/them', 'TinTucController@getDanhMucTinTuc');
    Route::get('/capnhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
    Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
    Route::post('/capnhattrangthai', 'TinTucController@CapNhatTrangThai');
    Route::post('postThem', 'TinTucController@postThem');
    Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
});

