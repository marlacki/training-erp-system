<?php

/**
 * Class OrderModel
 */
class OrderModel implements ModelInterface
{
    /**
     * @var
     */
    private $db;
    /**
     * @var
     */
    private $orders;


    /**
     * OrderModel constructor.
     */
    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    /**
     * @return mixed
     */
    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->orders)) {
            $this->orders = $this->db->getDb()->query("SELECT * FROM orders")->fetchAll(PDO::FETCH_CLASS, 'Order');
        }

        return $this->orders;
    }

    /**
     * @param $id
     * @return false|mixed
     */
    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM orders WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Order')[0];

    }

    /**
     * @param $week
     * @return false
     */
    public function getAllByWeek($week)
    {
        // TODO: Implement getOneById() method.
        if (!$week) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM orders WHERE orderpositioninschedule=:week");
        $query->bindParam(':week', $week);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Order');

    }

    /**
     * @param $post
     * @return false|mixed
     */
    public function save($post)
    {

        if ($this->checkIfExactOrderExists($post)) {
            return false;
        };

        // TODO: Implement save() method.
        foreach ($post['model']['orders'] as $varValue) {
            $order = $this->prepareOrder($varValue);
            return $this->db->save('orders', $order);
        }
    }

    /**
     * @param $post
     * @return bool
     */
    public function checkIfExactOrderExists($post)
    {
        $query = $this->db->getDb()->prepare("
            SELECT id FROM orders 
            WHERE customername=:customername AND customerorderida=:customerorderida AND customerorderidb=:customerorderidb AND customerexternalorderid=:customerexternalorderid AND
              orderdeadline=:orderdeadline AND orderdate=:orderdate AND ordernotes=:ordernotes AND orderpositioninschedule=:orderpositioninschedule AND orderstatus=:orderstatus");
        $query = $this->bindParams($query, $post);
        $query->execute();

        if ($query->fetchAll()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $query
     * @param $post
     * @return mixed
     */
    public function bindParams($query, $post)
    {

        $query->bindParam(':customername', $post['customername']);
        $query->bindParam(':customerorderida', $post['customerorderida']);
        $query->bindParam(':customerorderidb', $post['customerorderidb']);
        $query->bindParam(':customerexternalorderid', $post['customerexternalorderid']);
        $query->bindParam(':orderdate', $post['orderdate']);
        $query->bindParam(':orderdeadline', $post['orderdeadline']);
        $query->bindParam(':ordernotes', $post['ordernotes']);
        $query->bindParam(':orderstatus', $post['orderstatus']);
        $query->bindParam(':orderpositioninschedule', $post['orderpositioninschedule']);

        return $query;
    }

    /**
     * @param $post
     * @return Order
     */
    public function prepareOrder($post)
    {
        $order = new Order();
        foreach ($order->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($order, $method)) {
                if (!empty($post[$varName])) {
                    $order->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $order->$method($post[$varName]);
                }
            }
        }
        return $order;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM orders WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
