<?php

require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';

class Order {
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createOrderBill($userid, $username, $time, $address, $payment_method, $orderItems) {

        return True;
    }

    public function createOrders($userid, $time, $orderItems)
    {   $products = '';
        $sum = 0;
        $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        foreach($orderItems as $order) {
            $products = $products . $order['Name'] . ' x ' . $order['QTY'] . ', ';
            $sum += $order['Price']*$order['QTY'];
        }
        $time = date('Y-m-d');
        $products = substr($products, 0, -2);
        $sum = currency_format($sum);
        $sql = 'INSERT INTO `orders`(`USERID`, `PRODUCT_NAMES`, `STATUS_O`, `TOTAL`, `CREATED`) VALUES ("'. $userid .'", "'. $products .'", "Success", "'.$sum.'", "'.$time.'")';
        $connect->query($sql);
    }

    public function getUserInfo($id) {
        $this->db->query("SELECT * FROM user WHERE ID = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }
}