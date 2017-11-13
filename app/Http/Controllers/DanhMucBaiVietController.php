<?php

namespace App\Http\Controllers;

use App\DanhMucTinTucModel;
use Illuminate\Http\Request;

class DanhMucBaiVietController extends Controller
{
    function getViewThem(){
        return view('danh-muc-bai-viet.view-them-danh-muc-bai-viet');
    }

    public function getViewDanhSach()
    {
        $dm = new DanhMucTinTucModel();
        return view('danh-muc-bai-viet.view-danh-muc-bai-viet', ['danhmuc' => $dm->getDanhMuc()]);
    }

}
