<?php

class ProjectBuyPart
{

    private $id;
    private $buypartid;
    private $buypartname;
    private $buypartamount;
    private $buypartsize;
    private $buypartdima;
    private $buypartdimb;
    private $buypartnotes;
    private $buyparttype;

    private $projectid;
    private $projectsize;
    private $projectversion;

    /**
     * @return mixed
     */
    public function getBuyparttype()
    {
        return $this->buyparttype;
    }

    /**
     * @param mixed $buyparttype
     */
    public function setBuyparttype($buyparttype): void
    {
        $this->buyparttype = $buyparttype;
    }


    /**
     *
     *
     *
     * @return mixed
     */
    public function getProjectversion()
    {
        return $this->projectversion;
    }

    /**
     * @param mixed $projectversion
     */
    public function setProjectversion($projectversion): void
    {
        $this->projectversion = $projectversion;
    }




    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getProjectsize()
    {
        return $this->projectsize;
    }

    /**
     * @param mixed $projectsize
     */
    public function setProjectsize($projectsize): void
    {
        $this->projectsize = $projectsize;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getBuypartsize()
    {
        return $this->buypartsize;
    }

    /**
     * @param mixed $buypartsize
     */
    public function setBuypartsize($buypartsize): void
    {
        $this->buypartsize = $buypartsize;
    }

    /**
     * @return mixed
     */
    public function getBuypartdima()
    {
        return $this->buypartdima;
    }

    /**
     * @param mixed $buypartdima
     */
    public function setBuypartdima($buypartdima): void
    {
        $this->buypartdima = $buypartdima;
    }

    /**
     * @return mixed
     */
    public function getBuypartdimb()
    {
        return $this->buypartdimb;
    }

    /**
     * @param mixed $buypartdimb
     */
    public function setBuypartdimb($buypartdimb): void
    {
        $this->buypartdimb = $buypartdimb;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBuypartid()
    {
        return $this->buypartid;
    }

    /**
     * @param mixed $buypartid
     */
    public function setBuypartid($buypartid): void
    {
        $this->buypartid = $buypartid;
    }

    /**
     * @return mixed
     */
    public function getBuypartname()
    {
        return $this->buypartname;
    }

    /**
     * @param mixed $buypartname
     */
    public function setBuypartname($buypartname): void
    {
        $this->buypartname = $buypartname;
    }


    /**
     * @return mixed
     */
    public function getBuypartamount()
    {
        return $this->buypartamount;
    }

    /**
     * @param mixed $buypartamount
     */
    public function setBuypartamount($buypartamount): void
    {
        $this->buypartamount = $buypartamount;
    }

    /**
     * @return mixed
     */
    public function getBuypartnotes()
    {
        return $this->buypartnotes;
    }

    /**
     * @param mixed $buypartnotes
     */
    public function setBuypartnotes($buypartnotes): void
    {
        $this->buypartnotes = $buypartnotes;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * @param mixed $projectid
     */
    public function setProjectid($projectid): void
    {
        $this->projectid = $projectid;
    }


    public function getObjectVars()
    {
        return get_object_vars($this);
    }


}