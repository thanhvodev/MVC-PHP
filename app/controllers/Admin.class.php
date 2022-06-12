<?php
class Admin extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->loadModel('User');
        $this->productModel = $this->loadModel('Product');
    }

     public function index()
    {
         header("Location: " . URL_ROOT . "/index.php");
    }

    public function users()
    {
        $usersData =  $this->userModel->getAllUsers();
        $noOfBanned = $this->userModel->getNoOfBanned();
        $data = ["users" => $usersData, "page" => "users", "noOfBanned"=>$noOfBanned];

        $this->render('admin/index', $data);
    }

    public function deleteUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $this->userModel->deleteUser($id);
            $data = ["page" => "delete_user", "error" => "Xóa tài khoản với id: $id thành công"];

            $this->render('admin/index', $data);
        }
    }

    public function ban_user()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];

            $this->userModel->ban_user($id);
            $data = ["page" => "ban_user", "error" => "Cấm tài khoản với id: $id thành công"];

            $this->render('admin/index', $data);
        }
    }

    public function unban_user()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];

            $this->userModel->unban_user($id);
            $data = ["page" => "unban_user", "error" => "Hủy cấm tài khoản với id: $id thành công"];

            $this->render('admin/index', $data);
        }
    }

    public function update_user()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $phone_no = $_POST['phone_no'] ? $_POST['phone_no'] : null;
            $address = isset($_POST['address']) ? $_POST['address'] : null;
            $this->userModel->update_user($id, $phone_no, $address);
            $data = ["page" => "message", "error" => "Cập nhật tài khoản với id: $id thành công"];

            $this->render('admin/index', $data);
        }
    }

    public function products($id){
        if (is_numeric($id)){
            if ($this->productModel->getNameTypeDes($id)){
                $row = $this->productModel->getNameTypeDes($id);
                $name = $row->NAME;
                $des = $row->DESCRIPTION;
                $img = $this->productModel->getImage($id);
                $cate = $this->productModel->getCategory($id);
                $data = [
                    "id" => $id,
                    "name" => $name,
                    "des" => $des,
                    "img" => $img,
                    "cate" => $cate,
                    "page" => "products"
                ];
                $this->render('admin/index', $data);
            }
            else {
                die('Something went wrong');
            }
        }
        $productsData =  $this->productModel->getAllProducts();
        $fb =  $this->productModel->getFeedback(0);
        $catenum = $this->productModel->getAllCategory();
        $data = ["products" => $productsData, "page" => "products", "feedbacks" => $fb, "nums" => $catenum];
        $this->render('admin/index', $data);
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => trim($_POST['product_id'])
            ];
            if($this->productModel->deleteProduct($data)){
                echo "<script>
                    alert('Xóa sản phẩm thành công!', 'warning');
                    window.setTimeout(function() {
                        window.location.href ='".URL_ROOT."/admin/products/all';
                    }, 1500);
                </script>";
            }
            else {
                die('Something went wrong');
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'type' => trim($_POST['type']),
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'image' => trim($_POST['image']),
                'cate' => trim($_POST['cate1']),
                'price' => trim($_POST['price1']),
                'quantity' => trim($_POST['quantity1'])
            ];
            if($this->productModel->addProduct($data)){
                echo "<script>
                    alert('Thêm sản phẩm thành công!', 'warning');
                    window.setTimeout(function() {
                        window.location.href ='".URL_ROOT."/admin/products/all';
                    }, 1500);
                </script>";
            }
            else {
                die('Something went wrong');
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => trim($_POST['product_id']),
                'name' => trim($_POST['name']),
                'des' => trim($_POST['description']),
                'image' => trim($_POST['image']),
                'old_image' => trim($_POST['old_image']),
                'cate' => trim($_POST['cate1']),
                'price' => trim($_POST['price1']),
                'quantity' => trim($_POST['quantity1']),
                'cateid' => trim($_POST['cateid'])
            ];
            if($this->productModel->editProduct($data)){
                echo "<script>
                    alert('Chỉnh sửa sản phẩm thành công!', 'warning');
                    window.setTimeout(function() {
                        window.location.href ='".URL_ROOT."/admin/products/all';
                    }, 1500);
                </script>";
            }
            else {
                die('Something went wrong');
            }
        }
    }

    public function feedbacks($id){
        $feedback =  $this->productModel->getFeedback($id);
        $name = $this->productModel->getNameTypeDes($id)->NAME;
        $img = $this->productModel->getImage($id)[0]->IMAGE;
        $data = ["feedback" => $feedback, "page" => "products", "name" => $name, "img" => $img];
        $this->render('admin/index', $data);
    }
}