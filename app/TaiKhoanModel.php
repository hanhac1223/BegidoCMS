<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiKhoanModel extends Model
{
    private $MSTAIKHOAN;
    private $MATAIKHOAN;
    private $MATKHAU;
    private $LOAITAIKHOAN;

    /**
     * TaiKhoanModel constructor.
     * @param $MSTAIKHOAN
     * @param $MATAIKHOAN
     * @param $MATKHAU
     * @param $LOAITAIKHOAN
     */
    public function __construct($MSTAIKHOAN, $MATAIKHOAN, $MATKHAU, $LOAITAIKHOAN)
    {
        $this->MSTAIKHOAN = $MSTAIKHOAN;
        $this->MATAIKHOAN = $MATAIKHOAN;
        $this->MATKHAU = $MATKHAU;
        $this->LOAITAIKHOAN = $LOAITAIKHOAN;
    }

    /**
     * @return array
     */
    public function getMSTAIKHOAN()
    {
        return $this->MSTAIKHOAN;
    }

    /**
     * @param array $MSTAIKHOAN
     */
    public function setMSTAIKHOAN($MSTAIKHOAN)
    {
        $this->MSTAIKHOAN = $MSTAIKHOAN;
    }

    /**
     * @return mixed
     */
    public function getMATAIKHOAN()
    {
        return $this->MATAIKHOAN;
    }

    /**
     * @param mixed $MATAIKHOAN
     */
    public function setMATAIKHOAN($MATAIKHOAN)
    {
        $this->MATAIKHOAN = $MATAIKHOAN;
    }

    /**
     * @return mixed
     */
    public function getMATKHAU()
    {
        return $this->MATKHAU;
    }

    /**
     * @param mixed $MATKHAU
     */
    public function setMATKHAU($MATKHAU)
    {
        $this->MATKHAU = $MATKHAU;
    }

    /**
     * @return mixed
     */
    public function getLOAITAIKHOAN()
    {
        return $this->LOAITAIKHOAN;
    }

    /**
     * @param mixed $LOAITAIKHOAN
     */
    public function setLOAITAIKHOAN($LOAITAIKHOAN)
    {
        $this->LOAITAIKHOAN = $LOAITAIKHOAN;
    }

}
