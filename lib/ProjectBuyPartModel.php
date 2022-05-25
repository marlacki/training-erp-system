<?php


class ProjectBuyPartModel implements ModelInterface
{
    private $db;
    private $projectbuyparts;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->projectbuyparts)) {
            $this->projectbuyparts = $this->db->getDb()->query("SELECT * FROM projectbuypart")->fetchAll(PDO::FETCH_CLASS, 'ProjectBuyPart');
        }

        return $this->projectbuyparts;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM projectbuypart WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'ProjectBuyPart')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['projectbuypart'] as $varValue) {
            $projectbuyparts = $this->prepareProjectBuyParts($varValue);
            $this->db->save('projectbuypart', $projectbuyparts);
        }
    }

    public function prepareProjectBuyParts($post)
    {
        $projectbuyparts = new ProjectBuyPart();
        foreach ($projectbuyparts->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($projectbuyparts, $method)) {
                if (!empty($post[$varName])) {
                    $projectbuyparts->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $projectbuyparts->$method($post[$varName]);
                }
            }
        }
        return $projectbuyparts;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM projectbuypart WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function checkIfExactProjectBuyPartExists($post)
    {
    }


    public function bindParams($query, $post)
    {

        $query->bindParam(':buypartid', $post['buypartid']);
        $query->bindParam(':buypartname', $post['buypartname']);
        $query->bindParam(':buypartamount', $post['buypartamount']);
        $query->bindParam(':buypartsize', $post['buypartsize']);
        $query->bindParam(':buypartdima', $post['buypartdima']);
        $query->bindParam(':buypartdimb', $post['buypartdimb']);
        $query->bindParam(':buypartnotes', $post['buypartnotes']);
        $query->bindParam(':buyparttype', $post['buyparttype']);
        $query->bindParam(':projectid', $post['projectid']);
        $query->bindParam(':projectversion', $post['projectversion']);
        $query->bindParam(':projectsize', $post['projectsize']);


        return $query;
    }

    public function getMatchingProject($projectindex, $projectversion, $projectsize)
    {


        $this->projectbuyparts = $this->db->getDb()->query("SELECT * FROM projectbuypart WHERE projectid='$projectindex' AND projectversion='$projectversion' AND projectsize='$projectsize'")->fetchAll(PDO::FETCH_CLASS, 'ProjectBuyPart');


        return $this->projectbuyparts;
    }

}
