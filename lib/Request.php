<?php

/**
 * Class Request
 */
class Request implements RequestInterface
{
    /**
     * @var string
     */
    private $action;
    /**
     * @var integer
     */
    private $id;


    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->setAction();
        $this->setId();
    }

    /**
     * @return string
     */
    public function getAction()
    {
        if (!isset($this->action)) {
            $this->setAction();
        }
        return $this->action;
    }

    /**
     * @return Request
     */
    public function setAction()
    {
        if (isset($_GET['action']) and !empty($_GET['action'])) {
            $this->action = $_GET['action'];
        }
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        if (!isset($this->action)) {
            $this->setId();
        }
        return $this->id;
    }

    /**
     * @return Request
     */
    public function setId()
    {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $this->id = $_GET['id'];
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getPost()
    {
        if ($this->isPostSet()) {
            return $_POST;
        }
    }

    /**
     * @return bool
     */
    public function isPostSet()
    {
        if (isset($_POST) and !empty($_POST)) {
            return true;
        }

        return false;
    }


    /**
     * @return bool
     */
    public function getPostModel()
    {
        if (!$this->isPostSet()) {
            return false;
        }

        if (!isset($_POST['model'])) {
            return false;
        }

        if (empty($_POST['model'])) {
            return false;
        }
        return $_POST['model'];
    }
}