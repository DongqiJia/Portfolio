<?php

class RegisterModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    //Register:
    /*public function createRegister()
    {
        if (empty($_POST["email"] || $_POST["password"])) {
            header("Location: /register");
        } else {
            $this->db->query('INSERT INTO `register` (`firstname`, `lastname`, `email`, `password`, `userrole`, `activated`) VALUES (:firstname, :lastname, :email, :password, :userrole, :activated)');
            $this->db->bind(':firstname', $_POST['firstname']);
            $this->db->bind(':lastname', $_POST['lastname']);
            $this->db->bind(':email', $_POST['email']);
            $this->db->bind(':password', $_POST['password']);
            $this->db->bind(':userrole', 'customer');
            $this->db->bind(':activated', 1);
            $this->db->execute();
            header("Location: /login");
        }
    } */

    public function findUserByEmailOrUsername($email)
    {
        $this->db->query('SELECT * FROM users WHERE usersEmail = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (usersName, usersEmail, usersLastname, usersPwd) 
        VALUES (:name, :email, :Ltn, :password)');
        //Bind values
        $this->db->bind(':name', $data['usersName']);
        $this->db->bind(':email', $data['usersEmail']);
        $this->db->bind(':Ltn', $data['usersLastname']);
        $this->db->bind(':password', $data['usersPwd']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //login:
    /*public function loginRegister()
    {

        if (empty($_POST["email"] || $_POST["password"])) {
            header('Location: /login');
        } else {
            $this->db->query('SELECT * From `register` where `email` = :email');
            $this->db->bind(':email', 'email');
            $this->db->execute();
            
              $_SESSION['userrole']= $this->db->bind(':userrole', 'userrole');
                switch ($_SESSION["userrole"]) {
                    case 'customer':
                        header("Location: /index");
                        break;
                    case 'admin':
                        header("Location: /admin");
                        break;
                    default:
                        header("Location: /index");
                        break;
                }
            
        }
    }
    */

    public function login($nameOrEmail, $password)
    {
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if ($row == false) return false;

        $hashedPassword = $row->usersPwd;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Account formulier laat zien, update, delete
    public function getAccount()
    {
        $this->db->query('SELECT * FROM users');
        $result = $this->db->resultSet();
        return $result;
    }
    public function deleteAccount($id)
    {
        $this->db->query("DELETE FROM users WHERE usersId = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
    public function getSingleAccount($id)
    {
        $this->db->query("SELECT * FROM users WHERE usersId = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }
    public function updateAccount($post)
    {
        $this->db->query("UPDATE `users` 
                         SET usersName = :usersName,
                             usersEmail = :usersEmail,
                             usersLastname = :usersLastname
                         WHERE usersId = :usersId");

        $this->db->bind(':usersName', $post["usersName"], PDO::PARAM_STR);
        $this->db->bind(':usersLastname', $post["usersLastname"], PDO::PARAM_STR);
        $this->db->bind(':usersEmail', $post["usersEmail"], PDO::PARAM_STR);
        $this->db->bind(':usersId', $post["usersId"], PDO::PARAM_INT);
        return $this->db->execute();
    }

    /*
      admin formulier van enquete
    */
    public function getSurvey()
    {
        $this->db->query('SELECT * FROM question');
        $result = $this->db->resultSet();
        return $result;
    }

    public function deleteSurvey($id)
    {
        $this->db->query("DELETE FROM question WHERE Id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
    public function getSingleSurvey($id)
    {
        $this->db->query("SELECT * FROM question WHERE Id = :Id");
        $this->db->bind(':Id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }
    public function updateSurvey1($post)
    {
        $this->db->query("UPDATE `question`
        SET Question = :Question
         WHERE Id = :Id");
        $this->db->bind(':Question', $post["Question"], PDO::PARAM_STR);
        $this->db->bind(':Id', $post["Id"], PDO::PARAM_INT);

        return $this->db->execute();
    }
    public function createSurvey($post)
   {

    if (empty($_POST["Question"] || $_POST["Answer"])) {
        header('Location: /admin/create');
    }
    else {
        $this->db->query("INSERT INTO `question` (`Id`, 
                                               `Question` 
                                               ) 
                        VALUES                (:Id, 
                                               :Question 
                                               )");
      $this->db->bind(':Question', $post["Question"], PDO::PARAM_STR);
      $this->db->bind(':Id', NULL, PDO::PARAM_INT);

      return $this->db->execute();
    }
   }
}
