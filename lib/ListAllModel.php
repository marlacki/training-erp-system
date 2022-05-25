<?php

class ListAllModel implements ModelInterface
{
    private $db;
    private $listalls;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->listalls)) {
            $this->listalls = $this->db->getDb()->query("SELECT * FROM listall")->fetchAll(PDO::FETCH_CLASS, 'ListAll');
        }

        return $this->listalls;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM listall WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'ListAll')[0];

    }

    public function save($post)
    {

        if (!empty($post['model']['chosen'])) {
            foreach ($post['model']['chosen'] as $value) {
                $varValue = $post['model']['listall'][$value];
                $listall = $this->prepareListAll($varValue);
                $this->db->save('listall', $listall);
            }
            return true;
        }

    }


    public function prepareListAll($post)
    {
        $listall = new ListAll();
        foreach ($listall->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($listall, $method)) {
                if (!empty($post[$varName])) {
                    $listall->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $listall->$method($post[$varName]);
                }
            }
        }
        return $listall;
    }

    public function bindParams($query, $post)
    {


        $query->bindParam(':listid', $post['listid']);
        $query->bindParam(':status', $post['status']);
        $query->bindParam(':orderid', $post['orderid']);
        $query->bindParam(':orderyear', $post['orderyear']);
        $query->bindParam(':productname', $post['productname']);
        $query->bindParam(':productsize', $post['productsize']);
        $query->bindParam(':producttype', $post['producttype']);
        $query->bindParam(':productamount', $post['productamount']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM listall WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
