<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function getSanPham()
    {
        $sanPham = new SanPhamModel();
        return view('SanPham.view-san-pham',['sp'=> "hsgadhjsagd"]);
    }

}
