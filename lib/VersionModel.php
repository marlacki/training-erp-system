<?php

class VersionModel implements ModelInterface
{

    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $versions;

    public function __construct()
    {
        $this->db = Db::getInstance()->getDb();
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function getOneById($id)
    {
        if (!$id) {
            return false;
        }
        $query = $this->db->prepare("SELECT * FROM version WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, 'Version')[0];
    }

    /**
     * @param $post
     */
    public function save($post)
    {
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
    }

    /**
     * @param $categoryId
     * @return string
     */
    public function getVersionById($versionid)
    {
        foreach ($this->getAll() as $index => $version) {
            if ($version->getId() == $versionid) {
                return $this->getAll()[$index]->getLabel();
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getAll()
    {
        if (!isset($this->versions)) {
            $this->versions = $this->db->query("SELECT * FROM version")->fetchAll(PDO::FETCH_CLASS, 'Version');
        }

        return $this->versions;
    }
}