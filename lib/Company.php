<?php

class Company
{

    private $id;

    private $companyname;
    private $companyfullname;
    private $companyrole;
    private $companysubrole;
    private $companyaddressstreet;
    private $companyaddressnr;
    private $companyaddresscity;
    private $companytaxnumber;
    private $companydescription;

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
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * @param mixed $companyname
     */
    public function setCompanyname($companyname): void
    {
        $this->companyname = $companyname;
    }

    /**
     * @return mixed
     */
    public function getCompanyfullname()
    {
        return $this->companyfullname;
    }

    /**
     * @param mixed $companyfullname
     */
    public function setCompanyfullname($companyfullname): void
    {
        $this->companyfullname = $companyfullname;
    }

    /**
     * @return mixed
     */
    public function getCompanyrole()
    {
        return $this->companyrole;
    }

    /**
     * @param mixed $companyrole
     */
    public function setCompanyrole($companyrole): void
    {
        $this->companyrole = $companyrole;
    }

    /**
     * @return mixed
     */
    public function getCompanyaddressstreet()
    {
        return $this->companyaddressstreet;
    }

    /**
     * @param mixed $companyaddressstreet
     */
    public function setCompanyaddressstreet($companyaddressstreet): void
    {
        $this->companyaddressstreet = $companyaddressstreet;
    }

    /**
     * @return mixed
     */
    public function getCompanyaddressnr()
    {
        return $this->companyaddressnr;
    }

    /**
     * @param mixed $companyaddressnr
     */
    public function setCompanyaddressnr($companyaddressnr): void
    {
        $this->companyaddressnr = $companyaddressnr;
    }

    /**
     * @return mixed
     */
    public function getCompanyaddresscity()
    {
        return $this->companyaddresscity;
    }

    /**
     * @param mixed $companyaddresscity
     */
    public function setCompanyaddresscity($companyaddresscity): void
    {
        $this->companyaddresscity = $companyaddresscity;
    }

    /**
     * @return mixed
     */
    public function getCompanytaxnumber()
    {
        return $this->companytaxnumber;
    }

    /**
     * @param mixed $companytaxnumber
     */
    public function setCompanytaxnumber($companytaxnumber): void
    {
        $this->companytaxnumber = $companytaxnumber;
    }

    /**
     * @return mixed
     */
    public function getCompanydescription()
    {
        return $this->companydescription;
    }

    /**
     * @param mixed $companydescription
     */
    public function setCompanydescription($companydescription): void
    {
        $this->companydescription = $companydescription;
    }

    /**
     * @return mixed
     */
    public function getCompanysubrole()
    {
        return $this->companysubrole;
    }

    /**
     * @param mixed $companysubrole
     */
    public function setCompanysubrole($companysubrole): void
    {
        $this->companysubrole = $companysubrole;
    }


    public function getObjectVars()
    {
        return get_object_vars($this);
    }
}