<?php

class ListBuyPartModel implements ModelInterface
{
    private $db;
    private $listbuyparts;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->listbuyparts)) {
            $this->listbuyparts = $this->db->getDb()->query("SELECT * FROM listbuypart")->fetchAll(PDO::FETCH_CLASS, 'ListBuyPart');
        }

        return $this->listbuyparts;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM listbuypart WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'ListBuyPart')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['listbuypart'] as $varValue) {
            $listbuypart = $this->prepareListBuyPart($varValue);
            $this->db->save('listbuypart', $listbuypart);
        }
    }

    public function prepareListBuyPart($post)
    {
        $listbuypart = new ListBuyPart();
        foreach ($listbuypart->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($listbuypart, $method)) {
                if (!empty($post[$varName])) {
                    $listbuypart->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $listbuypart->$method($post[$varName]);
                }
            }
        }
        return $listbuypart;
    }

    public function bindParams($query, $post)
    {


        $query->bindParam(':listid', $post['listid']);
        $query->bindParam(':status', $post['status']);
        $query->bindParam(':orderid', $post['orderid']);
        $query->bindParam(':orderyear', $post['orderyear']);
        $query->bindParam(':productname', $post['productname']);
        $query->bindParam(':productsize', $post['producttype']);
        $query->bindParam(':producttype', $post['productype']);
        $query->bindParam(':buypartid', $post['buypartid']);
        $query->bindParam(':buypartname', $post['buypartname']);
        $query->bindParam(':buypartamount', $post['buypartamount']);
        $query->bindParam(':buypartsize', $post['buypartsize']);
        $query->bindParam(':buypartdima', $post['buypartdima']);
        $query->bindParam(':buypartdimb', $post['buypartdimb']);
        $query->bindParam(':buypartnotes', $post['buypartnotes']);
        $query->bindParam(':buyparttype', $post['buyparttype']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM listbuypart WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
