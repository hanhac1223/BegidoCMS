<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHangModel extends Model
{
    private $MSDONHANG;
    private $NGAYLAPDONHANG;
    private $TRANGTHAIDONHANG;

    /**
     * DonHangChiTietModel constructor.
     * @param $MSDONHANG
     * @param $NGAYLAPDONHANG
     * @param $TRANGTHAIDONHANG
     */
    public function __construct($MSDONHANG, $NGAYLAPDONHANG, $TRANGTHAIDONHANG)
    {
        $this->MSDONHANG = $MSDONHANG;
        $this->NGAYLAPDONHANG = $NGAYLAPDONHANG;
        $this->TRANGTHAIDONHANG = $TRANGTHAIDONHANG;
    }

    /**
     * @return array
     */
    public function getMSDONHANG()
    {
        return $this->MSDONHANG;
    }

    /**
     * @param array $MSDONHANG
     */
    public function setMSDONHANG($MSDONHANG)
    {
        $this->MSDONHANG = $MSDONHANG;
    }

    /**
     * @return mixed
     */
    public function getNGAYLAPDONHANG()
    {
        return $this->NGAYLAPDONHANG;
    }

    /**
     * @param mixed $NGAYLAPDONHANG
     */
    public function setNGAYLAPDONHANG($NGAYLAPDONHANG)
    {
        $this->NGAYLAPDONHANG = $NGAYLAPDONHANG;
    }

    /**
     * @return mixed
     */
    public function getTRANGTHAIDONHANG()
    {
        return $this->TRANGTHAIDONHANG;
    }

    /**
     * @param mixed $TRANGTHAIDONHANG
     */
    public function setTRANGTHAIDONHANG($TRANGTHAIDONHANG)
    {
        $this->TRANGTHAIDONHANG = $TRANGTHAIDONHANG;
    }

}
