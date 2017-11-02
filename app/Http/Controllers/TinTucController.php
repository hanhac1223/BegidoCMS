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

    public function postThem( Request $request)
    {
        $tintuc = new TinTucModel;

        $tintuc->setTieude($request->input('texttieude'));
        $tintuc->setMsdmbaiviet($request->msdmbaiviet);
        $tintuc->setNoidung($request->input('editor'));
        $tintuc->setUrl($request->input('textURL'));
        $dt = new DateTime();
        $tintuc->setNgaytaobai($dt);
        $tintuc->setTrangthai("Chờ duyệt");
        $tintuc->setLuotxem(0);
        $tintuc->setNhan(" ");
        $tieude = $request->input('texttieude');

        $data = $tintuc->Them();
        if($data != 0)
        {
            return redirect()->back()->with('success','The Message');
        }
        else
        {
            return redirect()->back()->with('fail','The Message');
        }

    }
}
