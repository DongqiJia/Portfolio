<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet css -->
    <link rel="stylesheet" href="../public/scss/main.css">


    <title>MBO Utrecht opendag</title>
</head>

<body>
    <!-- Navigation bar -->
    <?php $this->view("partials/navbar"); ?>

    <!-- Landing image/banner -->
    <section class="contact_landing">
        <div class="intro">
            <div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div>
                    <img src="../../public/img/contactimage.png" alt="">
                </div>
            </div>
        </div>
        <!-- <img src="./img/mbologo.png" alt=""> -->
    </section>
    <section class="cards_section">
        <div class="cards">
            <div class="card-call">
                <div class="title">
                    <ion-icon name="call-outline"></ion-icon>
                    <h2>BEL ONS</h2>
                </div>
                <p>06 - 257 050 51 (WhatsApp)</p>
                <p>030 - 28 15 100</p>
            </div>
            <div class="card-location">
                <div class="title">
                    <ion-icon name="location-outline"></ion-icon>
                    <h2>LOCATIE</h2>
                </div>
                <p>Daltonlaan 300 3584 BK Utrecht</p>
            </div>
            <div class="card-time">
                <div class="title">
                    <ion-icon name="time-outline"></ion-icon>
                    <h2>TIJDEN</h2>
                </div>
                <p>Wij zijn bereikbaar op schooldagen tussen</p>
                <p>8:30 en 17:00</p>
            </div>
        </div>
    </section>

    <!-- Cantact page section -->
    <section class="contact_form">
        <div class="form">
            <h1>Contact Formulier</h1>
            <form action="<?= URLROOT ?>/contact/create" method="post">
                <div class="inputSection">
                    <div>
                        <label for="FirstName">Voornaam</label>
                        <input type="text" name="FirstName" id="FirstName" placeholder="John" required="required">
                    </div>
                    <div>
                        <label for="LastName">Achternaam</label>
                        <input type="text" name="LastName" id="LastName" placeholder="Doe" required="required">
                    </div>
                </div>
                <div class="inputSection">
                    <div>
                        <label for="Email">E-mail</label>
                        <input type="email" name="Email" id="Email" placeholder="JohnDoe@example.com" required="required">
                    </div>
                    <div>
                        <label for="PhoneNumber">Telefoon nummer</label>
                        <input type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="0612345678">
                    </div>
                </div>
                <div class="message">
                    <textarea type="text" name="Message" id="Message" placeholder="Voer hier uw bericht in" required="required"></textarea>
                </div>
                <input type="hidden" name="Id" id="Id">
                <div class="submit">
                    <input type="submit" value="Verzenden">
                </div>
            </form>
        </div>
        <div class="background_contactform">
        <div class="circles">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="circle-4"></div>
            <div class="circle-5"></div>
            <div class="circle-6"></div>
            <div class="circle-7"></div>
        </div>
    </div>
    </section>


    <!-- Footer -->
    <?php $this->view("partials/footer"); ?>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>