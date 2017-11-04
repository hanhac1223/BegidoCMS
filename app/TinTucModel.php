<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;


class TinTucModel extends Model
{
    private $user;
    private $msbaiviet;
    private $msdmbaiviet;
    private $tieude;
    private $noidung;
    private $url;
    private $anhdaidien;
    private $ngaytaobai;
    private $trangthai;
    private $luotxem;
    private $nhan;
    private $searchtitle;
    private $searchdescription;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getSearchtitle()
    {
        return $this->searchtitle;
    }

    /**
     * @param mixed $searchtitle
     */
    public function setSearchtitle($searchtitle)
    {
        $this->searchtitle = $searchtitle;
    }

    /**
     * @return mixed
     */
    public function getSearchdescription()
    {
        return $this->searchdescription;
    }

    /**
     * @param mixed $searchdescription
     */
    public function setSearchdescription($searchdescription)
    {
        $this->searchdescription = $searchdescription;
    }

    /**
     * @return mixed
     */
    public function getMsdmbaiviet()
    {
        return $this->msdmbaiviet;
    }

    /**
     * @param mixed $msdmbaiviet
     */
    public function setMsdmbaiviet($msdmbaiviet)
    {
        $this->msdmbaiviet = $msdmbaiviet;
    }

    public function getMsbaiviet()
    {
        return $this->msbaiviet;
    }

    /**
     * @param mixed $msbaiviet
     */
    public function setMsbaiviet($msbaiviet)
    {
        $this->msbaiviet = $msbaiviet;
    }

    /**
     * @return mixed
     */
    public function getTieude()
    {
        return $this->tieude;
    }

    /**
     * @param mixed $tieude
     */
    public function setTieude($tieude)
    {
        $this->tieude = $tieude;
    }

    /**
     * @return mixed
     */
    public function getNoidung()
    {
        return $this->noidung;
    }

    /**
     * @param mixed $noidung
     */
    public function setNoidung($noidung)
    {
        $this->noidung = $noidung;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getAnhdaidien()
    {
        return $this->anhdaidien;
    }

    /**
     * @param mixed $anhdaidien
     */
    public function setAnhdaidien($anhdaidien)
    {
        $this->anhdaidien = $anhdaidien;
    }

    /**
     * @return mixed
     */
    public function getNgaytaobai()
    {
        return $this->ngaytaobai;
    }

    /**
     * @param mixed $ngaytaobai
     */
    public function setNgaytaobai($ngaytaobai)
    {
        $this->ngaytaobai = $ngaytaobai;
    }

    /**
     * @return mixed
     */
    public function getTrangthai()
    {
        return $this->trangthai;
    }

    /**
     * @param mixed $trangthai
     */
    public function setTrangthai($trangthai)
    {
        $this->trangthai = $trangthai;
    }

    /**
     * @return mixed
     */
    public function getLuotxem()
    {
        return $this->luotxem;
    }

    /**
     * @param mixed $luotxem
     */
    public function setLuotxem($luotxem)
    {
        $this->luotxem = $luotxem;
    }

    /**
     * @return mixed
     */
    public function getNhan()
    {
        return $this->nhan;
    }

    /**
     * @param mixed $nhan
     */
    public function setNhan($nhan)
    {
        $this->nhan = $nhan;
    }

    public function Them($url)
    {
        $check = 0;
        $sql = DB::select("SELECT COUNT (*) FROM public.\"baiviet\" WHERE url = '$url'");
        if($sql > 0)
        {
            $check = 1;
        }
        else
            $check = 0;
        if($check == 0){
            $data = DB::insert('INSERT INTO public.baiviet(
	msuser, msdanhmucbaiviet, tieude, noidung, url, anhdaidien, ngaytaobaiviet, trangthai, luotxem, searchtitle, searchdescription)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['2fdba020-bc6b-11e7-a577-0222b57b7d80', $this->msdmbaiviet, $this->tieude, $this->noidung, $this->url, $this->anhdaidien, $this->ngaytaobai, $this->trangthai, $this->luotxem, $this->searchtitle, $this->searchdescription]);
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function Kiemtra_URL($url)
    {
        $sql = DB::select("SELECT COUNT (*) FROM public.\"baiviet\" WHERE url = '$url'");
        if($sql > 0)
        {
            return 1;
        }
        else
            return 0;
    }
}