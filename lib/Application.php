<?php

/*
 * Facade design pattern
 * We can change method start() without making everyone to change their code to use the app.
 * It's like a black box with a button, you press it and it works (and you don't have to worry what's inside).
 */

/**
 * Class Application
 */
class Application implements ApplicationInterface
{
    /**
     * @var $request Request;
     */
    private $request;


    /**
     * @var
     */
    private $template;

    /**
     * @var $model
     */
    private $model = array();

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->setRequest(new Request());
        $this->setTemplate(new Template());

        //orders
        $this->setModel('orders', new OrderModel());
        $this->setModel('products', new ProductModel());
        // project
        $this->setModel('project', new ProjectModel());

        // project list
        $this->setModel('projectbuypart', new ProjectBuyPartModel());
        $this->setModel('projectturning', new ProjectTurningModel());
        $this->setModel('projectlaser', new ProjectLaserModel());
        $this->setModel('projectmaterial', new ProjectMaterialModel());


        //other
        $this->setModel('size', new SizeModel());
        $this->setModel('version', new VersionModel());

        //ordercart
        $this->setModel('ordercart', new OrderCartModel());

        //lists
        $this->setModel('listall', new ListAllModel());
        $this->setModel('listlaser', new ListLaserModel());
        $this->setModel('listbuypart', new ListBuyPartModel());
        $this->setModel('listmaterial', new ListMaterialModel());

        //status
        $this->setModel('status', new OrderStatusModel());
        //week
        $this->setModel('week', new WeekModel());
        //shipment
        $this->setModel('shipment', new ShipmentModel());


    }

    /**
     *
     */
    public function start()
    {
        $this->handlePost();
        $this->handleGet();
    }

    /**
     *
     */
    public function handlePost()
    {
        if ($this->request->isPostSet()) {
            $model = $this->request->getPostModel();
            foreach ($model as $key => $value) {

                switch ($key) {
                    case 'orders' :
                        $this->model['orders']->save($this->request->getPost());
                        break;
                    case 'products' :
                        $this->model['products']->save($this->request->getPost());
                        break;
                    case 'project' :
                        $this->model['project']->save($this->request->getPost());
                        break;
                    case 'projectbuypart' :
                        $this->model['projectbuypart']->save($this->request->getPost());
                        break;
                    case 'projectturning' :
                        $this->model['projectturning']->save($this->request->getPost());
                        break;
                    case 'projectlaser' :
                        $this->model['projectlaser']->save($this->request->getPost());
                        break;
                    case 'projectmaterial' :
                        $this->model['projectmaterial']->save($this->request->getPost());
                        break;
                    case 'ordercart' :
                        $this->model['ordercart']->save($this->request->getPost());
                        break;
                    case 'listall' :
                        $this->model['listall']->save($this->request->getPost());
                        break;
                    case 'listbuypart' :
                        $this->model['listbuypart']->save($this->request->getPost());
                        break;
                    case 'listlaser' :
                        $this->model['listlaser']->save($this->request->getPost());
                        break;
                    case 'listmaterial' :
                        $this->model['listmaterial']->save($this->request->getPost());
                        break;


                }
            }
        }
    }


    /**
     *
     */
    public function handleGet()
    {
        switch ($this->request->getAction()) {

            // delete
            case 'orderdelete' :
                $this->model['orders']->delete($this->request->getId());
                break;


            default:
                $this->template->setModel($this->model);
                $this->template->setAction($this->request->getAction());
                $this->template->setElementId($this->request->getId());
                $this->template->drawTemplate();
                break;
        }
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Request $request
     * @return Application
     */
    public function setRequest(Request $request)
    {
        if (!isset($this->request)) {
            $this->request = $request;
        }
        return $this;
    }

    /**
     * @return Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param Template $template
     * @return Application
     */
    public function setTemplate(Template $template)
    {
        if (!isset($this->template)) {
            $this->template = $template;
        }
        return $this;
    }

    /**
     * @return
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model
     * @return Application
     */
    public function setModel($name, $model)
    {
        if (!isset($this->model[$name])) {
            $this->model[$name] = $model;
        }
        return $this;
    }

}
