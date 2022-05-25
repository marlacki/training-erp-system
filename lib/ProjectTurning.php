<?php

class ProjectTurning
{
    private $id;
    private $turningpartid;
    private $turningpartname;
    private $turningpartamount;
    private $turningpartnotes;
    private $projectid;
    private $projectsize;
    private $projectversion;

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

    /**
     * @return mixed
     */
    public function getTurningpartid()
    {
        return $this->turningpartid;
    }

    /**
     * @param mixed $turningpartid
     */
    public function setTurningpartid($turningpartid): void
    {
        $this->turningpartid = $turningpartid;
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
    public function getTurningpartname()
    {
        return $this->turningpartname;
    }

    /**
     * @param mixed $turningpartname
     */
    public function setTurningpartname($turningpartname): void
    {
        $this->turningpartname = $turningpartname;
    }

    /**
     * @return mixed
     */
    public function getTurningpartamount()
    {
        return $this->turningpartamount;
    }

    /**
     * @param mixed $turningpartamount
     */
    public function setTurningpartamount($turningpartamount): void
    {
        $this->turningpartamount = $turningpartamount;
    }

    /**
     * @return mixed
     */
    public function getTurningpartnotes()
    {
        return $this->turningpartnotes;
    }

    /**
     * @param mixed $turningpartnotes
     */
    public function setTurningpartnotes($turningpartnotes): void
    {
        $this->turningpartnotes = $turningpartnotes;
    }

    /**
     * @return mixed
     */


    public function getObjectVars()
    {
        return get_object_vars($this);
    }
}