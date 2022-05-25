<?php

class WeekModel implements ModelInterface
{

    /**
     * @var PDO
     */
    private $db;
    /**
     * @var $categories stdClass
     */
    private $weeks;

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
        $query = $this->db->prepare("SELECT * FROM week WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, 'Week')[0];
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
    public function getWeekById($id)
    {
        foreach ($this->getAll() as $index => $week) {
            if ($week->getId() == $id) {
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
        if (!isset($this->weeks)) {
            $this->weeks = $this->db->query("SELECT * FROM week")->fetchAll(PDO::FETCH_CLASS, 'Week');
        }

        return $this->weeks;
    }
}