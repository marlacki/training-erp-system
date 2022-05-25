<?php

class ScheduleModel implements ModelInterface
{
    private $db;
    private $schedules;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->schedules)) {
            $this->schedules = $this->db->getDb()->query("SELECT * FROM schedule")->fetchAll(PDO::FETCH_CLASS, 'Schedule');
        }

        return $this->schedules;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM schedule WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Schedule')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['schedule'] as $varValue) {
            $schedule = $this->prepareSchedule($varValue);
            return $this->db->save('schedule', $schedule);
        }
    }

    public function prepareSchedule($post)
    {
        $schedule = new Schedule();
        foreach ($schedule->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($schedule, $method)) {
                if (!empty($post[$varName])) {
                    $schedule->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $schedule->$method($post[$varName]);
                }
            }
        }
        return $schedule;
    }

    public function bindParams($query, $post)
    {

        $query->bindParam(':customername', $post['customername']);
        $query->bindParam(':customerorderid', $post['customerorderid']);
        $query->bindParam(':orderid', $post['orderid']);
        $query->bindParam(':orderstatus', $post['orderstatus']);
        $query->bindParam(':week', $post['week']);
        $query->bindParam(':year', $post['year']);
        $query->bindParam(':positioninschedule', $post['positioninschedule']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM schedule WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
