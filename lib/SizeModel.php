<?php

class SizeModel implements ModelInterface
{

    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $sizes;

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
        $query = $this->db->prepare("SELECT * FROM size WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, 'Size')[0];
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
    public function getSizeById($sizeid)
    {
        foreach ($this->getAll() as $index => $size) {
            if ($size->getId() == $sizeid) {
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
        if (!isset($this->sizes)) {
            $this->sizes = $this->db->query("SELECT * FROM size")->fetchAll(PDO::FETCH_CLASS, 'Size');
        }

        return $this->sizes;
    }
}