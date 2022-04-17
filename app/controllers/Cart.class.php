<?php
    class Cart extends Controller {
        private $carts;
        public function __construct()
        {
            $this->carts = array();
        }

        public function index() {
            header("Location: ".URL_ROOT."/cart/cartpage");
        }

        public function addcart() {
            $data = [
                'cart' => array(),
                'page' => 'cart'
            ];

            if (isset($_POST['addcart'])) {
                $Id = $_POST['Id'];
                $Name = $_POST['Name'];
                $Price = $_POST['Price'];
                $Image = $_POST['Image'];
                $Point = $_POST['Point'];

                $Product = [$Id, $Name, $Price, $Image, $Point];

                $this->carts.array_push($Product);
                
                $this->createSession($this->carts);

                $data = [
                    'cart' => $this->carts,
                    'page' => 'cart'
                ];

                
            }

            $this->render('/cart/cartpage', $data);
        }

        function createSession($cart) {
            $_SESSION['cart'] = $cart;
            header('Location: '.URL_ROOT.'/index');
        }

    }
?>