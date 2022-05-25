<?php

class ListTurningModel implements ModelInterface
{
    private $db;
    private $listturnings;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->listturnings)) {
            $this->listturnings = $this->db->getDb()->query("SELECT * FROM listturning")->fetchAll(PDO::FETCH_CLASS, 'ListTurning');
        }

        return $this->listturnings;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM listturning WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Listturning')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['listturning'] as $varValue) {
            $listturning = $this->prepareListTurning($varValue);
            $this->db->save('listturning', $listturning);
        }
    }

    public function prepareListTurning($post)
    {
        $listturning = new ListTurning();
        foreach ($listturning->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($listturning, $method)) {
                if (!empty($post[$varName])) {
                    $listturning->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $listturning->$method($post[$varName]);
                }
            }
        }
        return $listturning;
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
        $query->bindParam(':turningpartid', $post['turningpartid']);
        $query->bindParam(':turningpartname', $post['turningpartname']);
        $query->bindParam(':turningpartamount', $post['turningpartamount']);
        $query->bindParam(':turningpartnotes', $post['turningpartnotes']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM listturning WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
