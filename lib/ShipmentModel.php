<?php

class ShipmentModel implements ModelInterface
{
    private $db;
    private $shipments;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->shipments)) {
            $this->shipments = $this->db->getDb()->query("SELECT * FROM shipment")->fetchAll(PDO::FETCH_CLASS, 'Shipment');
        }

        return $this->shipments;
    }
    public function getAllCompleted()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->shipments)) {
            $this->shipments = $this->db->getDb()->query("SELECT * FROM orders WHERE orderstatus='Gotowe'")->fetchAll(PDO::FETCH_CLASS, 'Order');
        }

        return $this->shipments;
    }
    public function getAllShiped()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->shipments)) {
            $this->shipments = $this->db->getDb()->query("SELECT * FROM orders WHERE orderstatus='Wysłane'")->fetchAll(PDO::FETCH_CLASS, 'Order');
        }

        return $this->shipments;
    }
    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM shipment WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Shipment')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['shipment'] as $varValue) {
            $shipment = $this->prepareShipment($varValue);
            return $this->db->save('shipment', $shipment);
        }
    }

    public function prepareShipment($post)
    {
        $shipment = new Shipment();
        foreach ($shipment->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($shipment, $method)) {
                if (!empty($post[$varName])) {
                    $shipment->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $shipment->$method($post[$varName]);
                }
            }
        }
        return $shipment;
    }

    public function bindParams($query, $post)
    {

        $query->bindParam(':orderid', $post['orderid']);
        $query->bindParam(':productid', $post['productid']);
        $query->bindParam(':productamount', $post['productamount']);
        $query->bindParam(':orderstatus', $post['orderstatus']);
        $query->bindParam(':productstatus', $post['productstatus']);
        $query->bindParam(':shipmentdate', $post['shipmentdate']);
        $query->bindParam(':shipmentnote', $post['shipmentnote']);
        $query->bindParam(':shipmentid', $post['shipmentid']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM shipment WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
