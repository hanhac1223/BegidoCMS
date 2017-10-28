<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ThuongHieuModel extends Model
{
    private $MSTHUONGHIEU;
    private $TENTHUONGHIEU;
    private $GIOITHIEU;
    private $BAIVIETTHUONGHIEU;
    private $URLTHUONGHIEU;
    private $LUOTXEMTHUONGHIEU;
    private $ANHTHUONGHIEU;

    /**
     * @return array
     */
    public function getMSTHUONGHIEU()
    {
        return $this->MSTHUONGHIEU;
    }

    /**
     * @param array $MSTHUONGHIEU
     */
    public function setMSTHUONGHIEU($MSTHUONGHIEU)
    {
        $this->MSTHUONGHIEU = $MSTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getTENTHUONGHIEU()
    {
        return $this->TENTHUONGHIEU;
    }

    /**
     * @param mixed $TENTHUONGHIEU
     */
    public function setTENTHUONGHIEU($TENTHUONGHIEU)
    {
        $this->TENTHUONGHIEU = $TENTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getGIOITHIEU()
    {
        return $this->GIOITHIEU;
    }

    /**
     * @param mixed $GIOITHIEU
     */
    public function setGIOITHIEU($GIOITHIEU)
    {
        $this->GIOITHIEU = $GIOITHIEU;
    }

    /**
     * @return mixed
     */
    public function getBAIVIETTHUONGHIEU()
    {
        return $this->BAIVIETTHUONGHIEU;
    }

    /**
     * @param mixed $BAIVIETTHUONGHIEU
     */
    public function setBAIVIETTHUONGHIEU($BAIVIETTHUONGHIEU)
    {
        $this->BAIVIETTHUONGHIEU = $BAIVIETTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getURLTHUONGHIEU()
    {
        return $this->URLTHUONGHIEU;
    }

    /**
     * @param mixed $URLTHUONGHIEU
     */
    public function setURLTHUONGHIEU($URLTHUONGHIEU)
    {
        $this->URLTHUONGHIEU = $URLTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getLUOTXEMTHUONGHIEU()
    {
        return $this->LUOTXEMTHUONGHIEU;
    }

    /**
     * @param mixed $LUOTXEMTHUONGHIEU
     */
    public function setLUOTXEMTHUONGHIEU($LUOTXEMTHUONGHIEU)
    {
        $this->LUOTXEMTHUONGHIEU = $LUOTXEMTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getANHTHUONGHIEU()
    {
        return $this->ANHTHUONGHIEU;
    }

    /**
     * @param mixed $ANHTHUONGHIEU
     */
    public function setANHTHUONGHIEU($ANHTHUONGHIEU)
    {
        $this->ANHTHUONGHIEU = $ANHTHUONGHIEU;
    }

    public function DanhSachThuongHieu(){
        $data = DB::select("select * from public.\"THUONGHIEU\"");
        return $data;
    }
}
