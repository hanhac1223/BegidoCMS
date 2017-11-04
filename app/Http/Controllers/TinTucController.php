<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucTinTucModel;
use App\TinTucModel;

use DateTime;


class TinTucController extends Controller
{
    public function getDanhMucTinTuc()
    {
        $dm = new DanhMucTinTucModel();
        return view('admin.Them_tintuc', ['danhmuc' => $dm->getDanhMuc()]);
    }

    public function getURL(Request $request)
    {
        $tintuc = new TinTucModel;
        return view('admin.Them_tintuc', ['danhmuc' => $->getDanhMuc()]);
    }
    public function postThem( Request $request)
    {
        $tintuc = new TinTucModel;

        $tintuc->setTieude($request->input('texttieude'));
        $tintuc->setMsdmbaiviet($request->msdmbaiviet);
        $tintuc->setNoidung($request->input('editor'));
        $tintuc->setUrl(str_slug($request->input('textURL'), '-'));
        $tintuc->setAnhdaidien($request->input('luuanh'));
        $tintuc->setTrangthai(0);
        $tintuc->setLuotxem(0);
        $tintuc->setNhan(" ");
        $tintuc->setSearchtitle($request->input('textSTitle'));
        $tintuc->setSearchdescription($request->input('textSURL'));

        $dt = new DateTime();
        $tintuc->setNgaytaobai($dt);

        $data = $tintuc->Them(str_slug($request->input('textURL'), '-'));

        if($data != 0)
        {
            return redirect()->back()->with('success','Thêm tin tức thành công!');
        }
        else
        {
            return redirect()->back()->with('fail','Thêm tin tức thất bại!');
        }

    }


}
