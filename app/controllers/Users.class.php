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

            // $dbcon=mysqli_connect("localhost","root","");  
            // mysqli_select_db($dbcon,"gymnasium");  
            // if(isset($_POST['register']))  
            // {  
            //     $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
            //     $user_pass=$_POST['pass'];//same  
            //     $user_email=$_POST['email'];//same  
              
              
            //     if($user_name=='')  
            //     {  
            //         //javascript use for input checking  
            //     }  
              
            //     if($user_pass=='')  
            //     {  
            //     }  
              
            //     if($user_email=='')  
            //     {  
            //     }  
            // //here query check weather if user already registered so can't register again.  
            //     $check_email_query="select * from user WHERE EMAIL='$user_email'";  
            //     $run_query=mysqli_query($dbcon,$check_email_query);  
              
            //     if(mysqli_num_rows($run_query)>0)  
            //     {  
            //       echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
            //       exit();  
            //     }  
            // //insert the user into the database.  
            //     $insert_user="insert into user (USERNAME, PASSWORD, EMAIL) VALUE ('$user_name','$user_pass','$user_email')";  
            //     if(mysqli_query($dbcon,$insert_user))  
            //     {  
            //         echo"<script>window.open('welcome.php','_self')</script>";  
            //     }  
            //     } 
        }

        public function createUserSession($loggedInUser)
        {
            $_SESSION['user_id'] = $loggedInUser->user_id;
            $_SESSION['username'] = $loggedInUser->username;
            $_SESSION['email'] = $loggedInUser->email;
            header('Location: '.URL_ROOT.'/index');
        }

        public function logout()
        {
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            header('Location: '.URL_ROOT.'/users/login');
        }
    }