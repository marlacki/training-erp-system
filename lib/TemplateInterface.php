<?php

/**
 * Interface TemplateInterface
 */
interface TemplateInterface
{
    /**
     * @param $model
     * @return mixed
     */
    public function setModel($model);

    /**
     * @param $name
     * @return mixed
     */
    public function getModel($name);

    /**
     * @param $action
     * @return mixed
     */
    public function setAction($action);

    /**
     * @return mixed
     */
    public function getAction();

    /**
     * @param $id
     * @return mixed
     */
    public function setElementId($id);

    /**
     * @return mixed
     */
    public function getElementId();

    /**
     * @return mixed
     */
    public function drawTemplate();

}