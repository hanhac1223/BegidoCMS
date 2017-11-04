<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ThanhVienModel extends Model
{
    public $msuser;
    public $houser;
    public $tenuser;
    public $emailuser;

    public function checkUserLogin($us , $pw)
    {
        $pw = sha1($pw);
        $query = "SELECT * FROM public.\"taikhoan\" tk WHERE tk.tendangnhap = '$us' AND tk.matkhau = '$pw'";
        $result = DB::select($query);
        return $result;
    }
}
