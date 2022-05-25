<?php

class ProjectMaterialModel implements ModelInterface
{


    private $db;
    private $projectmaterials;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->projectmaterials)) {
            $this->projectmaterials = $this->db->getDb()->query("SELECT * FROM projectmaterial")->fetchAll(PDO::FETCH_CLASS, 'ProjectMaterial');
        }

        return $this->projectmaterials;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM projectmaterial WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        $query->fetchAll(PDO::FETCH_CLASS, 'ProjectMaterial')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['projectmaterial'] as $varValue) {
            $projectmaterials = $this->prepareProjectMaterial($varValue);
            $this->db->save('projectmaterial', $projectmaterials);
        }
    }

    public function prepareProjectMaterial($post)
    {
        $projectmaterials = new ProjectMaterial();
        foreach ($projectmaterials->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($projectmaterials, $method)) {
                if (!empty($post[$varName])) {
                    $projectmaterials->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $projectmaterials->$method($post[$varName]);
                }
            }
        }
        return $projectmaterials;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM projectmaterial WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function checkIfExactProjectMaterialExists($post)
    {
    }


    public function bindParams($query, $post)
    {

        $query->bindParam(':materialid', $post['materialid']);
        $query->bindParam(':materialtype', $post['materialtype']);
        $query->bindParam(':materiallength', $post['materiallength']);
        $query->bindParam(':materialdimensiona', $post['materialdimensiona']);
        $query->bindParam(':materialdimensionb', $post['materialdimensionb']);
        $query->bindParam(':materialobliquecutting', $post['materialobliquecutting']);
        $query->bindParam(':materialamount', $post['materialamount']);
        $query->bindParam(':projectid', $post['projectid']);
        $query->bindParam(':projectversion', $post['projectversion']);
        $query->bindParam(':projectsize', $post['projectsize']);
        $query->bindParam(':materialthickness', $post['materialthickness']);


        return $query;
    }

    public function getMatchingProject($projectindex, $projectversion, $projectsize)
    {

        $this->projectmaterials = $this->db->getDb()->query("SELECT * FROM projectmaterial WHERE projectid='$projectindex' AND projectversion='$projectversion' AND projectsize='$projectsize'")->fetchAll(PDO::FETCH_CLASS, 'ProjectMaterial');


        return $this->projectmaterials;
    }

}
