<?php

class ListBuyPart
{
    private $id;
    private $listid;
    private $status;


    //product from order
    private $orderid;
    private $orderyear;
    private $productname;
    private $productsize;
    private $producttype;
    private $productamount;

    //buy part
    private $buypartid;
    private $buypartname;
    private $buypartamount;
    private $buypartsize;
    private $buypartdima;
    private $buypartdimb;
    private $buypartnotes;
    private $buyparttype;

    /**
     * @return mixed
     */
    public function getProductamount()
    {
        return $this->productamount;
    }

    /**
     * @param mixed $productamount
     */
    public function setProductamount($productamount): void
    {
        $this->productamount = $productamount;
    }


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
    public function getListid()
    {
        return $this->listid;
    }

    /**
     * @param mixed $listid
     */
    public function setListid($listid): void
    {
        $this->listid = $listid;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * @param mixed $orderid
     */
    public function setOrderid($orderid): void
    {
        $this->orderid = $orderid;
    }

    /**
     * @return mixed
     */
    public function getOrderyear()
    {
        return $this->orderyear;
    }

    /**
     * @param mixed $orderyear
     */
    public function setOrderyear($orderyear): void
    {
        $this->orderyear = $orderyear;
    }

    /**
     * @return mixed
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @param mixed $productname
     */
    public function setProductname($productname): void
    {
        $this->productname = $productname;
    }

    /**
     * @return mixed
     */
    public function getProductsize()
    {
        return $this->productsize;
    }

    /**
     * @param mixed $productsize
     */
    public function setProductsize($productsize): void
    {
        $this->productsize = $productsize;
    }

    /**
     * @return mixed
     */
    public function getProducttype()
    {
        return $this->producttype;
    }

    /**
     * @param mixed $producttype
     */
    public function setProducttype($producttype): void
    {
        $this->producttype = $producttype;
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

    public function getObjectVars()
    {
        return get_object_vars($this);
    }

}