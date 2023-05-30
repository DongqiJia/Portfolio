<?php
    class Course extends Controller
    {
        public function __construct()
        {

        }

        public function index()
        {
            $this->view("course");
        }
    }
?>