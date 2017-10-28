<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucBaiVietModel extends Model
{
    private $MSDANHMUCBAIVIET;
    private $TENDANHMUCBAIVIET;
    private $DANHMUCBAIVIETCHA;
    private $URLDANHMUCBAIVIET;

    /**
     * DanhMucBaiVietModel constructor.
     * @param $MSDANHMUCBAIVIET
     * @param $TENDANHMUCBAIVIET
     * @param $DANHMUCBAIVIETCHA
     * @param $URLDANHMUCBAIVIET
     */
    public function __construct($MSDANHMUCBAIVIET, $TENDANHMUCBAIVIET, $DANHMUCBAIVIETCHA, $URLDANHMUCBAIVIET)
    {
        $this->MSDANHMUCBAIVIET = $MSDANHMUCBAIVIET;
        $this->TENDANHMUCBAIVIET = $TENDANHMUCBAIVIET;
        $this->DANHMUCBAIVIETCHA = $DANHMUCBAIVIETCHA;
        $this->URLDANHMUCBAIVIET = $URLDANHMUCBAIVIET;
    }

    /**
     * @return array
     */
    public function getMSDANHMUCBAIVIET()
    {
        return $this->MSDANHMUCBAIVIET;
    }

    /**
     * @param array $MSDANHMUCBAIVIET
     */
    public function setMSDANHMUCBAIVIET($MSDANHMUCBAIVIET)
    {
        $this->MSDANHMUCBAIVIET = $MSDANHMUCBAIVIET;
    }

    /**
     * @return mixed
     */
    public function getTENDANHMUCBAIVIET()
    {
        return $this->TENDANHMUCBAIVIET;
    }

    /**
     * @param mixed $TENDANHMUCBAIVIET
     */
    public function setTENDANHMUCBAIVIET($TENDANHMUCBAIVIET)
    {
        $this->TENDANHMUCBAIVIET = $TENDANHMUCBAIVIET;
    }

    /**
     * @return mixed
     */
    public function getDANHMUCBAIVIETCHA()
    {
        return $this->DANHMUCBAIVIETCHA;
    }

    /**
     * @param mixed $DANHMUCBAIVIETCHA
     */
    public function setDANHMUCBAIVIETCHA($DANHMUCBAIVIETCHA)
    {
        $this->DANHMUCBAIVIETCHA = $DANHMUCBAIVIETCHA;
    }

    /**
     * @return mixed
     */
    public function getURLDANHMUCBAIVIET()
    {
        return $this->URLDANHMUCBAIVIET;
    }

    /**
     * @param mixed $URLDANHMUCBAIVIET
     */
    public function setURLDANHMUCBAIVIET($URLDANHMUCBAIVIET)
    {
        $this->URLDANHMUCBAIVIET = $URLDANHMUCBAIVIET;
    }


}
