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
        $this->db->query("SELECT IMAGE FROM PRODUCTIMAGE WHERE ID = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->fetchAll();
        return $row;
    }

    public function getCategory($id)
    {
        $this->db->query("SELECT CATEGORY, PRICE, QUANTITY FROM PRODUCTCATEGORY WHERE ID = :id");
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

    public function getRatingPoint($id)
    {
        $this->db->query("SELECT SUM(RATING)/COUNT(RATING) AS POINT FROM FEEDBACK WHERE PRODUCTID = :id GROUP BY PRODUCTID");
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();        
        if ($row)
            return $row->POINT;
        return 0;
    }
    
    public function getDealList($type)
    {
        $this->db->query("SELECT ID FROM PRODUCT WHERE TYPE = :type");
        $this->db->bind(':type', $type);
        $idlist = $this->db->fetchAll();
        $i = 0;
        $idWithPoint = array();
        $pointList = array();
        while ($i < count($idlist)){
            array_push($idWithPoint, array($idlist[$i]->ID, $this->getRatingPoint($idlist[$i]->ID)));
            array_push($pointList, $this->getRatingPoint($idlist[$i]->ID));
            $i++;
        }
        rsort($pointList);
        usort($idWithPoint, function ($a, $b) use ($pointList) {
            $pos_a = array_search($a[1], $pointList);
            $pos_b = array_search($b[1], $pointList);
            return $pos_a - $pos_b;
        });
        $id = array();
        $i = 0;
        while ($i < count($idWithPoint)){
            if ($i < 5){
                array_push($id, $idWithPoint[$i][0]);
                $i++;
            }
            else
                break;
        }
        $res = array();
        $i = 0;
        while ($i < count($id)){
            $element = [
                "Id" => $id[$i],
                "Name" => $this->getNameTypeDes($id[$i])->NAME,
                "Price" => $this->getCategory($id[$i])[0]->PRICE,
                "Image" => $this->getImage($id[$i])[0]->IMAGE,
                "Point" => round($this->getRatingPoint($id[$i]), 1)
            ];
            array_push($res, $element);
            $i++;
        }
        return $res;
    }
}