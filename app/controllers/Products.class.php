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
                // $this->render('products/All/main', 
                // ["Type" => 1, 
                // "List" => $this->productModel->getProductList(1)]);
                $data = [
                    "page" => "allproducts",
                    "Type" => 1,
                    "List" => $this->productModel->getProductList(1)
                ];
                $this->render('index', $data);
            }
            else if ($option == 'equipment'){
                // $this->render('products/All/main', 
                // ["Type" => 2, 
                // "List" => $this->productModel->getProductList(2)]);
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
                        "page" => "productdetail",
                        "Name" => $res->NAME,
                        "Type" => $res->TYPE,
                        "Description" => $res->DESCRIPTION,
                        "Images" => $this->productModel->getImage($option),
                        "Category" => $this->productModel->getCategory($option),
                        "Feedbacks" => $this->productModel->getFeedback($option),
                        "Point" => $this->productModel->getRatingPoint($option)
                    ];
                    $this->render('index', $data);
                }
                else 
                    die('Something went wrong');
                // if ($res)
                //     $this->render('products/Detail/main', 
                //     [
                //         "Name" => $res->NAME,
                //         "Type" => $res->TYPE,
                //         "Description" => $res->DESCRIPTION,
                //         "Images" => $this->productModel->getImage($option),
                //         "Category" => $this->productModel->getCategory($option),
                //         "Feedbacks" => $this->productModel->getFeedback($option),
                //         "Point" => $this->productModel->getRatingPoint($option)
                //     ]);
                // else 
                //     die('Something went wrong');
            }
        }
    }