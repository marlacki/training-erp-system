<?php

/**
 * Interface RequestInterface
 */
interface RequestInterface
{
    /**
     * @return mixed
     */
    public function setAction();

    /**
     * @return mixed
     */
    public function getAction();

    /**
     * @return mixed
     */
    public function setId();

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getPost();

    /**
     * @return mixed
     */
    public function isPostSet();

    /**
     * @return mixed
     */
    public function getPostModel();
}