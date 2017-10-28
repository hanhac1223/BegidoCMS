<?php

namespace App\Http\Controllers;

use App\DanhMucSanPhamModel;
use App\SanPhamModel;
use App\ThuongHieuModel;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function getSanPham()
    {
        $sanPham = new SanPhamModel();
        $data="akjsdhkja";
        return view('SanPham.view-san-pham', ['user' => $sanPham->ThemSanPham()]);
    }

    public function Them()
    {
        $th = new ThuongHieuModel();
        $dmsp = new DanhMucSanPhamModel();
        return view('SanPham.view-them-san-pham',
            ['DSThuongHieu' => $th->DanhSachThuongHieu(),'DSDanhMucSanPham' => $dmsp->DanhSachDanhMucSanPham()]
            );
    }

}
