<?php

/**
 * Interface ModelInterface
 */
interface  ModelInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getOneById($id);

    /**
     * @param $post
     * @return mixed
     */
    public function save($post);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}