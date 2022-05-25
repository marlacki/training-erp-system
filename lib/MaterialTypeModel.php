<?php

class MaterialTypeModel implements ModelInterface
{
    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $materialtype;

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
        $query = $this->db->prepare("SELECT * FROM materialtype WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, 'Type')[0];
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
    public function getMaterialTypeById($materialtypeid)
    {
        foreach ($this->getAll() as $index => $materialtype) {
            if ($materialtype->getId() == $materialtypeid) {
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
        if (!isset($this->materialtype)) {
            $this->materialtype = $this->db->query("SELECT * FROM materialtype")->fetchAll(PDO::FETCH_CLASS, 'Type');
        }

        return $this->materialtype;
    }

}