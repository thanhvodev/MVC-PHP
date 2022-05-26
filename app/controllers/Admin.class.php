<?php
class Admin extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->loadModel('User');
    }

    // public function index()
    // {
    //     header("Location: " . URL_ROOT . "/admin/users.php");
    // }

    public function users()
    {
        $usersData =  $this->userModel->getAllUsers();
        $data = ["users" => $usersData, "page" => "users"];

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
}