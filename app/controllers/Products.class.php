<?php
    class Products extends Controller
    {
        private $productModel;

        public function __construct()
        {
            $this->productModel = $this->loadModel('Product');
        }

        public function index() {
            header("Location: ".URL_ROOT."/products/detail/food");
        }


        public function detail($option)
        {
            if ($option == 'food')
                $this->render('products/all', []);
            else if ($option == 'equipment')
                $this->render('products/all', []);
            else {
                $res = $this->productModel->getNameTypeDes($option);
                if ($res)
                    $this->render('products/Detail/main', 
                    [
                        "Name" => $res->NAME,
                        "Type" => $res->TYPE,
                        "Description" => $res->DESCRIPTION,
                        "Images" => $this->productModel->getImage($option),
                        "Category" => $this->productModel->getCategory($option),
                        "Feedbacks" => $this->productModel->getFeedback($option),
                        "Point" => $this->productModel->getRatingPoint($option)
                    ]);
                else 
                    die('Something went wrong');
            }
        }

        public function register()
        { 

            $data = [
                'username' => '',
                'email' => '',
                'password' => '',
                'confirmPassword' => '',

            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['confirmPassword']),
                ];

                if($this->userModel->register($data)){
                    header("Location: ".URL_ROOT."/users/login");
                } else {
                    die('Something went wrong');
                }
            }
            $this->render('/users/register', $data);
        }
    }