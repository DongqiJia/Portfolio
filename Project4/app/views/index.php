<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta-tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MBO Utrecht</title>
        <!-- stylesheet links -->
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>

        <!-- Navigation Bar -->
        <?php $this->view("partials/navbar"); ?>

        <!-- Content -->

        <section class="landing__section">
            <div class="intro">
                <div>
                    <h1>KOM DE SFEER PROEVEN EN KIJK OF MBO UTRECHT BIJ JOU PAST</h1>
                    <button>
                        <a href="./about.php">Meer Over MBO Utrecht</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon> 
                    </button>
                </div>
                <div>
                    <div class="circle-1"></div>
                    <div class="circle-2"></div>
                    <div>
                        <img src="./img/group_of_students.png" alt="">
                    </div>
                </div>
            </div>
            <!-- <img src="./img/mbologo.png" alt=""> -->
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