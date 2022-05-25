<?php

class ProjectTurningModel implements ModelInterface
{
    private $db;
    private $projectturnings;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->projectturnings)) {
            $this->projectturnings = $this->db->getDb()->query("SELECT * FROM projectturning")->fetchAll(PDO::FETCH_CLASS, 'ProjectTurning');
        }

        return $this->projectturnings;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM projectturning WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'ProjectTurning')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['projectturning'] as $varValue) {
            $projectturnings = $this->prepareProjectTurning($varValue);
            $this->db->save('projectturning', $projectturnings);
        }
    }

    public function prepareProjectTurning($post)
    {
        $projectturnings = new ProjectTurning();
        foreach ($projectturnings->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($projectturnings, $method)) {
                if (!empty($post[$varName])) {
                    $projectturnings->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $projectturnings->$method($post[$varName]);
                }
            }
        }
        return $projectturnings;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM projectturning WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function checkIfExactProjectTurningExists($post)
    {
    }


    public function bindParams($query, $post)
    {

        $query->bindParam(':turningpartid', $post['turningpartid']);
        $query->bindParam(':turningpartname', $post['turningpartname']);
        $query->bindParam(':turningpartamount', $post['turningpartamount']);
        $query->bindParam(':turningpartnotes', $post['turningpartnotes']);
        $query->bindParam(':projectid', $post['projectid']);
        $query->bindParam(':projectversion', $post['projectversion']);
        $query->bindParam(':projectsize', $post['projectsize']);


        return $query;
    }

    public function getMatchingProject($projectindex, $projectversion, $projectsize)
    {
        // TODO: Implement getAll() method.
        if (!$projectindex) {
            return false;
        }
        if (!$projectsize) {
            return false;
        }
        if (!$projectversion) {
            return false;
        }
        if (!isset($this->projectturnings)) {
            $this->projectturnings = $this->db->getDb()->query("SELECT * FROM projectturning WHERE projectid='$projectindex' AND projectversion='$projectversion' AND projectsize='$projectsize'")->fetchAll(PDO::FETCH_CLASS, 'ProjectTurning');
        }

        return $this->projectturnings;
    }


}
