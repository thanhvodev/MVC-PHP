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

        public function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function login()
        {
            $data = [
                'title' => 'Login page',
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => '',
                'page' => 'login',
                'error' => ''
            ];

            // Vérifie si méthode POST est utilisé
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'page' => 'login',
                    'error' => 'Sai tài khoản hoặc mật khẩu, vui lòng kiểm tra lại!'
                ];

                $loggedInUser = @$this->userModel->login($data['email'], $data['password']);

                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                } else {
                    // $this->render('/users/login', $data);
                    $this->render('index', $data);
                }
            } else {
                $data = [
                    'username' => '',
                    'password' => '',
                    'page' => 'login',
                    'error' => ''

                ];
            }
            $this->render('index', $data);
        }

        public function register()
        { 
            $usernameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
            $username = $email = $password = $confirmPassword = "";
            if (empty($_POST["username"])) {
                $usernameErr = "Name is required";
            } else {
                $username = $this->test_input($_POST["username"]);
            }

            if (empty($_POST["email"])) {
                $usernameErr = "Email is required";
            } else {
                $username =  $this->test_input($_POST["email"]);
            }

            if (empty($_POST["password"])) {
                $usernameErr = "password is required";
            } else {
                $username =  $this->test_input($_POST["password"]);
            }

            if (empty($_POST["confirmPassword"])) {
                $usernameErr = "Name is required";
            } else {
                $username =  $this->test_input($_POST["confirmPassword"]);
            }
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'confirmPassword' => $confirmPassword,
                'usernameErr' => $usernameErr,
                'emailErr' => $emailErr,
                'passwordErr' => $passwordErr,
                'confirmPasswordErr' => $confirmPasswordErr,
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // $data = [
                //     'username' => trim($_POST['username']),
                //     'email' => trim($_POST['email']),
                //     'password' => trim($_POST['password']),
                //     'confirmPassword' => trim($_POST['confirmPassword']),
                // ];


                $data = [
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['confirmPassword']),
                    'page' => 'register',
                ];
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($username != "" && $email != "" && $password != "" && $confirmPassword != "") {
                    if($this->userModel->register($data)){
                        header("Location: ".URL_ROOT."/users/login");
                    } else {
                        die('Something went wrong');
                    }
                }

            }
            // $this->render('/users/register', $data);
            $this->render('index', $data);

        }

        public function seeOrders() {
            $ordersData =  $this->userModel->getOrders($_SESSION['user_id']);
            
            $data = [
                'page' => 'orders',
                'cssFile' => 'orders',
                'ordersData' => $ordersData
            ];
            $this->render('index', $data);
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
            header('Location: '.URL_ROOT.'/index');
        }

        public function updateData() {

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
                $_SESSION['username'] =trim($_POST['username']);
                $_SESSION['email'] = trim($_POST['email']);
                $_SESSION['phonenum'] = trim($_POST['phonenum']);
                $_SESSION['address'] = trim($_POST['address']);
                
                if($this->userModel->updateData($data)){
                    header("Location: ".URL_ROOT."/users/profile");
                } else {
                    die('Something went wrong');
                }
            }

            // $this->render('/users/profile',  $data);
        }

        public function updatePassword() {

            $data = [
                'password' => '',
                'newpass' => '',
                'confirmpassword' => '',
            ];


            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    
                $data = [
                    'password' => trim($_POST['password']),
                    'newpass' => trim($_POST['newpass']),
                    'confirmpassword' => trim($_POST['confirmpassword']),
                ];
                if ( $data['newpass'] == $data['confirmpassword'] && password_verify($data['password'], $_SESSION['password'])) 
                {
                    $data['password'] = password_hash($data['newpass'], PASSWORD_DEFAULT);
                    if($this->userModel->updatePassword($data)){
                        $_SESSION['password'] = $data['password'];
                        header("Location: ".URL_ROOT."/users/profile");
                    } else {
                        die('Something went wrong');
                    }
                }
            }

            // header("Location: ".URL_ROOT."/users/profile");
        }


        public function profile() {
            $this->render('index',  ['page'=>'profile']);
        }

        public function uploadImage() {
            $target_dir = $_SERVER["DOCUMENT_ROOT"]. "/uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              if($check !== false) {
                $uploadOk = 1;
              } else {
                $uploadOk = 0;
              }
            }
            
            // Check if file already exists
            if (file_exists($target_file)) {
              echo "Sorry, file already exists.";
              $uploadOk = 0;
            }
            
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $_SESSION['image'] = basename( $_FILES["fileToUpload"]["name"]);
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                $data = [
                    'image' => $_SESSION['image'],
                ];
    
                if($this->userModel->updateProfilePic($data)){
                    header("Location: ".URL_ROOT."/users/profile");
                } else {
                    die('Something went wrong');
                }                
              } else {
                echo "Sorry, there was an error uploading your file.";
              }
            }        
        }
        

        public function updateProfilePic() {

            $data = [
                'image' => $_SESSION['image'],
            ];

            if($this->userModel->updateProfilePic($data)){
                header("Location: ".URL_ROOT."/users/profile");
            } else {
                die('Something went wrong');
            }

            // $this->render('/users/profile',  $data);
        }
    }