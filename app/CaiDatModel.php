<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaiDatModel extends Model
{
    private $MACAIDAT;
    private $TENCAIDAT;
    private $NOIDUNGCAIDAT;

    /**
     * CaiDatModel constructor.
     * @param $MACAIDAT
     * @param $TENCAIDAT
     * @param $NOIDUNGCAIDAT
     */
    public function __construct($MACAIDAT, $TENCAIDAT, $NOIDUNGCAIDAT)
    {
        $this->MACAIDAT = $MACAIDAT;
        $this->TENCAIDAT = $TENCAIDAT;
        $this->NOIDUNGCAIDAT = $NOIDUNGCAIDAT;
    }

    /**
     * @return array
     */
    public function getMACAIDAT()
    {
        return $this->MACAIDAT;
    }

    /**
     * @param array $MACAIDAT
     */
    public function setMACAIDAT($MACAIDAT)
    {
        $this->MACAIDAT = $MACAIDAT;
    }

    /**
     * @return mixed
     */
    public function getTENCAIDAT()
    {
        return $this->TENCAIDAT;
    }

    /**
     * @param mixed $TENCAIDAT
     */
    public function setTENCAIDAT($TENCAIDAT)
    {
        $this->TENCAIDAT = $TENCAIDAT;
    }

    /**
     * @return mixed
     */
    public function getNOIDUNGCAIDAT()
    {
        return $this->NOIDUNGCAIDAT;
    }

    /**
     * @param mixed $NOIDUNGCAIDAT
     */
    public function setNOIDUNGCAIDAT($NOIDUNGCAIDAT)
    {
        $this->NOIDUNGCAIDAT = $NOIDUNGCAIDAT;
    }


}