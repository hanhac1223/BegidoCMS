<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    private $MATAG;
    private $TENTAG;
    private $URLTAG;

    /**
     * TagModel constructor.
     * @param $MATAG
     * @param $TENTAG
     * @param $URLTAG
     */
    public function __construct($MATAG, $TENTAG, $URLTAG)
    {
        $this->MATAG = $MATAG;
        $this->TENTAG = $TENTAG;
        $this->URLTAG = $URLTAG;
    }

    /**
     * @return array
     */
    public function getMATAG()
    {
        return $this->MATAG;
    }

    /**
     * @param array $MATAG
     */
    public function setMATAG($MATAG)
    {
        $this->MATAG = $MATAG;
    }

    /**
     * @return mixed
     */
    public function getTENTAG()
    {
        return $this->TENTAG;
    }

    /**
     * @param mixed $TENTAG
     */
    public function setTENTAG($TENTAG)
    {
        $this->TENTAG = $TENTAG;
    }

    /**
     * @return mixed
     */
    public function getURLTAG()
    {
        return $this->URLTAG;
    }

    /**
     * @param mixed $URLTAG
     */
    public function setURLTAG($URLTAG)
    {
        $this->URLTAG = $URLTAG;
    }

}
