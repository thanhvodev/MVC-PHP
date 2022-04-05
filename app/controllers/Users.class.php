<?php
    class Users extends Controller
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = $this->loadModel('User');
        }

        public function index() {
            header("Location: ".URL_ROOT."/users/login");
        }


        public function login()
        {
            $data = [
                'title' => 'Login page',
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];

            // Vérifie si méthode POST est utilisé
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                ];

                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                } else {
                    $this->render('/users/login', $data);
                }
            } else {
                $data = [
                    'username' => '',
                    'password' => '',
                ];
            }
            $this->render('users/login', $data);
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
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    header("Location: ".URL_ROOT."/users/login");
                } else {
                    die('Something went wrong');
                }
            }
            $this->render('/users/register', $data);
        }

        public function createUserSession($loggedInUser)
        {
            $_SESSION['user_id'] = $loggedInUser->ID;
            $_SESSION['username'] = $loggedInUser->USERNAME;
            $_SESSION['email'] = $loggedInUser->EMAIL;
            $_SESSION['password'] = $loggedInUser->PASSWORD;
            $_SESSION['phonenum'] = $loggedInUser->PHONENUM;
            $_SESSION['image'] = $loggedInUser->IMAGE;
            $_SESSION['address'] = $loggedInUser->ADDRESS;
            $_SESSION['permission'] = $loggedInUser->PERMISSION;
            header('Location: '.URL_ROOT.'/index');
        }

        public function logout()
        {
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            unset($_SESSION['phonenum']);
            unset($_SESSION['image']);
            unset($_SESSION['address']);
            unset($_SESSION['permission']);
            header('Location: '.URL_ROOT.'/users/login');
        }

        public function profile() {

            $data = [
                'username' => '',
                'email' => '',
                'image' => '',
                'phonenum' => '',
                'address' => '',
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'image' => trim($_POST['image']),
                    'phonenum' => trim($_POST['phonenum']),
                    'address' => trim($_POST['address']),
                ];
                if($this->userModel->updateData($data)){
                    header("Location: ".URL_ROOT."/users/profile");
                } else {
                    die('Something went wrong');
                }
            }

            $this->render('/users/profile',  $data);
        }
    }