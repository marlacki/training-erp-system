<?php

class Shipment
{
    private $id;

    private $shipmentid;


    private $shipmentnote;
    private $shipmentdate;

    //order
    private $orderid;
    private $productid;
    private $productamount;
    private $orderstatus;
    private $productstatus;

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
    public function getShipmentid()
    {
        return $this->shipmentid;
    }

    /**
     * @param mixed $shipmentid
     */
    public function setShipmentid($shipmentid): void
    {
        $this->shipmentid = $shipmentid;
    }

    /**
     * @return mixed
     */
    public function getShipmentnote()
    {
        return $this->shipmentnote;
    }

    /**
     * @param mixed $shipmentnote
     */
    public function setShipmentnote($shipmentnote): void
    {
        $this->shipmentnote = $shipmentnote;
    }

    /**
     * @return mixed
     */
    public function getShipmentdate()
    {
        return $this->shipmentdate;
    }

    /**
     * @param mixed $shipmentdate
     */
    public function setShipmentdate($shipmentdate): void
    {
        $this->shipmentdate = $shipmentdate;
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
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * @param mixed $productid
     */
    public function setProductid($productid): void
    {
        $this->productid = $productid;
    }

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
    public function getOrderstatus()
    {
        return $this->orderstatus;
    }

    /**
     * @param mixed $orderstatus
     */
    public function setOrderstatus($orderstatus): void
    {
        $this->orderstatus = $orderstatus;
    }

    /**
     * @return mixed
     */
    public function getProductstatus()
    {
        return $this->productstatus;
    }

    /**
     * @param mixed $productstatus
     */
    public function setProductstatus($productstatus): void
    {
        $this->productstatus = $productstatus;
    }


    public function getObjectVars()
    {
        return get_object_vars($this);
    }


}