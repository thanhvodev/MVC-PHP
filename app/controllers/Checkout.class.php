<?php
class Checkout extends Controller
{   
    private $orderModel;
    public function __construct()
    {
        $this->orderModel = $this->loadModel('Order');
    }

    public function index()
    {
        header("Location: " . URL_ROOT . "/checkout/checkout");
    }

    public function checkout()
    {
        $address = [
            'fullname' => "",
            'phone' => "",
            'province' => "",
            'district' => "",
            'commune' => "",
            'toolsaddress' => "",
            'issetaddress' => False,
        ];

        $data = [
            'order' => $_SESSION['cart'],
            'address' => $address,
            'orderbill' => NULL,
            'page' => 'checkout'
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addaddress'])) {
            $address = [
                'fullname' => $_POST['fullname'],
                'phone' => $_POST['phone'],
                'province' => $_POST['province'],
                'district' => $_POST['district'],
                'commune' => $_POST['commune'],
                'toolsaddress' => $_POST['toolsaddress'],
                'issetaddress' => True,
            ];

            $data = [
                'order' => $_SESSION['cart'],
                'address' => $address,
                'orderbill' => NULL,
                'page' => 'checkout'
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['createOrderBill'])) {
            $userid = $_SESSION['user_id'];
            $username = $_SESSION['username'];
            $time = date('Y-m-d h-i-s');
            $addressStr = $address['fullname'] . "- SĐT: " . $address['phone'] . "-" . $address['toolsaddress'] . "-" . $address['commune'] . "-" . $address['district'] . "-" . $address['province']; 
            $payment_method = 1;
            $orderItems = $_SESSION['cart'];
            $orderBill = @$this->orderModel->createOrderBill($userid, $username, $time, $addressStr, $payment_method, $orderItems);
            @$this->orderModel->createOrders($userid, $time, $orderItems);
            if ($orderBill) {
                $_SESSION['cart'] = [];
                header("Location: " . URL_ROOT . "/index");
            }
        }

        $this->render('index', $data);
    }

    public function checkoutsuccess() {

    }
}
