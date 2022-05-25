<?php

class CompanyModel implements ModelInterface
{
    private $db;
    private $companys;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->companys)) {
            $this->companys = $this->db->getDb()->query("SELECT * FROM company")->fetchAll(PDO::FETCH_CLASS, 'Company');
        }

        return $this->companys;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM company WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Company')[0];

    }

    public function save($post)
    {


        // TODO: Implement save() method.
        foreach ($post['model']['company'] as $varValue) {
            $company = $this->prepareCompany($varValue);
            return $this->db->save('company', $company);
        }
    }

    public function prepareCompany($post)
    {
        $company = new Company();
        foreach ($company->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($company, $method)) {
                if (!empty($post[$varName])) {
                    $company->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $company->$method($post[$varName]);
                }
            }
        }
        return $company;
    }

    public function bindParams($query, $post)
    {

        $query->bindParam(':companyname', $post['companyname']);
        $query->bindParam(':companyfullname', $post['companyfullname']);
        $query->bindParam(':companyrole', $post['companyrole']);
        $query->bindParam(':companysubrole', $post['companysubrole']);
        $query->bindParam(':companyaddressstreet', $post['companyaddressstreet']);
        $query->bindParam(':companyaddressnr', $post['companyaddressnr']);
        $query->bindParam(':companyaddresscity', $post['companyaddresscity']);
        $query->bindParam(':companytaxnumber', $post['companytaxnumber']);
        $query->bindParam(':companydescription', $post['companydescription']);


        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM company WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
