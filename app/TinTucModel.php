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

    public function Them()
    {
        $data = DB::insert('INSERT INTO public.baiviet(
        msuser, msdanhmucbaiviet, tieude, noidung, url, anhdaidien, ngaytaobaiviet, trangthai, luotxem, searchtitle, searchdescription)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['2fdba020-bc6b-11e7-a577-0222b57b7d80', $this->msdmbaiviet, $this->tieude, $this->noidung, $this->url, $this->anhdaidien, $this->ngaytaobai, $this->trangthai, $this->luotxem, $this->searchtitle, $this->searchdescription]);

    }

    public function Kiemtra_URL($url)
    {
        $sql = DB::select("SELECT COUNT (*) FROM public.baiviet WHERE url = '$url'");
        if($sql != 0)
            return false;
        else
            return true;
    }

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> dc754d4030fdef0260339a681a5ca41cc21249d1
>>>>>>> d411ae29da2e98d32a81ff88fce44d274b664635
>>>>>>> 9124a5466844fef483309f16fce0cde798e253d3
>>>>>>> 86ed12b29b820b08fdbd0bdbf367f1ee12932beb
>>>>>>> 592c232a542eec399b1c7120911a9bb847e049d3
    public function getDanhMuc()
    {
        $data = DB::select("SELECT msbaiviet, public.\"baiviet\".\"msuser\", public.\"nguoidung\".\"tenuser\",public.\"baiviet\".\"msdanhmucbaiviet\", public.\"danhmucbaiviet\".\"tendanhmucbaiviet\", tieude, noidung, url, anhdaidien, ngaytaobaiviet, trangthai, luotxem, nhan, searchtitle, searchdescription
        FROM public.baiviet, public.nguoidung, public.danhmucbaiviet
        WHERE public.\"baiviet\".\"msuser\" = public.\"nguoidung\".\"msuser\" AND public.\"baiviet\".\"msdanhmucbaiviet\" = public.\"danhmucbaiviet\".\"msdanhmucbaiviet\"");
        return $data;
    }

    public function getBaiViet($id)
    {
        $data = DB::select("SELECT msbaiviet, msuser, msdanhmucbaiviet, tieude, noidung, url, anhdaidien, ngaytaobaiviet, trangthai, luotxem, nhan, searchtitle, searchdescription
FROM public.baiviet
WHERE msbaiviet = '$id'");
        if ($data)
            return $data;
        else
            return 0;
    }
    public function Xoa()
    {
        $data = DB::delete("DELETE FROM public.baiviet
	WHERE public.\"baiviet\".\"msbaiviet\" = '$this->msbaiviet'");
        return $data;
    }

    public function TrangThai()
    {
        $data = DB::update("UPDATE public.baiviet SET trangthai = $this->trangthai
	    WHERE public.\"baiviet\".\"msbaiviet\" = '$this->msbaiviet'");
        return $data;
        $data = DB::select("DELETE FROM public.baiviet
	WHERE public.\"baiviet\".\"msbaiviet\" = '$this->msbaiviet'");
        return $data;
    }

    public function postUpdateBaiViet($id)
    {
        DB::update("UPDATE public.baiviet
	SET msdanhmucbaiviet='$this->msdmbaiviet', tieude='$this->tieude', noidung='$this->noidung', url='$this->url', anhdaidien='$this->anhdaidien', nhan='$this->nhan', searchtitle='$this->searchtitle', searchdescription='$this->searchdescription'
	WHERE msbaiviet = '$id'");
    }
<<<<<<< HEAD


=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
=======


=======
>>>>>>> dc754d4030fdef0260339a681a5ca41cc21249d1
>>>>>>> 9124a5466844fef483309f16fce0cde798e253d3
>>>>>>> 86ed12b29b820b08fdbd0bdbf367f1ee12932beb
>>>>>>> 592c232a542eec399b1c7120911a9bb847e049d3
   /* public function Them()
    {
        DB::insert('INSERT INTO public.baiviet(
	msuser, msdanhmucbaiviet, tieude, noidung, url, anhdaidien, ngaytaobaiviet, trangthai, luotxem, searchtitle, searchdescription)
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['2fdba020-bc6b-11e7-a577-0222b57b7d80', $this->msdmbaiviet, $this->tieude, $this->noidung, $this->url, $this->anhdaidien, $this->ngaytaobai, $this->trangthai, $this->luotxem, $this->searchtitle, $this->searchdescription]);
    }*/
}
