<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVienModel extends Model
{
    private $msuser;
    private $houser;
    private $tenuser;
    private $emailuser;

    /**
     * @return mixed
     */
    public function getMsuser()
    {
        return $this->msuser;
    }

    /**
     * @param mixed $msuser
     */
    public function setMsuser($msuser)
    {
        $this->msuser = $msuser;
    }

    /**
     * @return mixed
     */
    public function getHouser()
    {
        return $this->houser;
    }

    /**
     * @param mixed $houser
     */
    public function setHouser($houser)
    {
        $this->houser = $houser;
    }

    /**
     * @return mixed
     */
    public function getTenuser()
    {
        return $this->tenuser;
    }

    /**
     * @param mixed $tenuser
     */
    public function setTenuser($tenuser)
    {
        $this->tenuser = $tenuser;
    }

    /**
     * @return mixed
     */
    public function getEmailuser()
    {
        return $this->emailuser;
    }

    /**
     * @param mixed $emailuser
     */
    public function setEmailuser($emailuser)
    {
        $this->emailuser = $emailuser;
    }

}
