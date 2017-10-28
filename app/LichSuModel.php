<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuModel extends Model
{
    private $MALICHSU;
    private $IP;
    private $HANHDONG;
    private $THOIGIAN;

    /**
     * LichSuModel constructor.
     * @param $MALICHSU
     * @param $IP
     * @param $HANHDONG
     * @param $THOIGIAN
     */
    public function __construct($MALICHSU, $IP, $HANHDONG, $THOIGIAN)
    {
        $this->MALICHSU = $MALICHSU;
        $this->IP = $IP;
        $this->HANHDONG = $HANHDONG;
        $this->THOIGIAN = $THOIGIAN;
    }

    /**
     * @return array
     */
    public function getMALICHSU()
    {
        return $this->MALICHSU;
    }

    /**
     * @param array $MALICHSU
     */
    public function setMALICHSU($MALICHSU)
    {
        $this->MALICHSU = $MALICHSU;
    }

    /**
     * @return mixed
     */
    public function getIP()
    {
        return $this->IP;
    }

    /**
     * @param mixed $IP
     */
    public function setIP($IP)
    {
        $this->IP = $IP;
    }

    /**
     * @return mixed
     */
    public function getHANHDONG()
    {
        return $this->HANHDONG;
    }

    /**
     * @param mixed $HANHDONG
     */
    public function setHANHDONG($HANHDONG)
    {
        $this->HANHDONG = $HANHDONG;
    }

    /**
     * @return mixed
     */
    public function getTHOIGIAN()
    {
        return $this->THOIGIAN;
    }

    /**
     * @param mixed $THOIGIAN
     */
    public function setTHOIGIAN($THOIGIAN)
    {
        $this->THOIGIAN = $THOIGIAN;
    }

}
