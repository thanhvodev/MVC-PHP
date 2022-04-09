<?php
class Product
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProductList($type)
    {
        $this->db->query("SELECT name, image, price FROM PRODUCT, PRODUCTIMAGE, PRODUCTCATEGORY WHERE PRODUCT.ID = PRODUCTIMAGE.ID 
        and PRODUCT.ID = PRODUCTCATEGORY.ID and type = :ptype GROUP BY name");
        $this->db->bind(':ptype', $type);
        $json_array = array();
        while($row = $this->db->fetch()) {
            $json_array[] = $row;
        }
        echo json_encode($json_array);
    }

    public function getNameTypeDes($id)
    {
        $this->db->query('SELECT * FROM PRODUCT WHERE ID = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }

    public function getImage($id)
    {
        $this->db->query("SELECT image FROM PRODUCTIMAGE WHERE ID = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->fetchAll();
        return $row;
    }

    public function getCategory($id)
    {
        $this->db->query("SELECT category, price, quantity FROM PRODUCTCATEGORY WHERE ID = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->fetchAll();
        return $row;
    }

    public function getFeedback($id)
    {
        $this->db->query("SELECT USERNAME, TIMESTAMP, RATING, CONTENT FROM FEEDBACK WHERE PRODUCTID = :id ORDER BY TIMESTAMP DESC");
        $this->db->bind(':id', $id);
        $row = $this->db->fetchAll();
        return $row;
    }
}