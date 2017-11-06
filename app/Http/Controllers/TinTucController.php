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
        $index = new TinTucModel;
        return view('admin.Them_tintuc', ['urltieude' => $index->getDanhMuc()]);
    }

    public function DanhSachTinTuc()
    {
        $dm = new TinTucModel();
        return view('admin.Tintuc', ['danhmuc' => $dm->getDanhMuc()]);
    }

    public function getIDCapNhatTinTuc(Request $request, $id)
    {
        $tintuc = new TinTucModel();
        $dm = new DanhMucTinTucModel();
        $index = $tintuc->getBaiViet($id);
        if ($index != 0) {
            return view('admin.Chinhsua_tintuc', ['data' => $tintuc->getBaiViet($id), 'danhmuc' => $dm->getDanhMuc()]);
        } else
            return redirect()->back()->with('non-object', '');
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

    public function CapNhatTrangThai(Request $request){
        $tintuc = new TinTucModel();
        $tintuc->setMsbaiviet($request->input('id'));
        $tintuc->setTrangthai($request->input('trangthai'));
        return $tintuc->TrangThai();
    }
        if ($data != 0) {
            return redirect()->back()->with('success', 'The Message');
        } else {
            return redirect()->back()->with('fail', 'The Message');
        }
    }

    public function postThem(Request $request)
    public function postThem( Request $request)
    {
        $tintuc = new TinTucModel;
        if (!($tintuc->Kiemtra_URL(str_slug($request->input('textURL'), '-')))) {

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

            $data = $tintuc->Them();
            if (!($data)) {
                return redirect()->back()->with('success', 'Thêm tin tức thành công!');
            } else {
                return redirect()->back()->with('fail', 'Thêm tin tức thất bại!');
            }
        }
        else
            return redirect()->back()->with('fail', 'Thêm tin tức thất bại!');
    }

    public function getTinTuc()
    {
        $dm = new TinTucModel();
        return view('admin.Tintuc', ['danhmuc' => $dm->getDanhMuc()]);
    }

    public function postUpdateTinTuc(Request $request)
    {
        $tintuc = new TinTucModel;
        $check = $tintuc->Kiemtra_URL($tintuc->setUrl(str_slug($request->input('textURL'), '-')));
        if ($check == 0) {
            $tintuc->setTieude($request->input('texttieude'));
            $tintuc->setMsdmbaiviet($request->msdmbaiviet);
            $tintuc->setNoidung($request->input('editor'));
            $tintuc->setUrl(str_slug($request->input('textURL'), '-'));
            $tintuc->setAnhdaidien($request->input('luuanh'));
            $tintuc->setNhan(" ");
            $tintuc->setSearchtitle($request->input('textSTitle'));
            $tintuc->setSearchdescription($request->input('textSURL'));

            $tintuc->postUpdateBaiViet($request->input('msbaiviet'));
            return redirect()->back()->with('oject', 'Cập nhật tức thành công!');
        } else
            return redirect()->back()->with('non-oject', 'Cập nhật tin tức thất bại!');
    }
}
