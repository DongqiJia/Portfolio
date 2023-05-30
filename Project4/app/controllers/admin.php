<?php
    class Admin extends Controller
    {
        private RegisterModel $registerModel;
        public function __construct()
        {
            $this->registerModel = $this->model('RegisterModel');
        }

        public function index()
        {  
            
                $this->view('admin/dashboard');

            
        }

        /**
         * Account
         */
        public function account()
        {
            $records = $this->registerModel->getAccount();
            $rows = '';
            foreach($records as $value)
            {
                $rows .= "<tr>
                      <td>$value->usersId</td>
                      <td>$value->usersName</td>
                      <td>$value->usersEmail</td>
                      <td>$value->usersLastname</td>
                      <td><a href='" . URLROOT . "/admin/update/$value->usersId'>update</a></td>
                      <td><a href='" . URLROOT . "/admin/delete/$value->usersId'>delete</a></td>
                    </tr>";
            }

            $data = [
                'title' => "Account formulier",
                'rows' =>$rows
            ];
            $this->view('admin/account', $data);

        }



        public function delete($id) {
            $this->registerModel->deleteAccount($id);

            $data = [
                'deleteStatus' => "<h1>Het record met id = $id is verwijdert"
            ];
            $this->view("admin/delete", $data);
            header("Refresh:2; url=" . URLROOT . "/admin/account");
        }

        public function update($id=null){
           if ($_SERVER["REQUEST_METHOD"] == "POST")
           {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->registerModel->updateAccount($_POST);
            header("Location: " . URLROOT . "/admin/account");
           } else {
            $row = $this->registerModel->getSingleAccount($id);
            $data = [
               'title'=> '<h1>Update Account</h1>',
               'row' => $row
            ];
            $this->view("admin/update", $data);
           }
        }

        /**
         * survey
         */

        public function survey()
        {

            $records = $this->registerModel->getSurvey();
            $rows = '';
            foreach($records as $value)
            {
                $rows .= "<tr>
                      <td>$value->Id</td>
                      <td>$value->Question</td>
                      <td><a href='" . URLROOT . "/admin/updatesurvey/$value->Id'>update</a></td>
                      <td><a href='" . URLROOT . "/admin/deletesurvey/$value->Id'>delete</a></td>
                    </tr>";
            }

            $data = [
                'title' => "Survey formulier",
                'rows' =>$rows
            ];
            $this->view('admin/survey', $data);
        }
        public function deleteSurvey($id)
        {
            $this->registerModel->deleteSurvey($id);

            $data = [
                'deleteStatus' => "<h1>Het record met id = $id is verwijdert"
            ];
            $this->view("admin/deletesurvey", $data);
            header("Refresh:2; url=" . URLROOT . "/admin/survey");
        }
        public function updateSurvey($id=null )
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
             $this->registerModel->updateSurvey1($_POST);
             header("Location: " . URLROOT . "/admin/survey");
            } else {
             $row = $this->registerModel->getSingleSurvey($id);
             $data = [
                'title'=> '<h1>Update Survey</h1>',
                'row' => $row
             ];
             $this->view("admin/updatesurvey", $data);
            }
        }

        public function create()
        {
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
            $this->registerModel->createSurvey($_POST);
  
            header("Location:" . URLROOT . "/admin/survey");
         } else{
            
         $data = [
           'title' => "Voeg een nieuw survey in"
         ];
  
         $this->view("admin/createsurvey", $data);
        }
        }


    }
?>