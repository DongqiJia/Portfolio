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

        <!-- Navigation bar -->
        <?php $this->view("partials/navbar"); ?>

        <!-- Content -->
        <section class="workshop__hero">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <img src="./img/wsi.png" alt="">
        </section>
        
        <section class="workshops">
            <div class="event">
                <div class="event__info">
                    <h2>INFORMATIE AVOND VOOR OUDERS</h2>
                    <div class="line"></div>
                    <div class="data">
                        <p>DONDERDAG 20 OKTOBER 2022</p>
                        <p>19:30 TOT 21:00</p>
                    </div>
                    <p>
                        Informatieavond speciaal voor ouders. Onderwerpen die aan bod komen zijn onder andere:
                        Hoe kun je je kind helpen bij het maken van de studiekeuze?
                        <br>
                        MBO onderwijs
                        Begeleiding
                        Niveaus
                        Schoolkosten
                    </p>
                </div>
                <div class="photo__content">
                    <img src="./img/ws1.png" alt="">
                    <div class="circle-4"></div>
                    <button>
                        <a href="">INSCHRIJVEN</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="event">
                <div class="photo__content">
                    <img src="./img/ws2.png" alt="">
                    <div class="circle-5"></div>
                </div>
                <div class="event__info">
                    <h2>OPENDAGEN</h2>
                    <div class="line"></div>
                    <div class="data">                        
                        <p>DONDERDAG 15 NOVEMBER 2022</p>
                        <p>18:00 TOT 20:30</p>
                        <p>DONDERDAG 21 JANUARI 2023</p>
                        <p>10:00 TOT 13:00</p>
                        <p>DONDERDAG 16 MAART 2023</p>
                        <p>18:00 TOT 20:30</p>
                    </div>
                    <p>Je bent van harte welkom op onze Open Dag! Kom sfeer proeven op dinsdag 15 november en kijk of MBO Utrecht bij je past.</p>
                </div>
            </div>
            <div class="event">
                <div class="event__info">
                    <h2>ORIENTATIË WORKSHOPS</h2>
                    <div class="line"></div>
                    <div class="data">
                        <p>DONDERDAG 1 DECEMBER 2022</p>
                        <p>DONDERDAG 16 FEBRUARI 2023</p>
                        <p>DONDERDAG 23 MAART 2023</p>
                    </div>
                    <p>Tijdens een oriëntatieworkshop kun je ervaren hoe het is om bij ons op school te zitten en leer je meer over de verschillende opleidingen bij MBO Utrecht.</p>
                </div>
                <div class="photo__content">
                    <img src="./img/ws3.png" alt="">
                    <div class="circle-6"></div>
                    <button>
                        <a href="">INSCHRIJVEN</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php $this->view("partials/footer"); ?>

        
        <!-- Javascripts -->
        <!-- Icon Javascripts -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>