<?php

class OrderStatusModel implements ModelInterface
{
    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $statuses;

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
        $query = $this->db->prepare("SELECT * FROM status WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, 'Status')[0];
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
    public function getStatusById($statusid)
    {
        foreach ($this->getAll() as $index => $status) {
            if ($status->getId() == $statusid) {
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
        if (!isset($this->statuses)) {
            $this->statuses = $this->db->query("SELECT * FROM status")->fetchAll(PDO::FETCH_CLASS, 'Status');
        }

        return $this->statuses;
    }
}