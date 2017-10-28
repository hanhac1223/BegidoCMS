<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DanhMucSanPhamModel extends Model
{
    private $MSDANHMUCSANPHAM;
    private $TENDANHMUCSANPHAM;
    private $DANHMUCSANPHAMCHA;
    private $URLDANHMUCSANPHAM;

    /**
     * @return array
     */
    public function getMSDANHMUCSANPHAM()
    {
        return $this->MSDANHMUCSANPHAM;
    }

    /**
     * @param array $MSDANHMUCSANPHAM
     */
    public function setMSDANHMUCSANPHAM($MSDANHMUCSANPHAM)
    {
        $this->MSDANHMUCSANPHAM = $MSDANHMUCSANPHAM;
    }

    /**
     * @return mixed
     */
    public function getTENDANHMUCSANPHAM()
    {
        return $this->TENDANHMUCSANPHAM;
    }

    /**
     * @param mixed $TENDANHMUCSANPHAM
     */
    public function setTENDANHMUCSANPHAM($TENDANHMUCSANPHAM)
    {
        $this->TENDANHMUCSANPHAM = $TENDANHMUCSANPHAM;
    }

    /**
     * @return mixed
     */
    public function getDANHMUCSANPHAMCHA()
    {
        return $this->DANHMUCSANPHAMCHA;
    }

    /**
     * @param mixed $DANHMUCSANPHAMCHA
     */
    public function setDANHMUCSANPHAMCHA($DANHMUCSANPHAMCHA)
    {
        $this->DANHMUCSANPHAMCHA = $DANHMUCSANPHAMCHA;
    }

    /**
     * @return mixed
     */
    public function getURLDANHMUCSANPHAM()
    {
        return $this->URLDANHMUCSANPHAM;
    }

    /**
     * @param mixed $URLDANHMUCSANPHAM
     */
    public function setURLDANHMUCSANPHAM($URLDANHMUCSANPHAM)
    {
        $this->URLDANHMUCSANPHAM = $URLDANHMUCSANPHAM;
    }

    public function DanhSachDanhMucSanPham(){
        $data = DB::select("select * from public.\"DANHMUCSANPHAM\"");
        return $data;
    }
}
