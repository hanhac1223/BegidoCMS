<?php
Route::get('/', 'DangNhapController@getViewDangNhap');
Route::post('/dang-nhap', 'DangNhapController@postDangNhap');
Route::get('/dang-xuat', 'DangNhapController@postDangXuat');

Route::group(['prefix' => 'tin-tuc'], function()
{
    Route::get('/', 'TinTucController@getViewDanhSachTinTuc');
    Route::get('/them', 'TinTucController@getViewThemTinTuc');
    Route::get('/cap-nhat/{id}', 'TinTucController@getViewCapNhatTinTuc');
    Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
    Route::post('/cap-nhat-trang-thai', 'TinTucController@postCapNhatTrangThai');
    Route::post('postThem', 'TinTucController@postThem');
    Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
    Route::post('them/AjaxCheckURL','TinTucController@checkURL');
});

Route::group(['prefix' => 'danh-muc'], function()
{
    Route::get('/', 'DanhMucBaiVietController@getViewDanhSach');
});

Route::group(['prefix' => 'nhan'], function()
{
    Route::get('/', 'NhanController@getViewDanhSachNhan');
    Route::post('/them', 'NhanController@postThem');
});

Route::group(['prefix' => 'redirect'], function()
{
    Route::get('/', 'RedirectController@getViewRedirect');
    Route::post('/them', 'RedirectController@postThem');
});

