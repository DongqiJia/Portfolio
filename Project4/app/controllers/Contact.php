<?php
class Contact extends Controller
{
    private ContactModel $contactModel;

    public function __construct()
    {
        $this->contactModel = $this->model('ContactModel');
    }

    public function index()
    {
        $this->view("contact");
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $_POST = FILTER_INPUT_ARRAY(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $this->contactModel->createContactFormRow($_POST);

                header("Location:" . URLROOT . "/contact");
            } catch (PDOException $e) {
                echo "<style>div {display: flex; justify-content: center; align-items: center;}</style><div><h1>Het Versturen van het formulier is niet gelukt. Check of de ingevulde gegevens kloppen</h1></div>";
                header("Refresh:3; url=" . URLROOT . "/contact");
            }
        }
    }
}

