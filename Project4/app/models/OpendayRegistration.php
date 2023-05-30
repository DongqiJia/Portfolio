<?php
    class OpendayRegistration
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function create($data)
        {
            $this->db->query("INSERT INTO `opendayregistration` (`id`, `firstname`, `lastname`, `email`, `phone`) VALUES (NULL, :firstname, :lastname, :email, :phone);");
            $this->db->bind(":firstname", $data["firstname"], PDO::PARAM_STR);
            $this->db->bind(":lastname", $data["lastname"], PDO::PARAM_STR);
            $this->db->bind(":email", $data["email"], PDO::PARAM_STR);
            $this->db->bind(":phone", $data["phone"], PDO::PARAM_STR);

            $this->db->execute();
        }

        public function getAll()
        {
            $this->db->query("SELECT * FROM `opendayregistration`;");
            $result = $this->db->resultSet();
            return $result;
        }
    }
?>