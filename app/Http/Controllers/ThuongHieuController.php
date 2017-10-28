<?php

namespace App\Http\Controllers;

use App\ThuongHieuModel;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    public function DanhSachThuongHieu(){
        $th = new ThuongHieuModel();
    }
}