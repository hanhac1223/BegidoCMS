<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiVietModel extends Model
{
    private $MSBAIVIET;
    private $TIEUDE;
    private $NOIDUNG;
    private $URL;
    private $ANHDAIDIEN;
    private $NGAYTAO;
    private $TRANGTHAI;
    private $LUOTXEM;

    /**
     * BaiVietModel constructor.
     * @param $MSBAIVIET
     * @param $TIEUDE
     * @param $NOIDUNG
     * @param $URL
     * @param $ANHDAIDIEN
     * @param $NGAYTAO
     * @param $TRANGTHAI
     * @param $LUOTXEM
     */
    public function __construct($MSBAIVIET, $TIEUDE, $NOIDUNG, $URL, $ANHDAIDIEN, $NGAYTAO, $TRANGTHAI, $LUOTXEM)
    {
        $this->MSBAIVIET = $MSBAIVIET;
        $this->TIEUDE = $TIEUDE;
        $this->NOIDUNG = $NOIDUNG;
        $this->URL = $URL;
        $this->ANHDAIDIEN = $ANHDAIDIEN;
        $this->NGAYTAO = $NGAYTAO;
        $this->TRANGTHAI = $TRANGTHAI;
        $this->LUOTXEM = $LUOTXEM;
    }

    /**
     * @return array
     */
    public function getMSBAIVIET()
    {
        return $this->MSBAIVIET;
    }

    /**
     * @param array $MSBAIVIET
     */
    public function setMSBAIVIET($MSBAIVIET)
    {
        $this->MSBAIVIET = $MSBAIVIET;
    }

    /**
     * @return mixed
     */
    public function getTIEUDE()
    {
        return $this->TIEUDE;
    }

    /**
     * @param mixed $TIEUDE
     */
    public function setTIEUDE($TIEUDE)
    {
        $this->TIEUDE = $TIEUDE;
    }

    /**
     * @return mixed
     */
    public function getNOIDUNG()
    {
        return $this->NOIDUNG;
    }

    /**
     * @param mixed $NOIDUNG
     */
    public function setNOIDUNG($NOIDUNG)
    {
        $this->NOIDUNG = $NOIDUNG;
    }

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * @param mixed $URL
     */
    public function setURL($URL)
    {
        $this->URL = $URL;
    }

    /**
     * @return mixed
     */
    public function getANHDAIDIEN()
    {
        return $this->ANHDAIDIEN;
    }

    /**
     * @param mixed $ANHDAIDIEN
     */
    public function setANHDAIDIEN($ANHDAIDIEN)
    {
        $this->ANHDAIDIEN = $ANHDAIDIEN;
    }

    /**
     * @return mixed
     */
    public function getNGAYTAO()
    {
        return $this->NGAYTAO;
    }

    /**
     * @param mixed $NGAYTAO
     */
    public function setNGAYTAO($NGAYTAO)
    {
        $this->NGAYTAO = $NGAYTAO;
    }

    /**
     * @return mixed
     */
    public function getTRANGTHAI()
    {
        return $this->TRANGTHAI;
    }

    /**
     * @param mixed $TRANGTHAI
     */
    public function setTRANGTHAI($TRANGTHAI)
    {
        $this->TRANGTHAI = $TRANGTHAI;
    }

    /**
     * @return mixed
     */
    public function getLUOTXEM()
    {
        return $this->LUOTXEM;
    }

    /**
     * @param mixed $LUOTXEM
     */
    public function setLUOTXEM($LUOTXEM)
    {
        $this->LUOTXEM = $LUOTXEM;
    }


}
