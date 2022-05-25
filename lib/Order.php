<?php

/**
 * Class Order
 */
class Order
{
    /**
     * @var
     */
    private $id;

    // customer
    /**
     * @var
     */
    private $customername;
    /**
     * @var
     */
    private $customerorderida;
    /**
     * @var
     */
    private $customerorderidb;
    /**
     * @var
     */
    private $customerexternalorderid;


    // order
    /**
     * @var
     */
    private $orderdate;
    /**
     * @var
     */
    private $orderdeadline;
    /**
     * @var
     */
    private $ordernotes;
    /**
     * @var
     */
    private $orderstatus;
    /**
     * @var
     */
    private $orderpositioninschedule;

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
    public function getCustomername()
    {
        return $this->customername;
    }

    /**
     * @param mixed $customername
     */
    public function setCustomername($customername): void
    {
        $this->customername = $customername;
    }

    /**
     * @return mixed
     */
    public function getCustomerorderida()
    {
        return $this->customerorderida;
    }

    /**
     * @param mixed $customerorderida
     */
    public function setCustomerorderida($customerorderida): void
    {
        $this->customerorderida = $customerorderida;
    }

    /**
     * @return mixed
     */
    public function getCustomerorderidb()
    {
        return $this->customerorderidb;
    }

    /**
     * @param mixed $customerorderidb
     */
    public function setCustomerorderidb($customerorderidb): void
    {
        $this->customerorderidb = $customerorderidb;
    }

    /**
     * @return mixed
     */
    public function getCustomerexternalorderid()
    {
        return $this->customerexternalorderid;
    }

    /**
     * @param mixed $customerexternalorderid
     */
    public function setCustomerexternalorderid($customerexternalorderid): void
    {
        $this->customerexternalorderid = $customerexternalorderid;
    }

    /**
     * @return mixed
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * @param mixed $orderdate
     */
    public function setOrderdate($orderdate): void
    {
        $this->orderdate = $orderdate;
    }

    /**
     * @return mixed
     */
    public function getOrderdeadline()
    {
        return $this->orderdeadline;
    }

    /**
     * @param mixed $orderdeadline
     */
    public function setOrderdeadline($orderdeadline): void
    {
        $this->orderdeadline = $orderdeadline;
    }

    /**
     * @return mixed
     */
    public function getOrdernotes()
    {
        return $this->ordernotes;
    }

    /**
     * @param mixed $ordernotes
     */
    public function setOrdernotes($ordernotes): void
    {
        $this->ordernotes = $ordernotes;
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
    public function getOrderpositioninschedule()
    {
        return $this->orderpositioninschedule;
    }

    /**
     * @param mixed $orderpositioninschedule
     */
    public function setOrderpositioninschedule($orderpositioninschedule): void
    {
        $this->orderpositioninschedule = $orderpositioninschedule;
    }


    /**
     * @return array
     */
    public function getObjectVars()
    {
        return get_object_vars($this);
    }
}