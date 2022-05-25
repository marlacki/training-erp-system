<?php

class ProductModel implements ModelInterface
{
    private $db;
    private $products;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        if (!isset($this->products)) {
            $this->products = $this->db->getDb()->query("SELECT * FROM products")->fetchAll(PDO::FETCH_CLASS, 'Product');
        }

        return $this->products;
    }

    public function getOneById($id)
    {
        // TODO: Implement getOneById() method.
        if (!$id) {
            return false;
        }

        $query = $this->db->getDb()->prepare("SELECT * FROM products WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Product')[0];

    }

    public function save($post)
    {
        foreach ($post['model']['products'] as $varValue) {
            $product = $this->prepareProduct($varValue);
            $this->db->save('products', $product);
        }

    }

    public function prepareProduct($post)
    {
        $product = new Product();
        foreach ($product->getObjectVars() as $varName => $varValue) {
            $method = 'set' . ucfirst($varName);
            if (method_exists($product, $method)) {
                if (!empty($post[$varName])) {
                    $product->$method($post[$varName]);
                } else {
                    $post[$varName] = "";
                    $product->$method($post[$varName]);
                }
            }
        }
        return $product;
    }

    public function delete($id)
    {
        $query = $this->db->getDb()->prepare("DELETE FROM products WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function checkIfExactProductExists($post)
    {

    }


    public function bindParams($query, $post)
    {
        $query->bindParam(':productid', $post['productid']);
        $query->bindParam(':productname', $post['productname']);
        $query->bindParam(':productamount', $post['productamount']);
        $query->bindParam(':productcolour', $post['productcolour']);
        $query->bindParam(':productmount', $post['productmount']);
        $query->bindParam(':productsize', $post['productsize']);
        $query->bindParam(':productnotes', $post['productnotes']);
        $query->bindParam(':orderida', $post['orderida']);
        $query->bindParam(':orderida', $post['orderidb']);
        $query->bindParam(':productversion', $post['productversion']);
        $query->bindParam(':productstatus', $post['productstatus']);
        return $query;
    }

    public function getMatchingOrders($orderida, $orderidb)
    {

        $this->products = $this->db->getDb()->query("SELECT * FROM products WHERE orderida='$orderida' AND orderidb='$orderidb'")->fetchAll(PDO::FETCH_CLASS, 'Product');


        return $this->products;
    }

    public function updateStatus($orderida, $orderidb)
    {

        $this->products = $this->db->getDb()->query("SELECT * FROM products WHERE orderida='$orderida' AND orderidb='$orderidb'")->fetchAll(PDO::FETCH_CLASS, 'Product');


        return $this->products;
    }
}