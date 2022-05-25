<?php

class Project
{

    private $id;


    // header
    private $projectname;
    private $projectsize;
    private $projectcategory;
    private $projectversion;
    private $projectnotes;

    /**
     * @return mixed
     */
    public function getProjectcategory()
    {
        return $this->projectcategory;
    }

    /**
     * @param mixed $projectcategory
     */
    public function setProjectcategory($projectcategory): void
    {
        $this->projectcategory = $projectcategory;
    }

    /**
     * @return mixed
     */

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
    public function getProjectname()
    {
        return $this->projectname;
    }

    /**
     * @param mixed $projectname
     */
    public function setProjectname($projectname): void
    {
        $this->projectname = $projectname;
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
    public function getProjectnotes()
    {
        return $this->projectnotes;
    }

    /**
     * @param mixed $projectnotes
     */
    public function setProjectnotes($projectnotes): void
    {
        $this->projectnotes = $projectnotes;
    }


    public function getObjectVars()
    {
        return get_object_vars($this);
    }


}