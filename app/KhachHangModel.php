<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHangModel extends Model
{
    private $MSKHACHHANG;
    private $TENKHACHHANG;
    private $SDTKHACHHANG;
    private $EMAIL;
    private $DIACHI;
    private $FACBOOK;
    private $GIOITINH;
    private $NGAYSINH;

    /**
     * KhachHangModel constructor.
     * @param $MSKHACHHANG
     * @param $TENKHACHHANG
     * @param $SDTKHACHHANG
     * @param $EMAIL
     * @param $DIACHI
     * @param $FACBOOK
     * @param $GIOITINH
     * @param $NGAYSINH
     */
    public function __construct($MSKHACHHANG, $TENKHACHHANG, $SDTKHACHHANG, $EMAIL, $DIACHI, $FACBOOK, $GIOITINH, $NGAYSINH)
    {
        $this->MSKHACHHANG = $MSKHACHHANG;
        $this->TENKHACHHANG = $TENKHACHHANG;
        $this->SDTKHACHHANG = $SDTKHACHHANG;
        $this->EMAIL = $EMAIL;
        $this->DIACHI = $DIACHI;
        $this->FACBOOK = $FACBOOK;
        $this->GIOITINH = $GIOITINH;
        $this->NGAYSINH = $NGAYSINH;
    }

    /**
     * @return array
     */
    public function getMSKHACHHANG()
    {
        return $this->MSKHACHHANG;
    }

    /**
     * @param array $MSKHACHHANG
     */
    public function setMSKHACHHANG($MSKHACHHANG)
    {
        $this->MSKHACHHANG = $MSKHACHHANG;
    }

    /**
     * @return mixed
     */
    public function getTENKHACHHANG()
    {
        return $this->TENKHACHHANG;
    }

    /**
     * @param mixed $TENKHACHHANG
     */
    public function setTENKHACHHANG($TENKHACHHANG)
    {
        $this->TENKHACHHANG = $TENKHACHHANG;
    }

    /**
     * @return mixed
     */
    public function getSDTKHACHHANG()
    {
        return $this->SDTKHACHHANG;
    }

    /**
     * @param mixed $SDTKHACHHANG
     */
    public function setSDTKHACHHANG($SDTKHACHHANG)
    {
        $this->SDTKHACHHANG = $SDTKHACHHANG;
    }

    /**
     * @return mixed
     */
    public function getEMAIL()
    {
        return $this->EMAIL;
    }

    /**
     * @param mixed $EMAIL
     */
    public function setEMAIL($EMAIL)
    {
        $this->EMAIL = $EMAIL;
    }

    /**
     * @return mixed
     */
    public function getDIACHI()
    {
        return $this->DIACHI;
    }

    /**
     * @param mixed $DIACHI
     */
    public function setDIACHI($DIACHI)
    {
        $this->DIACHI = $DIACHI;
    }

    /**
     * @return mixed
     */
    public function getFACBOOK()
    {
        return $this->FACBOOK;
    }

    /**
     * @param mixed $FACBOOK
     */
    public function setFACBOOK($FACBOOK)
    {
        $this->FACBOOK = $FACBOOK;
    }

    /**
     * @return mixed
     */
    public function getGIOITINH()
    {
        return $this->GIOITINH;
    }

    /**
     * @param mixed $GIOITINH
     */
    public function setGIOITINH($GIOITINH)
    {
        $this->GIOITINH = $GIOITINH;
    }

    /**
     * @return mixed
     */
    public function getNGAYSINH()
    {
        return $this->NGAYSINH;
    }

    /**
     * @param mixed $NGAYSINH
     */
    public function setNGAYSINH($NGAYSINH)
    {
        $this->NGAYSINH = $NGAYSINH;
    }


}
