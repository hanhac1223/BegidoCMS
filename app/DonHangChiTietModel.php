<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHangChiTietModel extends Model
{
    private $SOLUONG;

    /**
     * DonHangChiTietModel constructor.
     * @param $SOLUONG
     */
    public function __construct($SOLUONG)
    {
        $this->SOLUONG = $SOLUONG;
    }

    /**
     * @return array
     */
    public function getSOLUONG()
    {
        return $this->SOLUONG;
    }

    /**
     * @param array $SOLUONG
     */
    public function setSOLUONG($SOLUONG)
    {
        $this->SOLUONG = $SOLUONG;
    }

}
