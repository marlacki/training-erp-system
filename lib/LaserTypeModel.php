<?php

class LaserTypeModel implements ModelInterface
{
    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $lasertypes;

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
        $query = $this->db->prepare("SELECT * FROM lasertype WHERE id=:id");
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
    public function getLaserTypeById($lasertypeid)
    {
        foreach ($this->getAll() as $index => $lasertype) {
            if ($lasertype->getId() == $lasertypeid) {
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
        if (!isset($this->lasertypes)) {
            $this->lasertypes = $this->db->query("SELECT * FROM lasertype")->fetchAll(PDO::FETCH_CLASS, 'Type');
        }

        return $this->lasertypes;
    }

}