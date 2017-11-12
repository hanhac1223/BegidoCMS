<?php

namespace App\Http\Controllers;

use App\ThanhVienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DangNhapController extends Controller
{
    public function getViewDangNhap(Request $request)
    {
        if($request->session()->exists('TrangThaiDangnhap'))
            return redirect()->action('TinTucController@DanhSachTinTuc');
        return view('dang-nhap.view-dang-nhap');
    }

    public function postDangNhap(Request $request)
    {
        $tendangnhap = $request->txtTaiKhoan;
        $matkhau     = $request->txtMatKhau;
        $tv = new ThanhVienModel();
        $kq = $tv->checkUserLogin($tendangnhap, $matkhau);
        if ($kq)
        {
            $request->session()->push("TrangThaiDangnhap", $kq);
            return redirect()->action('TinTucController@getViewDanhSachTinTuc');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function postDangXuat(Request $request)
    {
        $request->session()->forget('TrangThaiDangnhap');
        return redirect()->action('DangNhapController@getViewDangNhap');
    }
}
