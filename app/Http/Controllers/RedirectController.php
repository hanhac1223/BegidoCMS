<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RedirectController extends Controller
{
    public function getViewRedirect()
    {
        $qr = "SELECT
                idredirect,
                oldurl,
                newurrl
              FROM redirect;";
        $rs = DB::select($qr);
        return view('redirect.view-redirect', ["data" => $rs]);
    }

    public function postThem(Request $request){
        $old = $request->input('urlCu');
        $new = $request->input('urlMoi');
        $qr = "INSERT  INTO  redirect (oldurl, newurrl) VALUES ('$old', '$new')";
        $rs = DB::insert($qr);
        return redirect()->back();
    }
}
