<?php

class BuyPartTypeModel implements ModelInterface
{
    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $buyparttypes;

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
        $query = $this->db->prepare("SELECT * FROM buyparttype WHERE id=:id");
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
    public function getBuyPartTypeById($buyparttypeid)
    {
        foreach ($this->getAll() as $index => $buyparttype) {
            if ($buyparttype->getId() == $buyparttypeid) {
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
        if (!isset($this->buyparttypes)) {
            $this->buyparttypes = $this->db->query("SELECT * FROM buyparttype")->fetchAll(PDO::FETCH_CLASS, 'Type');
        }

        return $this->buyparttypes;
    }

}