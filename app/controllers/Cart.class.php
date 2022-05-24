<?php
class Cart extends Controller
{
    private $carts;
    public function __construct()
    {
        // $this->carts = array();
    }

    public function index()
    {
        header("Location: " . URL_ROOT . "/cart/shoppingcart");
    }

    public function shoppingcart()
    {
        $data = [
            'cart' => [],
            'page' => 'shoppingcart'
        ];

        if (isset($_SESSION['cart'])) {
            $data = [
                'cart' => $_SESSION['cart'],
                'page' => 'shoppingcart'
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addcart'])) {
            $Id = $_POST['Id'];
            $Name = $_POST['Name'];
            $Price = $_POST['Price'];
            $Image = $_POST['Image'];
            $Point = $_POST['Point'];
            $Product = ['Id' => $Id, 'Name' => $Name, 'Price' => $Price, 'Image' => $Image, 'Point' => $Point, 'QTY' => $QTY = 1];
            $this->addToSession($Product);
            $data = [
                'cart' => $_SESSION['cart'],
                'page' => 'shoppingcart'
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteFromCart'])) {
            $Id = $_POST['Id'];
            $this->deleteFromSession($Id);
            $data = [
                'cart' => $_SESSION['cart'],
                'page' => 'shoppingcart'
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addToCartById'])) {
            $Id = $_POST['Id'];
            $this->addToSessionById($Id);
            $data = [
                'cart' => $_SESSION['cart'],
                'page' => 'shoppingcart'
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reduceToCartById'])) {
            $Id = $_POST['Id'];
            $this->reduceToSessionById($Id);
            $data = [
                'cart' => $_SESSION['cart'],
                'page' => 'shoppingcart'
            ];
        }

        $this->render('index', $data);
    }

    function addToSessionById($Id) {
        if (isset($_SESSION['cart'])) {
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i]['Id'] == $Id) {
                    $_SESSION['cart'][$i]['QTY']++;
                    break;
                }
            }
        }
    }

    function reduceToSessionById($Id) {
        if (isset($_SESSION['cart'])) {
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i]['Id'] == $Id) {
                    if ($_SESSION['cart'][$i]['QTY'] == 1) {
                        $this->deleteFromSession($Id);
                    } else {
                        $_SESSION['cart'][$i]['QTY']--;
                    }
                    break;
                }
            }
        }
    }

    function deleteFromSession($Id) {
        if (count($_SESSION['cart']) == 0) {
            return;
        } else {
            $index = -1;
            $newSession = [];
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i]['Id'] == $Id) {
                    continue;
                } else {
                    $newSession[] = $_SESSION['cart'][$i];
                }
            }

            $_SESSION['cart'] = $newSession;
            unset($newSession);
        }
        header('Location: ' . URL_ROOT . '/cart/shoppingcart');
    }

    function addToSession($Product)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
            $_SESSION['cart'][] = $Product;
            return;
        }

        if (isset($_SESSION['cart'])) {
            $isContain = false;
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i]['Id'] == $Product['Id']) {
                    $_SESSION['cart'][$i]['QTY']++;
                    $isContain = true;
                    break;
                }
            }
        }

        if (!$isContain) {
            $_SESSION['cart'][] = $Product;
        }
        header('Location: ' . URL_ROOT . '/cart/shoppingcart');
    }


}