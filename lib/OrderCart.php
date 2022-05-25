<?php

class OrderCart
{
    private $id;

    private $cartid;
    private $orderid;
    private $ordercustomername;
    private $ordercartstatus;

    /**
     * @return mixed
     */
    public function getOrdercartstatus()
    {
        return $this->ordercartstatus;
    }

    /**
     * @param mixed $ordercartstatus
     */
    public function setOrdercartstatus($ordercartstatus): void
    {
        $this->ordercartstatus = $ordercartstatus;
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
    public function getCartid()
    {
        return $this->cartid;
    }

    /**
     * @param mixed $cartid
     */
    public function setCartid($cartid): void
    {
        $this->cartid = $cartid;
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
    public function getOrdercustomername()
    {
        return $this->ordercustomername;
    }

    /**
     * @param mixed $ordercustomername
     */
    public function setOrdercustomername($ordercustomername): void
    {
        $this->ordercustomername = $ordercustomername;
    }

    /**
     * @return mixed
     */


    public function getObjectVars()
    {
        return get_object_vars($this);
    }
}