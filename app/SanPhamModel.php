<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SanPhamModel extends Model
{
    private $MSSANPHAM;
    private $MASANPHAM;
    private $TENSANPHAM;
    private $THONGTIN;
    private $DANHGIASANPHAM;
    private $LUOTXEMSANPHAM;
    private $URLSANPHAM;

    /**
     * @return array
     */
    public function getMSSANPHAM()
    {
        return $this->MSSANPHAM;
    }

    /**
     * @param array $MSSANPHAM
     */
    public function setMSSANPHAM($MSSANPHAM)
    {
        $this->MSSANPHAM = $MSSANPHAM;
    }

    /**
     * @return mixed
     */
    public function getMASANPHAM()
    {
        return $this->MASANPHAM;
    }

    /**
     * @param mixed $MASANPHAM
     */
    public function setMASANPHAM($MASANPHAM)
    {
        $this->MASANPHAM = $MASANPHAM;
    }

    /**
     * @return mixed
     */
    public function getTENSANPHAM()
    {
        return $this->TENSANPHAM;
    }

    /**
     * @param mixed $TENSANPHAM
     */
    public function setTENSANPHAM($TENSANPHAM)
    {
        $this->TENSANPHAM = $TENSANPHAM;
    }

    /**
     * @return mixed
     */
    public function getTHONGTIN()
    {
        return $this->THONGTIN;
    }

    /**
     * @param mixed $THONGTIN
     */
    public function setTHONGTIN($THONGTIN)
    {
        $this->THONGTIN = $THONGTIN;
    }

    /**
     * @return mixed
     */
    public function getDANHGIASANPHAM()
    {
        return $this->DANHGIASANPHAM;
    }

    /**
     * @param mixed $DANHGIASANPHAM
     */
    public function setDANHGIASANPHAM($DANHGIASANPHAM)
    {
        $this->DANHGIASANPHAM = $DANHGIASANPHAM;
    }

    /**
     * @return mixed
     */
    public function getLUOTXEMSANPHAM()
    {
        return $this->LUOTXEMSANPHAM;
    }

    /**
     * @param mixed $LUOTXEMSANPHAM
     */
    public function setLUOTXEMSANPHAM($LUOTXEMSANPHAM)
    {
        $this->LUOTXEMSANPHAM = $LUOTXEMSANPHAM;
    }

    /**
     * @return mixed
     */
    public function getURLSANPHAM()
    {
        return $this->URLSANPHAM;
    }

    /**
     * @param mixed $URLSANPHAM
     */
    public function setURLSANPHAM($URLSANPHAM)
    {
        $this->URLSANPHAM = $URLSANPHAM;
    }

    public function ThemSanPham()
    {
        $data = DB::select("select * from public.\"DANHMUCSANPHAM\"");
        return $data;
    }
}
