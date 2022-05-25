<?php

class ListMaterialModel implements ModelInterface
{
    private $db;
    private $listmaterials;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->listmaterials)) {
            $this->listmaterials = $this->db->getDb()->query("SELECT * FROM listmaterial")->fetchAll(PDO::FETCH_CLASS, 'ListMaterial');
        }

        return $this->listmaterials;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM listmaterial WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Listmaterial')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['listmaterial'] as $varValue) {
            $listmaterial = $this->prepareListMaterial($varValue);
            $this->db->save('listmaterial', $listmaterial);
        }
    }

    public function prepareListMaterial($post)
    {
        $listmaterial = new ListMaterial();
        foreach ($listmaterial->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($listmaterial, $method)) {
                if (!empty($post[$varName])) {
                    $listmaterial->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $listmaterial->$method($post[$varName]);
                }
            }
        }
        return $listmaterial;
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
        $query->bindParam(':materialid', $post['materialid']);
        $query->bindParam(':materialtype', $post['materialtype']);
        $query->bindParam(':materiallength', $post['materiallength']);
        $query->bindParam(':materialdimensiona', $post['materialdimensiona']);
        $query->bindParam(':materialdimensionb', $post['materialdimensionb']);
        $query->bindParam(':materialamount', $post['materialamount']);
        $query->bindParam(':materialthickness', $post['materialthickness']);
        $query->bindParam(':productamount', $post['productamount']);
//        $query->bindParam(':materialtypeunit', $post['materialtypeunit']);

        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM listmaterial WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
