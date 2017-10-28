<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    private $MSUSER;
    private $HOTENUSER;
    private $TENUSER;
    private $EMAILUSER;
    private $QUYENHAN;

    /**
     * UserModel constructor.
     * @param $MSUSER
     * @param $HOTENUSER
     * @param $TENUSER
     * @param $EMAILUSER
     * @param $QUYENHAN
     */
    public function __construct($MSUSER, $HOTENUSER, $TENUSER, $EMAILUSER, $QUYENHAN)
    {
        $this->MSUSER = $MSUSER;
        $this->HOTENUSER = $HOTENUSER;
        $this->TENUSER = $TENUSER;
        $this->EMAILUSER = $EMAILUSER;
        $this->QUYENHAN = $QUYENHAN;
    }

    /**
     * @return array
     */
    public function getMSUSER()
    {
        return $this->MSUSER;
    }

    /**
     * @param array $MSUSER
     */
    public function setMSUSER($MSUSER)
    {
        $this->MSUSER = $MSUSER;
    }

    /**
     * @return mixed
     */
    public function getHOTENUSER()
    {
        return $this->HOTENUSER;
    }

    /**
     * @param mixed $HOTENUSER
     */
    public function setHOTENUSER($HOTENUSER)
    {
        $this->HOTENUSER = $HOTENUSER;
    }

    /**
     * @return mixed
     */
    public function getTENUSER()
    {
        return $this->TENUSER;
    }

    /**
     * @param mixed $TENUSER
     */
    public function setTENUSER($TENUSER)
    {
        $this->TENUSER = $TENUSER;
    }

    /**
     * @return mixed
     */
    public function getEMAILUSER()
    {
        return $this->EMAILUSER;
    }

    /**
     * @param mixed $EMAILUSER
     */
    public function setEMAILUSER($EMAILUSER)
    {
        $this->EMAILUSER = $EMAILUSER;
    }

    /**
     * @return mixed
     */
    public function getQUYENHAN()
    {
        return $this->QUYENHAN;
    }

    /**
     * @param mixed $QUYENHAN
     */
    public function setQUYENHAN($QUYENHAN)
    {
        $this->QUYENHAN = $QUYENHAN;
    }

}
