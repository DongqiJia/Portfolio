
<header>
        <nav>
            <div class="top__navbar">
                <ul class="navbar__logo">
                    <img src="./img/mbologo.png" alt="">
                </ul>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__contact--links">
                    <li>
                        <ion-icon name="mail-outline"></ion-icon>
                        <a href="">info@mboutrecht.nl</a>
                    </li>
                    <li>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                        <a href="">06 - 257 050 51 (WhatsApp)</a>
                    </li>
                </ul>
                <ul class="navbar__media--links">
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom__navbar">
                <ul>
                    <li>
                        <a href="./index.php">HOME</a>
                    </li>
                    <li>
                        <a href="/about">OVER MBO UTRECHT</a>
                    </li>
                    <li>
                        <a href="/course">OPLEIDINGEN</a>
                    </li>
                    <li>
                        <a class="active" href="/contact">CONTACT</a>
                    </li>
                    <li>
                        <a href="/workshop">VOORLICHTINGEN</a>
                    </li>

                </ul>
                <ul>
                <?php if(!isset($_SESSION['usersEmail'])) : ?>
                <button>
                    <a href="/register">Register</a>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
                <button>
                <a href="/login">Inloggen</a>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
                <?php else : ?>
                    <button>
                <a href="<?= URLROOT ; ?>/admin">Dashboard</a>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
                <button>
                <a href="<?= URLROOT ; ?>/Login/logout">Logout</a>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
                <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>