<?php

class ListLaserModel implements ModelInterface
{
    private $db;
    private $listlasers;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->listlasers)) {
            $this->listlasers = $this->db->getDb()->query("SELECT * FROM listlaser")->fetchAll(PDO::FETCH_CLASS, 'ListLaser');
        }

        return $this->listlasers;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM listlaser WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'ListLaser')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['listlaser'] as $varValue) {
            $listlaser = $this->prepareListLaser($varValue);
            $this->db->save('listlaser', $listlaser);
        }
    }

    public function prepareListLaser($post)
    {
        $listlaser = new ListLaser();
        foreach ($listlaser->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($listlaser, $method)) {
                if (!empty($post[$varName])) {
                    $listlaser->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $listlaser->$method($post[$varName]);
                }
            }
        }
        return $listlaser;
    }

    public function bindParams($query, $post)
    {

        $query->bindParam(':listid', $post['listid']);
        $query->bindParam(':status', $post['status']);
        $query->bindParam(':orderid', $post['orderid']);
        $query->bindParam(':orderyear', $post['orderyear']);
        $query->bindParam(':productname', $post['productname']);
        $query->bindParam(':productamount', $post['productamount']);
        $query->bindParam(':productsize', $post['producttype']);
        $query->bindParam(':producttype', $post['productype']);
        $query->bindParam(':laserpartid', $post['laserpartid']);
        $query->bindParam(':laserpartname', $post['laserpartname']);
        $query->bindParam(':laserpartamount', $post['laserpartamount']);
        $query->bindParam(':laserpartthickness', $post['laserpartthickness']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM listlaser WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
