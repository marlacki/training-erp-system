<?php

class Size
{
    private $id;
    private $avaliablesize;

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

    /**
     * @return mixed
     */
    public function getAvaliablesize()
    {
        return $this->avaliablesize;
    }

    /**
     * @param mixed $avaliablesize
     */

    public function getObjectVars()
    {
        return get_object_vars($this);
    }
}
