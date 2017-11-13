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
        $arrNhan = array();
        $query = "SELECT * FROM public.\"nhan\"";
        $result = DB::select($query);
        foreach ($result as $item){
            $temp = new NhanModel;
            $temp->msnhan = $item->msnhan;
            $temp->tennhan = $item->tennhan;
            $temp->urlnhan = $item->urlnhan;
            array_push($arrNhan, $temp);
        }
        return $arrNhan;
    }

    public function Them(){
        $query = "INSERT INTO public.nhan (tennhan, urlnhan) VALUES ('$this->tennhan', '$this->urlnhan')";
        $result = DB::insert($query);
        return $result;
    }
}
