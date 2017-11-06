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
        if (Session::has('LoginSuccess')) {
//            return redirect()->action('TinTucController@DanhSachTinTuc');
//            return "IF SUS";
//            return redirect()->route('tintuc');
//            return redirect('admin')->route('');
            return "CHƯA đăng nahp65";
        }

        else {
            return view('admin.login');
        }
    }

    public function postLogin(LoginRequest $request)
    {
        $tendangnhap = $request->txtTaiKhoan;
        $matkhau     = $request->txtMatKhau;
        $tv = new ThanhVienModel();
        $kq = $tv->checkUserLogin($tendangnhap, $matkhau);
        if ($kq)
        {
            Session::put('LoginSuccess','Thành công');
//           return redirect()->action('TinTucController@DanhSachTinTuc');
//            return redirect()->route('/');
//            return redirect('admin');
            return "THÀNH CÔNG";
        }
        else
        {
            return redirect()->back()->with('fail','Login thất bại!');
        }
//        $login = [
//            'tendangnhap' => $request->txtTaiKhoan,
//            'matkhau'     => sha1($request->txtMatKhau)
//        ];
//        if (Auth::attempt($login))
//        {
////            return redirect('admin');
//            return "A";
//        }
//        else {
////            return redirect()->back()->with('fail','Login thất bại!');
//            return "ELSE";
//        }
    }
}
