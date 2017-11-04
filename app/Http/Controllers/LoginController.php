<?php

namespace App\Http\Controllers;

use App\ThanhVienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin()
    {
        $tv = new ThanhVienModel();
        $kq = $tv->checkUserLogin($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
        if ($kq) {
            echo "Đã login";
        } else {
            echo "Sai tài khoản pw";
        }
    }
}
