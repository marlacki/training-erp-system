<?php


class Schedule
{
    private $id;


    private $customername;
    private $customerorderid;
    private $orderid;
    private $orderstatus;
    private $week;
    private $year;
    private $positioninschedule;

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
    public function getCustomerorderid()
    {
        return $this->customerorderid;
    }

    /**
     * @param mixed $customerorderid
     */
    public function setCustomerorderid($customerorderid): void
    {
        $this->customerorderid = $customerorderid;
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
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * @param mixed $week
     */
    public function setWeek($week): void
    {
        $this->week = $week;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getPositioninschedule()
    {
        return $this->positioninschedule;
    }

    /**
     * @param mixed $positioninschedule
     */
    public function setPositioninschedule($positioninschedule): void
    {
        $this->positioninschedule = $positioninschedule;
    }

    public function getObjectVars()
    {
        return get_object_vars($this);
    }


}