<?php
require_once APPROOT . '../helpers/session_helper.php';
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta-tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MBO Utrecht</title>
        <!-- stylesheet links -->
        <link rel="stylesheet" href="/public/scss/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation bar -->
        <?php $this->view("partials/navbar"); ?>
        <!-- Content -->
        
        <section class="register__form">
            <div class="container">
                <form class="form" action= "<?= URLROOT?>/Register/register" method="POST">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="input__forms">
                        <div>
                        <?php flash('register') ?>
                            <div>
                                <label for="usersName">Voornaam: </label>
                            </div>
                            <input type="text" name="usersName">
                            <div>                        
                                <label for="usersLastname">Achternaam: </label>
                            </div>
                            <input type="text" name="usersLastname">
                        </div>
                        <div>
                            <div>
                                <label for="usersEmail">Email: </label>
                            </div>
                            <input type="text" name="usersEmail">
                            <div>                        
                                <label for="usersPwd">Wachtwoord: </label>
                            </div>
                            <input type="text" name="usersPwd">
                        </div>
                    </div>
                    <div class="submit__btn">
                        <button type="submit">
                            Registreren
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </div>
                </form>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="circle-3"></div>
            </div>
        </section>
        <!-- Footer -->
        <?php $this->view("partials/footer"); ?>
        <!-- Javascripts -->
        <script src="./js/script.js"></script>
        <!-- Icon Javascripts -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>