<?php

namespace App\Http\Controllers;

use App\NhanModel;
use Illuminate\Http\Request;

class NhanController extends Controller
{
    public function getViewDanhSachNhan(Request $request){
        $nhan = new NhanModel();
        return view('nhan.view-danh-sach-nhan',
            ['danhSach'=>$nhan->DanhSach()]);
    }

    public function postThem(Request $request){
        $nhan = new NhanModel();
        $nhan->tennhan = $request->input('tenNhan');
        $nhan->urlnhan = $request->input('urlNhan');
        if($nhan->Them() > 0){
            return redirect()->back()->with('thanhCong', 'Thêm nhãn thành công');
        }
        return redirect()->back()->with('thatBai', 'Thêm nhãn thất bại');
    }
}
