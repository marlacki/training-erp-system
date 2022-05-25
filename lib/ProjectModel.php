<?php

class ProjectModel implements ModelInterface
{
    private $db;
    private $projects;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->projects)) {
            $this->projects = $this->db->getDb()->query("SELECT * FROM project")->fetchAll(PDO::FETCH_CLASS, 'Project');
        }

        return $this->projects;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM project WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Project')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['project'] as $varValue) {
            $projects = $this->prepareProject($varValue);
            $this->db->save('project', $projects);
        }
    }

    public function prepareProject($post)
    {
        $projects = new Project();
        foreach ($projects->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($projects, $method)) {
                if (!empty($post[$varName])) {
                    $projects->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $projects->$method($post[$varName]);
                }
            }
        }
        return $projects;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM project WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function checkIfExactProjectExists($post)
    {
    }


    public function bindParams($query, $post)
    {

        $query->bindParam(':projectname', $post['projectname']);
        $query->bindParam(':projectsize', $post['projectsize']);
        $query->bindParam(':projectnotes', $post['projectnotes']);
        $query->bindParam(':projectcategory', $post['projectcategory']);
        $query->bindParam(':projectversion', $post['projectversion']);


        return $query;
    }


}