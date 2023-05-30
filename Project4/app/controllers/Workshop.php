<?php
    class Workshop extends Controller
    {
        public function __construct()
        {

        }

        public function index()
        {
            $this->view("workshop");
        }
    }
?>