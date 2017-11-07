<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class NhanModel extends Model
{
    public $msnhan;
    public $tennhan;
    public $urlnhan;

    public function DanhSach(){
        $query = "SELECT  * FROM public.\"nhan\"";
        $result = DB::select($query);
        return $result;
    }
}
