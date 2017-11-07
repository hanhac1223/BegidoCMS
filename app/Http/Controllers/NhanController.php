<?php

namespace App\Http\Controllers;

use App\NhanModel;
use Illuminate\Http\Request;

class NhanController extends Controller
{
    public function DanhSachNhanJSON(Request $request){
        $nhan = new NhanModel();
        echo json_encode( $nhan->DanhSach() );
    }
}
