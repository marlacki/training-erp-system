<?php

class OrderCartModel implements ModelInterface
{
    private $db;
    private $ordercarts;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->ordercarts)) {
            $this->ordercarts = $this->db->getDb()->query("SELECT * FROM ordercart")->fetchAll(PDO::FETCH_CLASS, 'OrderCart');
        }

        return $this->ordercarts;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM ordercart WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'OrderCart')[0];

    }

    public function save($post)
    {


        if (!empty($post['model']['chosen'])) {
            foreach ($post['model']['chosen'] as $value) {
                $varValue = $post['model']['ordercart'][$value];
                $ordercart = $this->prepareOrderCart($varValue);
                $this->db->save('ordercart', $ordercart);
            }
            return true;
        }
    }

    public function prepareOrderCart($post)
    {
        $ordercart = new OrderCart();
        foreach ($ordercart->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($ordercart, $method)) {
                if (!empty($post[$varName])) {
                    $ordercart->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $ordercart->$method($post[$varName]);
                }
            }
        }
        return $ordercart;
    }

    public function bindParams($query, $post)
    {

        $query->bindParam(':cartid', $post['cartid']);
        $query->bindParam(':orderid', $post['orderid']);
        $query->bindParam(':ordercustomername', $post['ordercustomername']);
        $query->bindParam(':ordercartstatus', $post['ordercartstatus']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM ordercart WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
