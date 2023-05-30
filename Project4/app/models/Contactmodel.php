<?php

class ContactModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createContactFormRow($post)
    {
        // var_dump($post);
        // exit();
        $this->db->query('INSERT INTO `contactform` (Id, FirstName, LastName, Email, PhoneNumber, Message) 
                            VALUES (:id, :firstname, :lastname, :email, :phonenumber, :message)');

        $this->db->bind(':id', $post["Id"], PDO::PARAM_INT);
        $this->db->bind(':firstname', $post['FirstName'], PDO::PARAM_STR);
        $this->db->bind(':lastname', $post['LastName'], PDO::PARAM_STR);
        $this->db->bind(':email', $post['Email'], PDO::PARAM_STR);
        $this->db->bind(':phonenumber', $post['PhoneNumber'], PDO::PARAM_STR);
        $this->db->bind(':message', $post['Message'], PDO::PARAM_STR);
        return $this->db->execute();

        // header('Location: ../views/contact');
    }
}
