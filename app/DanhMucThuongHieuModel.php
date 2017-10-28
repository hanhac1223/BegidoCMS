<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucThuongHieuModel extends Model
{
    private $MSDANHMUCTHUONGHIEU;
    private $TENDANHMUCTHUONGHIEU;
    private $DANHMUCTHUONGHIEUCHA;
    private $URLDANHMUCTHUONGHIEU;

    /**
     * DanhMucThuongHieuModel constructor.
     * @param $MSDANHMUCTHUONGHIEU
     * @param $TENDANHMUCTHUONGHIEU
     * @param $DANHMUCTHUONGHIEUCHA
     * @param $URLDANHMUCTHUONGHIEU
     */
    public function __construct($MSDANHMUCTHUONGHIEU, $TENDANHMUCTHUONGHIEU, $DANHMUCTHUONGHIEUCHA, $URLDANHMUCTHUONGHIEU)
    {
        $this->MSDANHMUCTHUONGHIEU = $MSDANHMUCTHUONGHIEU;
        $this->TENDANHMUCTHUONGHIEU = $TENDANHMUCTHUONGHIEU;
        $this->DANHMUCTHUONGHIEUCHA = $DANHMUCTHUONGHIEUCHA;
        $this->URLDANHMUCTHUONGHIEU = $URLDANHMUCTHUONGHIEU;
    }

    /**
     * @return array
     */
    public function getMSDANHMUCTHUONGHIEU()
    {
        return $this->MSDANHMUCTHUONGHIEU;
    }

    /**
     * @param array $MSDANHMUCTHUONGHIEU
     */
    public function setMSDANHMUCTHUONGHIEU($MSDANHMUCTHUONGHIEU)
    {
        $this->MSDANHMUCTHUONGHIEU = $MSDANHMUCTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getTENDANHMUCTHUONGHIEU()
    {
        return $this->TENDANHMUCTHUONGHIEU;
    }

    /**
     * @param mixed $TENDANHMUCTHUONGHIEU
     */
    public function setTENDANHMUCTHUONGHIEU($TENDANHMUCTHUONGHIEU)
    {
        $this->TENDANHMUCTHUONGHIEU = $TENDANHMUCTHUONGHIEU;
    }

    /**
     * @return mixed
     */
    public function getDANHMUCTHUONGHIEUCHA()
    {
        return $this->DANHMUCTHUONGHIEUCHA;
    }

    /**
     * @param mixed $DANHMUCTHUONGHIEUCHA
     */
    public function setDANHMUCTHUONGHIEUCHA($DANHMUCTHUONGHIEUCHA)
    {
        $this->DANHMUCTHUONGHIEUCHA = $DANHMUCTHUONGHIEUCHA;
    }

    /**
     * @return mixed
     */
    public function getURLDANHMUCTHUONGHIEU()
    {
        return $this->URLDANHMUCTHUONGHIEU;
    }

    /**
     * @param mixed $URLDANHMUCTHUONGHIEU
     */
    public function setURLDANHMUCTHUONGHIEU($URLDANHMUCTHUONGHIEU)
    {
        $this->URLDANHMUCTHUONGHIEU = $URLDANHMUCTHUONGHIEU;
    }

}
