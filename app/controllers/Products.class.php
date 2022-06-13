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
            if ($option == 'food'){
                $data = [
                    "page" => "allproducts",
                    "Type" => 1,
                    "List" => $this->productModel->getProductList(1)
                ];
                $this->render('index', $data);
            }
            else if ($option == 'equipment'){
                $data = [
                    "page" => "allproducts",
                    "Type" => 2,
                    "List" => $this->productModel->getProductList(2)
                ];
                $this->render('index', $data);
            }
            else {
                $res = $this->productModel->getNameTypeDes($option);
                if ($res) {
                    $data = [
                        "Id" => $option,
                        "page" => "productdetail",
                        "Name" => $res->NAME,
                        "Type" => $res->TYPE,
                        "Description" => $res->DESCRIPTION,
                        "Images" => $this->productModel->getImage($option),
                        "Category" => $this->productModel->getCategory($option),
                        "Feedbacks" => $this->productModel->getFeedback($option),
                        "Point" => $this->productModel->getRatingPoint($option),
                        "Price" => $this->productModel->getCategory($option)[0],
                    ];
                    $this->render('index', $data);
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        date_default_timezone_set("Asia/Ho_Chi_Minh");
                        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                        $data = [
                            'userid' => trim($_SESSION['user_id']),
                            'productid' => $option,
                            'timestamp' => date("Y-m-d H:i:s"),
                            'rating' => trim($_POST['rating']),
                            'content' => trim($_POST['content']),
                        ];
                        if($this->productModel->addFeedback($data)){
                            echo "<script>
                            alert('Gửi đánh giá thành công!');
                            window.location.href ='".URL_ROOT."/products/detail/".$option."';
                            </script>";
                        }
                        else {
                            die('Something went wrong');
                        }
                    }
                }
                else 
                    die('Something went wrong');
            }
        }
    }