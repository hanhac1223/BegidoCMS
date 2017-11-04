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

<<<<<<< HEAD
    public function getURL(Request $request)
    {
        $index = new TinTucModel;
        return view('admin.Them_tintuc', ['urltieude' => $index->getDanhMuc()]);
    }
=======
    public function DanhSachTinTuc()
    {
        $dm = new TinTucModel();
        return view('admin.Tintuc', ['danhmuc' => $dm->getDanhMuc()]);
    }

    public function getIDCapNhatTinTuc(Request $request, $id)
    {
        echo $id;
    }
    public function getIDXoaTinTuc(Request $request, $id)
    {
        $tintuc = new TinTucModel();
        $tintuc->setMsbaiviet($id);
        $data = $tintuc->Xoa();

        if($data != 0)
        {
            return redirect()->back()->with('success','The Message');
        }
        else
        {
            return redirect()->back()->with('fail','The Message');
        }
    }

>>>>>>> 260fd6766e92ab1671bdc5135f6ebc56f0e9fd70
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

<<<<<<< HEAD

=======
    public function getTinTuc()
    {
        $dm = new TinTucModel();
        return view('admin.Tintuc', ['danhmuc' => $dm->getDanhMuc()]);
    }
>>>>>>> 260fd6766e92ab1671bdc5135f6ebc56f0e9fd70
}
