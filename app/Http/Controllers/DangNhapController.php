<?php

namespace App\Http\Controllers;

use App\ThanhVienModel;
use Illuminate\Http\Request;

class DangNhapController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function postDangNhap(Request $request)
    {
        $tendangnhap = $request->txtTaiKhoan;
        $matkhau     = $request->txtMatKhau;
        $tv = new ThanhVienModel();
        $kq = $tv->checkUserLogin($tendangnhap, $matkhau);
        if ($kq)
        {
            $_SESSION['TrangThaiDangnhap'] = $kq;
            return redirect()->action('TinTucController@DanhSachTinTuc');
        }
        else
        {
            return redirect()->back()->with('fail','Login thất bại!');
        }
    }

    public function postDangXuat(Request $request)
    {
        $_SESSION['TrangThaiDangnhap'] = null;
    }
}
