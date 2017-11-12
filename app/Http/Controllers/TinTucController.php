<?php

namespace App\Http\Controllers;

use App\NhanModel;
use Illuminate\Http\Request;
use App\DanhMucTinTucModel;
use App\TinTucModel;

use DateTime;


class TinTucController extends Controller
{
    public function getDanhMucTinTuc()
    {
        $dm = new DanhMucTinTucModel();
        $nhan = new NhanModel();
        return view('admin.Them_tintuc', ['danhmuc' => $dm->getDanhMuc(), 'nhan' => $nhan->DanhSach()]);
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
        if ($data != 0) {
            return redirect()->back()->with('success', 'The Message');
        } else {
            return redirect()->back()->with('fail', 'The Message');
        }
    }

    public function CapNhatTrangThai(Request $request)
    {
        $tintuc = new TinTucModel();
        $tintuc->setMsbaiviet($request->input('id'));
        $tintuc->setTrangthai($request->input('trangthai'));
        return $tintuc->TrangThai();
    }

    public function checkURL(Request $request)
    {
        $tintuc = new TinTucModel;
        $tintuc->setUrl(str_slug($request->input('url'), '-'));
        $check = $tintuc->Kiemtra_URL();
        if ($check == false) {
            return "URL đã có. Vui lòng nhập lại url!";
        }
        return "";
    }

    public function postThem(Request $request)
    {
        $tintuc = new TinTucModel;
        $tintuc->setUrl(str_slug($request->input('textURL'), '-'));
        $check = $tintuc->Kiemtra_URL();
        if ($check == true) {
            $tintuc->setTieude($request->input('texttieude'));
            $tintuc->setMsdmbaiviet($request->msdmbaiviet);
            $tintuc->setNoidung($request->input('editor'));
            $tintuc->setUrl(str_slug($request->input('textURL'), '-'));
            $tintuc->setAnhdaidien($request->input('luuanh'));
            $tintuc->setTrangthai(0);
            $tintuc->setLuotxem(0);
            $tintuc->setNhan($request->input('texttag'));
            $tintuc->setSearchtitle($request->input('textSTitle'));
            $tintuc->setSearchdescription($request->input('textSURL'));
            $dt = new DateTime();
            $tintuc->setNgaytaobai($dt);
            $data = $tintuc->Them();
            if (!($data)) {
                return redirect()->action('TinTucController@DanhSachTinTuc');
            } else {
                return redirect()->back()->with('fail', 'Thêm tin tức thất bại!');
            }
        } else
            return redirect()->back()->with('fail', 'URL đã tồn tại, vui lòng kiểm tra lại');
    }

    public function getTinTuc()
    {
        $dm = new TinTucModel();
        return view('admin.Tintuc', ['danhmuc' => $dm->getDanhMuc()]);
    }

    public function postUpdateTinTuc(Request $request)
    {
        $tintuc = new TinTucModel;
        $tintuc->setTieude($request->input('texttieude'));
        $tintuc->setMsdmbaiviet($request->msdmbaiviet);
        $tintuc->setNoidung($request->input('editor'));
        $tintuc->setUrl(str_slug($request->input('textURL'), '-'));
        $tintuc->setAnhdaidien($request->input('luuanh'));
        $tintuc->setNhan($request->input('texttag'));
        $tintuc->setSearchtitle($request->input('textSTitle'));
        $tintuc->setSearchdescription($request->input('textSURL'));
        $tintuc->postUpdateBaiViet($request->input('msbaiviet'));
        $tintuc->postUpdateBaiViet(msdmbaiviet);
        return redirect()->action('TinTucController@DanhSachTinTuc');
    }
}
