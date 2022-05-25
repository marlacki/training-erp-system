<?php

class ListMaterial
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

    //material
    private $materialid;
    private $materialtype;
    private $materiallength;
    private $materialdimensiona;
    private $materialdimensionb;
    private $materialthickness;
    private $materialamount;

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
//    private $materialtypeunit;
//
//    /**
//     * @return mixed
//     */
//    public function getMaterialtypeunit()
//    {
//        return $this->materialtypeunit;
//    }
//
//    /**
//     * @param mixed $materialtypeunit
//     */
//    public function setMaterialtypeunit($materialtypeunit): void
//    {
//        $this->materialtypeunit = $materialtypeunit;
//    }


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
    public function getMaterialid()
    {
        return $this->materialid;
    }

    /**
     * @param mixed $materialid
     */
    public function setMaterialid($materialid): void
    {
        $this->materialid = $materialid;
    }

    /**
     * @return mixed
     */
    public function getMaterialtype()
    {
        return $this->materialtype;
    }

    /**
     * @param mixed $materialtype
     */
    public function setMaterialtype($materialtype): void
    {
        $this->materialtype = $materialtype;
    }

    /**
     * @return mixed
     */
    public function getMateriallength()
    {
        return $this->materiallength;
    }

    /**
     * @param mixed $materiallength
     */
    public function setMateriallength($materiallength): void
    {
        $this->materiallength = $materiallength;
    }

    /**
     * @return mixed
     */
    public function getMaterialdimensiona()
    {
        return $this->materialdimensiona;
    }

    /**
     * @param mixed $materialdimensiona
     */
    public function setMaterialdimensiona($materialdimensiona): void
    {
        $this->materialdimensiona = $materialdimensiona;
    }

    /**
     * @return mixed
     */
    public function getMaterialdimensionb()
    {
        return $this->materialdimensionb;
    }

    /**
     * @param mixed $materialdimensionb
     */
    public function setMaterialdimensionb($materialdimensionb): void
    {
        $this->materialdimensionb = $materialdimensionb;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getMaterialamount()
    {
        return $this->materialamount;
    }

    /**
     * @param mixed $materialamount
     */
    public function setMaterialamount($materialamount): void
    {
        $this->materialamount = $materialamount;
    }

    /**
     * @return mixed
     */
    public function getMaterialthickness()
    {
        return $this->materialthickness;
    }

    /**
     * @param mixed $materialthickness
     */
    public function setMaterialthickness($materialthickness): void
    {
        $this->materialthickness = $materialthickness;
    }


    public function getObjectVars()
    {
        return get_object_vars($this);
    }

}