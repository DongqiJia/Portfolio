<?php
class User extends Controller
{
    private UserModel $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        $this->view("user/index");
    }
    // Hier is een controller reservation koppelt naar view user/reservationoverzicht
    public function reservationOverzicht()
    {
        $result = $this->userModel->getReservation();
        if (sizeof($result) == 0) {
            $rows = '';
            $foutmelding = '<h5 style = "text-align: center; font-size: 35px; color: red;">Je hebt geen reservering aangemaakt</h5>';
        } else {
            $rows = '';
            $foutmelding = '';
            foreach ($result as $Reservation) {
                $rows .= " <tr>
            <td style='border: 1px solid black;'>$Reservation->firstName</td>
            <td style='border: 1px solid black;'>$Reservation->day</td>
            <td style='border: 1px solid black;'>$Reservation->timeFrom</td>
            <td style='border: 1px solid black;'>$Reservation->chairs</td>
            <td style='border: 1px solid black;'>$Reservation->childChairs</td>
            <td style='border: 1px solid black;'><a href='" . URLROOT . "/user/delete/$Reservation->id'>delete</a></td>
             </tr>
            ";
            }
        }

        $data = [
            'title' => "Mijn Reservation",
            'rows' => $rows,
            'Foutmelding' => $foutmelding
        ];
        $this->view("user/reservationoverzicht", $data);
    }
    // De delet functie aanmaken
    public function delete($id)
    {
        $this->userModel->delete($id);

        $data = [
            'deleteStatus' => "Top, Jouw reservering is verwijderd!"
        ];
        $this->view("user/deletereservation", $data);
        header("Refresh: 2; url=" . URLROOT . "/user/reservationoverzicht");
    }
}
