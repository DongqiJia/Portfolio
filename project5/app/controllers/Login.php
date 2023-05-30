<?php 
    class Login extends Controller{
        private UserModel $userModel;
        public function __construct() 
        {
            $this->userModel = $this->model('UserModel');
        }
            
        public function index()
        {
            $this->view("login");
        }
        public function login()
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password'])
            ];

            if($this->userModel->findUserByEmail($data['email'])){
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser)
                {
                   $this->createUserSession($loggedInUser);
                } else {
                    echo '<h2 style= "background-color: red; padding: 20px; text-align: center;">De wachtwoord is niet klopt. Probeer opnieuw schrijven.</h2>';
                    header("Refresh: 2 url=". URLROOT . "/login");
                }
            } else {
                echo '<h2 style= "background-color: red; padding: 20px; text-align: center;">Helaas, Geen email gevonden</h2>';
                header("Refresh: 2 url=". URLROOT . "/login");
            }
        }

        public function createUserSession($user){
            $_SESSION['userid'] = $user->userid;
            $_SESSION['username'] = $user->firstname;
            $_SESSION['useremail'] = $user->email;
            echo '<h2 style = "background-color: lightgreen; padding: 20px; text-align: center;" >Gefeliciteerd, U bent ingelogd.<h2>';
            header("Refresh: 2 url=" . URLROOT . "/user");
        } 

        public function logout(){
            unset($_SESSION['userid']);
            unset($_SESSION['username']);
            unset($_SESSION['useremail']);
            session_destroy();
            header("Location: /index");
        }
    }