<?php
Route::get('/', 'DangNhapController@index');
Route::post('/dang-nhap', 'DangNhapController@postDangNhap');
Route::get('/dang-xuat', 'DangNhapController@postDangXuat');

Route::group(['prefix' => 'tin-tuc',  'middleware' => 'KiemTraDangNhap'], function()
{
    Route::get('/', 'TinTucController@DanhSachTinTuc');
    Route::get('/them', 'TinTucController@getDanhMucTinTuc');
    Route::get('/cap-nhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
    Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
    Route::post('/cap-nhat-trang-thai', 'TinTucController@CapNhatTrangThai');
    Route::post('postThem', 'TinTucController@postThem');
    Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
});

Route::group(['prefix' => 'danh-muc'], function()
{
    Route::get('/', 'DanhMucBaiVietController@getViewDanhSach');
    Route::get('/them', 'DanhMucBaiVietController@getViewThem');
});

Route::group(['prefix' => 'nhan'], function()
{
    Route::get('/ajax/danh-sach', 'NhanController@DanhSachNhanJSON');
});

