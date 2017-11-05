<?php

namespace App\Http\Controllers;

use App\ThanhVienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\User;


class LoginController extends Controller
{

    public function getLogin()
    {
//        if (!Auth::check()) {
            return view('admin.login');
//        }
//        else {
//            return redirect('admin');
//        }
    }

    public function postLogin(LoginRequest $request)
    {

        $tendangnhap = $request->txtTaiKhoan;
        $matkhau     = sha1($request->txtMatKhau);
        $login = [
            'tendangnhap'  => $tendangnhap,
            'matkhau'      => $matkhau
        ];


        if (Auth::attempt($login)) {
//            return redirect()->route('admin.index');
            return "IF";
        }
        else
        {
//            return redirect()->back()->with('fail','Bạn nhập sai tài khoản hoặc mật khẩu');
            return "ELSE";
        }

    }
}
