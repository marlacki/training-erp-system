<?php
/**
 * Created by PhpStorm.
 * User: marek
 * Date: 19.05.2020
 * Time: 13:06
 */

class Product
{
    // product

    private $id;

    private $productid;
    private $productname;
    private $productamount;
    private $productcolour;
    private $productmount;
    private $productsize;
    private $productversion;
    private $productnotes;
    private $orderida;
    private $orderidb;
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
    /**
     * @return mixed
     */


    /**
     * @return mixed
     */


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
    public function getProductcolour()
    {
        return $this->productcolour;
    }

    /**
     * @param mixed $productcolour
     */
    public function setProductcolour($productcolour): void
    {
        $this->productcolour = $productcolour;
    }

    /**
     * @return mixed
     */
    public function getProductmount()
    {
        return $this->productmount;
    }

    /**
     * @param mixed $productmount
     */
    public function setProductmount($productmount): void
    {
        $this->productmount = $productmount;
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
    public function getProductnotes()
    {
        return $this->productnotes;
    }

    /**
     * @param mixed $productnotes
     */
    public function setProductnotes($productnotes): void
    {
        $this->productnotes = $productnotes;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getOrderida()
    {
        return $this->orderida;
    }

    /**
     * @param mixed $orderida
     */
    public function setOrderida($orderida): void
    {
        $this->orderida = $orderida;
    }

    /**
     * @return mixed
     */
    public function getOrderidb()
    {
        return $this->orderidb;
    }

    /**
     * @param mixed $orderidb
     */
    public function setOrderidb($orderidb): void
    {
        $this->orderidb = $orderidb;
    }

    /**
     * @return mixed
     */
    public function getProductversion()
    {
        return $this->productversion;
    }

    /**
     * @param mixed $productversion
     */
    public function setProductversion($productversion): void
    {
        $this->productversion = $productversion;
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