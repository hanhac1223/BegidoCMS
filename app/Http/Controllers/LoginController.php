<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckLogin;
use App\ThanhVienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\User;
use Session;
class LoginController extends Controller
{

    public function getLogin()
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
            Session::set('TrangThaiDangnhap',$kq);
            return redirect()->action('TinTucController@DanhSachTinTuc');
        }
        else
        {
            return redirect()->back()->with('fail','Login thất bại!');
        }
    }
}
