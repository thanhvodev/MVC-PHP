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

    public function products(){
        $productsData =  $this->productModel->getProductList(0);
        $fb =  $this->productModel->getFeedback(0);
        $catenum = $this->productModel->getAllCategory();
        $data = ["products" => $productsData, "page" => "products", "feedbacks" => $fb, "nums" => $catenum];

        $this->render('admin/index', $data);
    }
}