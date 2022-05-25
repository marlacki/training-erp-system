<?php

class ProjectMaterial
{

    private $id;
    private $materialid;
    private $materialtype;
    private $materiallength;
    private $materialdimensiona;
    private $materialdimensionb;
    private $materialobliquecutting;
    private $materialthickness;
    private $materialamount;


    // project
    private $projectid;
    private $projectsize;
    private $projectversion;

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
    public function getMaterialobliquecutting()
    {
        return $this->materialobliquecutting;
    }

    /**
     * @param mixed $materialobliquecutting
     */
    public function setMaterialobliquecutting($materialobliquecutting): void
    {
        $this->materialobliquecutting = $materialobliquecutting;
    }

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

    /**
     * @return mixed
     */


    public function getObjectVars()
    {
        return get_object_vars($this);
    }


}