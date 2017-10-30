<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMucTinTucModel extends Model
{
    private $msdanhmucbaiviet;
    private $tendanhmucbaiviet;
    private $danhmucbaivietcha;
    private $urldanhmucbaiviet;
    private $tongbaiviet;

    /**
     * @return mixed
     */
    public function getMsdanhmucbaiviet()
    {
        return $this->msdanhmucbaiviet;
    }

    /**
     * @param mixed $msdanhmucbaiviet
     */
    public function setMsdanhmucbaiviet($msdanhmucbaiviet)
    {
        $this->msdanhmucbaiviet = $msdanhmucbaiviet;
    }

    /**
     * @return mixed
     */
    public function getTendanhmucbaiviet()
    {
        return $this->tendanhmucbaiviet;
    }

    /**
     * @param mixed $tendanhmucbaiviet
     */
    public function setTendanhmucbaiviet($tendanhmucbaiviet)
    {
        $this->tendanhmucbaiviet = $tendanhmucbaiviet;
    }

    /**
     * @return mixed
     */
    public function getDanhmucbaivietcha()
    {
        return $this->danhmucbaivietcha;
    }

    /**
     * @param mixed $danhmucbaivietcha
     */
    public function setDanhmucbaivietcha($danhmucbaivietcha)
    {
        $this->danhmucbaivietcha = $danhmucbaivietcha;
    }

    /**
     * @return mixed
     */
    public function getUrldanhmucbaiviet()
    {
        return $this->urldanhmucbaiviet;
    }

    /**
     * @param mixed $urldanhmucbaiviet
     */
    public function setUrldanhmucbaiviet($urldanhmucbaiviet)
    {
        $this->urldanhmucbaiviet = $urldanhmucbaiviet;
    }

    /**
     * @return mixed
     */
    public function getTongbaiviet()
    {
        return $this->tongbaiviet;
    }

    /**
     * @param mixed $tongbaiviet
     */
    public function setTongbaiviet($tongbaiviet)
    {
        $this->tongbaiviet = $tongbaiviet;
    }

    public function getDanhMuc()
    {
        $data = DB::select("SELECT * FROM public.\"danhmucbaiviet\"");
        return $data;
    }
}
