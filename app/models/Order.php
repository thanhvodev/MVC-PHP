<?php

class Order {
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // $userid, $username, $time, $address, $payment_method

    public function createOrderBill($userid, $username, $time, $address, $payment_method, $orderItems) {
        $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = 'SELECT COUNT(ID) AS COUNT FROM ORDERBILL';
        $result = $connect->query($sql);
        $countID = mysqli_fetch_assoc($result)['COUNT'] + 1;
        
        $sql = "INSERT INTO ORDERBILL VALUES (".$countID.", ".$userid.", '".$username."', '".$time."', '".$address."', ".$payment_method.")";
        $connect->query($sql);

        foreach($orderItems as $order) {
            $sql = "INSERT INTO ORDERITEM (`USERID`, `ORDERID`, `PRODUCTID`, `USERNAME`, `QUANTITY`) VALUES (".$userid.", ".$countID.", ".$order['Id'].", '".$username."', ".$order['QTY'].")";
            $connect->query($sql);
        }

        return True;
    }
}