<?php
require_once APPROOT . '../helpers/session_helper.php';
?>

<?php
class Login extends Controller
{
    private RegisterModel $registerModel;
    public function __construct()
    {
        $this->registerModel = $this->model('RegisterModel');
    }

    public function index()
    {
        $this->view("login");
    }
    /*public function login()
    {
        $this->registerModel->loginRegister();
    }
    */

    public function login()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
            'email' => trim($_POST['email']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];

        if (empty($data['email']) || empty($data['usersPwd'])) {
            flash("login", "Please fill out all inputs");
            header("/login");
        }

        if ($this->registerModel->findUserByEmailOrUsername($data['email'], $data['email'])) {
            //User Found
            $loggedInUser = $this->registerModel->login($data['email'], $data['usersPwd']);
            if ($loggedInUser) {
                //Create session
                $this->createUserSession($loggedInUser);
            } else {
                flash("login", "Password Incorrect");
                redirect("/login");
            }
        } else {
            flash("login", "No email found");
            redirect("/login");
        }
    }


    public function createUserSession($user) {
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
        redirect("/index");
    }

    public function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        session_destroy();
        redirect("/index");
    }
}

