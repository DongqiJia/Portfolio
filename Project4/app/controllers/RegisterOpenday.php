<?php
    class RegisterOpenday extends Controller
    {

        private $model;

        public function __construct()
        {
            $this->model = $this->model("OpendayRegistration");
        }

        public function index()
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $this->model->create($data);
            }
                else
            {

            }
            $this->view("register_openday/index");
        }
    }
?>