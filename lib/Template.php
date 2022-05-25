<?php

/*
 * Facade design pattern
 * We can change method drawTemplate() without making everyone to change their code to draw template
 * It's like a black box with a button, you press it and it works (and you don't have to worry what's inside).
 */

/**
 * Class Template
 */
class Template implements TemplateInterface
{

    /**
     * @var
     */
    private $action;
    /**
     * @var
     */
    private $elementId;
    /**
     * @var
     */
    private $model;

    /**
     * @return mixed|void
     */
    public function drawTemplate()
    {
        $this->includeTemplateByAction($this->action);
    }

    /**
     * @param $action
     */
    public function includeTemplateByAction($action)
    {
        switch ($action) {
            case ('home'):
                include_once('template/home.phtml');
                break;

            //order
            case ('orderaddedit'):
                include_once('template/orderaddedit.phtml');
                break;
            case ('orderlist'):
                include_once('template/orderlist.phtml');
                break;

            //project
            case ('projectaddedit'):
                include_once('template/projectaddedit.phtml');
                break;
            case ('projectlist'):
                include_once('template/projectlist.phtml');
                break;

            //schedule
            case ('schedulelist'):
                include_once('template/schedulelist.phtml');
                break;
            case ('scheduleaddedit'):
                include_once('template/scheduleaddedit.phtml');
                break;
            //shipment
            case ('shipmentlist'):
                include_once('template/shipmentlist.phtml');
                break;
            // ordercart
            case ('ordercartaddedit'):
                include_once('template/ordercartaddedit.phtml');
                break;
            case ('ordercartlist'):
                include_once('template/ordercartlist.phtml');
                break;
            case ('ordercartlistdetail'):
                include_once('template/ordercartlistdetail.phtml');
                break;
            //preparelists
            case ('preparelists'):
                include_once('template/preparelists.phtml');
                break;
            case ('listbuypart'):
                include_once('template/listbuypart.phtml');
                break;
            case ('listmaterial'):
                include_once('template/listmaterial.phtml');
                break;
            case ('listlaser'):
                include_once('template/listlaser.phtml');
                break;

            default:
                include_once('template/404.phtml');
                break;

        }
    }

    /**
     * @return string
     */
    public function getPageLabel()
    {
        switch ($this->action) {
            case ('home'):
                $label = 'Strona główna';
                break;
            case (''):
                $label = "Strona główna";
                break;
            default:
                $label = htmlspecialchars($this->action);
                break;
        }

        return $label;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param $action
     * @return Template
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return integer
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * @param $elementId
     * @return Template
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;
        return $this;
    }

    /**
     * @return Template
     */
    public function getModel($name)
    {
        if (!isset($this->model[$name])) {
            return false;
        }

        return $this->model[$name];
    }

    /**
     * @param $model
     * @return Template
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }


}