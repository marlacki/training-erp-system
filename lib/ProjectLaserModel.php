<?php

class ProjectLaserModel implements ModelInterface
{
    private $db;
    private $projectlasers;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->projectlasers)) {
            $this->projectlasers = $this->db->getDb()->query("SELECT * FROM projectlaser")->fetchAll(PDO::FETCH_CLASS, 'ProjectLaser');
        }

        return $this->projectlasers;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM projectlaser WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'ProjectLaser')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['projectlaser'] as $varValue) {
            $projectlasers = $this->prepareProjectLaser($varValue);
            $this->db->save('projectlaser', $projectlasers);
        }
    }

    public function prepareProjectLaser($post)
    {
        $projectlasers = new ProjectLaser();
        foreach ($projectlasers->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($projectlasers, $method)) {
                if (!empty($post[$varName])) {
                    $projectlasers->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $projectlasers->$method($post[$varName]);
                }
            }
        }
        return $projectlasers;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM projectlaser WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function checkIfExactProjectLaserExists($post)
    {
    }


    public function bindParams($query, $post)
    {

        $query->bindParam(':laserpartid', $post['laserpartid']);
        $query->bindParam(':laserpartname', $post['laserpartname']);
        $query->bindParam(':laserpartamount', $post['laserpartamount']);
        $query->bindParam(':laserpartthickness', $post['laserpartthickness']);
        $query->bindParam(':laserpartnotes', $post['laserpartnotes']);
        $query->bindParam(':projectid', $post['projectid']);
        $query->bindParam(':projectversion', $post['projectversion']);
        $query->bindParam(':projectsize', $post['projectsize']);


        return $query;
    }

    public function getMatchingProject($projectindex, $projectversion, $projectsize)
    {

        $this->projectlasers = $this->db->getDb()->query("SELECT * FROM projectlaser WHERE projectid='$projectindex' AND projectversion='$projectversion' AND projectsize='$projectsize'")->fetchAll(PDO::FETCH_CLASS, 'ProjectLaser');


        return $this->projectlasers;
    }


}
