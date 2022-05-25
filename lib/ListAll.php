<?php

class ListAll
{


    private $id;
    private $listid;
    private $status;


//product from order
    private $orderid;
    private $orderyear;
    private $productname;
    private $productsize;
    private $productamount;
    private $producttype;

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


    public function getObjectVars()
    {
        return get_object_vars($this);
    }

}