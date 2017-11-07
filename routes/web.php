<?php
Route::get('/', 'DangNhapController@index');
Route::post('/dang-nhap', 'DangNhapController@postDangNhap');
Route::post('/dang-xuat', 'DangNhapController@postDangXuat');

Route::prefix('tin-tuc')->group(function () {
    Route::get('/', 'TinTucController@DanhSachTinTuc');
    Route::get('/them', 'TinTucController@getDanhMucTinTuc');
    Route::get('/cap-nhat/{id}', 'TinTucController@getIDCapNhatTinTuc');
    Route::get('/xoa/{id}', 'TinTucController@getIDXoaTinTuc');
    Route::post('/cap-nhat-trang-thai', 'TinTucController@CapNhatTrangThai');
    Route::post('postThem', 'TinTucController@postThem');
    Route::post('postUpdate', 'TinTucController@postUpdateTinTuc');
});

Route::get('/nhan', 'NhanController@DanhSachNhanJSON');