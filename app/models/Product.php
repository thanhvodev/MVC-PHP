<?php
class Product
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducts(){
        $this->db->query("SELECT PRODUCT.ID AS ID, NAME, TYPE, IMAGE, PRICE FROM PRODUCT, PRODUCTIMAGE, PRODUCTCATEGORY, FEEDBACK 
        WHERE PRODUCT.ID = PRODUCTIMAGE.ID and PRODUCT.ID = PRODUCTCATEGORY.ID GROUP BY name ORDER BY PRODUCT.ID");
        $row = $this->db->fetchAll();
        $i = 0;
        $res = array();
        $pointList = array();
        while ($i < count($row)){
            $element = [
                "ID" => $row[$i]->ID,
                "Name" => $row[$i]->NAME,
                "Type" => $row[$i]->TYPE,
                "Image" => $row[$i]->IMAGE,
                "Price" => $row[$i]->PRICE,
                "Point" => round($this->getRatingPoint($row[$i]->ID), 1)
            ];
            array_push($pointList, round($this->getRatingPoint($row[$i]->ID), 1));
            array_push($res, $element);
            $i++;
        }
        return $res;
    }

    public function getProductList($type)
    {
        $this->db->query("SELECT PRODUCT.ID AS ID, NAME, IMAGE, PRICE FROM PRODUCT, PRODUCTIMAGE, PRODUCTCATEGORY, FEEDBACK 
        WHERE PRODUCT.ID = PRODUCTIMAGE.ID and PRODUCT.ID = PRODUCTCATEGORY.ID and type = :ptype GROUP BY name ORDER BY PRODUCT.ID");
        $this->db->bind(':ptype', $type);
        $row = $this->db->fetchAll();
        $i = 0;
        $res = array();
        $pointList = array();
        while ($i < count($row)){
            if ($type == 0){
                $type = $row[$i]->TYPE;
            }
            $element = [
                "ID" => $row[$i]->ID,
                "Name" => $row[$i]->NAME,
                "Type" => $type,
                "Image" => $row[$i]->IMAGE,
                "Price" => $row[$i]->PRICE,
                "Point" => round($this->getRatingPoint($row[$i]->ID), 1)
            ];
            array_push($pointList, round($this->getRatingPoint($row[$i]->ID), 1));
            array_push($res, $element);
            $i++;
        }
        rsort($pointList);
        usort($res, function ($a, $b) use ($pointList) {
            $pos_a = array_search($a["Point"], $pointList);
            $pos_b = array_search($b["Point"], $pointList);
            return $pos_a - $pos_b;
        });
        return $res;
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

    public function getAllCategory()
    {
        $this->db->query("SELECT SUM(QUANTITY) AS QUANTITY FROM PRODUCTCATEGORY");
        $row = $this->db->fetch();
        return $row->QUANTITY;
    }

    public function getFeedback($id)
    {
        if ($id == 0){
            $this->db->query("SELECT USERNAME, TIMESTAMP, RATING, CONTENT FROM FEEDBACK JOIN USER ON USERID = USER.ID ORDER BY TIMESTAMP DESC");
        }
        else {
            $this->db->query("SELECT USERNAME, TIMESTAMP, RATING, CONTENT FROM FEEDBACK JOIN USER ON USERID = USER.ID WHERE PRODUCTID = :id ORDER BY TIMESTAMP DESC");
            $this->db->bind(':id', $id);
        }
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

    public function addFeedback($data){
        $this->db->query('INSERT INTO feedback (userid, productid, timestamp, rating, content) VALUES (:userid, :productid, :timestamp, :rating, :content)');
        $this->db->bind(':userid', $data['userid']);
        $this->db->bind(':productid', $data['productid']);
        $this->db->bind(':timestamp', $data['timestamp']);
        $this->db->bind(':rating', $data['rating']);
        $this->db->bind(':content', $data['content']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}