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
}