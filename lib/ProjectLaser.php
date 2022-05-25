<?php

class ProjectLaser
{
    private $id;
    private $laserpartid;
    private $laserpartname;
    private $laserpartamount;
    private $laserpartthickness;
    private $laserpartnotes;
    private $projectid;
    private $projectsize;
    private $projectversion;

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

    /**
     * @return mixed
     */
    public function getLaserpartid()
    {
        return $this->laserpartid;
    }

    /**
     * @param mixed $laserpartid
     */
    public function setLaserpartid($laserpartid): void
    {
        $this->laserpartid = $laserpartid;
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
    public function getLaserpartname()
    {
        return $this->laserpartname;
    }

    /**
     * @param mixed $laserpartname
     */
    public function setLaserpartname($laserpartname): void
    {
        $this->laserpartname = $laserpartname;
    }

    /**
     * @return mixed
     */
    public function getLaserpartamount()
    {
        return $this->laserpartamount;
    }

    /**
     * @param mixed $laserpartamount
     */
    public function setLaserpartamount($laserpartamount): void
    {
        $this->laserpartamount = $laserpartamount;
    }

    /**
     * @return mixed
     */
    public function getLaserpartthickness()
    {
        return $this->laserpartthickness;
    }

    /**
     * @param mixed $laserpartthickness
     */
    public function setLaserpartthickness($laserpartthickness): void
    {
        $this->laserpartthickness = $laserpartthickness;
    }

    /**
     * @return mixed
     */
    public function getLaserpartnotes()
    {
        return $this->laserpartnotes;
    }

    /**
     * @param mixed $laserpartnotes
     */
    public function setLaserpartnotes($laserpartnotes): void
    {
        $this->laserpartnotes = $laserpartnotes;
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


    public function getObjectVars()
    {
        return get_object_vars($this);
    }


}