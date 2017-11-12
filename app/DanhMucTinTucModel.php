<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMucTinTucModel extends Model
{
    public $msdanhmucbaiviet;
    public $tendanhmucbaiviet;
    public $urldanhmucbaiviet;
    public $shorttextdanhmuc;
    public $pagetextdanhmuc;
    public $tongbaiviet;

    public function getDanhMuc()
    {
        $data = DB::select("SELECT * FROM public.danhmucbaiviet");
        return $data;
    }
}
