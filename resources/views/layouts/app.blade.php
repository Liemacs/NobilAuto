<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/app.css"/>
    <link rel="stylesheet" href="/assets/css/header.css"/>
    <link rel="stylesheet" href="/assets/css/footer.css"/>
    <link rel="stylesheet" href="/assets/css/responsiv.css"/>
    <title>NobilAuto</title>

    <link rel="stylesheet" href="/assets/css/auto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header-container container">
                <div class="logo">
                    <a href="/"><img src="/assets/images/header/Logo.svg" alt="logo"></a>
                </div>

                <nav>
                    <ul>
                        <li>
                            <a href="#">Acasă</a>
                        </li>
                        <li>
                            <a href="#">Automobile</a>
                        </li>
                        <li>
                            <a href="#">Cumpără în rate</a>
                        </li>
                        <li>
                            <a href="#">Contacte</a>
                        </li>
                    </ul>
                </nav>

                <div class="nav-actions">
                    <div class="favorites-btn">
                        <button>Favorites <span>2</span></button>
                    </div>

                    <div class="nav-icons">
                        <img src="/assets/images/header/magnifyingglass.svg" alt="search icon">
                        <div class="lang">
                            <img src="/assets/images/header/globe.svg" alt="globe icon">
                            <div class="circle">
                                RO
                            </div>
                        </div>
                        <img src="/assets/images/header/sun-max.svg" alt="light swith icon">
                        <div class="nav-menu">
                            <div class="lines">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>

                            <div class="menu">
                                <div class="nav-intro">
                                    <h4>Menu</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">Acasă</a>
                                    </li>
                                    <li>
                                        <a href="#">Automobile</a>
                                    </li>
                                    <li>
                                        <a href="#">Cumpără în rate</a>
                                    </li>
                                    <li>
                                        <a href="#">Contacte</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            @yield('content')
        </main>
        <footer class="footer">
            <section class="logo-links">
                <div class="links-container container">
                    <div class="footer-logo">
                        <a href="/"><img src="/assets/images/footer/footerLogo.svg" alt=""></a>
                    </div>
    
                    <div class="footer-links">
                        <ul>
                            <h4>Menu</h4>
                            <li>
                                <a href="#">Acasă</a>
                            </li>
                            <li>
                                <a href="#">Automobile</a>
                            </li>
                            <li>
                                <a href="#">Cumpără în rate</a>
                            </li>
                            <li>
                                <a href="#">Contacte</a>
                            </li>
                        </ul>
                        <ul>
                            <h4>Program de lucru</h4>
                            <li>
                                <p>Luni - Duminică</p>
                            </li>
                            <li>
                                <p>de la 08:00 pînă la 18:00</p>
                            </li>
                        </ul>
                        <ul>
                            <h4>Contacte</h4>
                            <li>
                                <p>mun. Chișinău, str. <br> Studenților 7/7</p>
                            </li>
                            <li>
                                <a href="#">+373 61 25 22 22</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="copy">
                <div class="copy-container container">
                    <div class="socials">
                        <div class="social-img">
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="social-img">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="copyright">
                        <p>&copy;2019 - 2023 NobilAuto.md | All Rights Reserved</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/assets/js/app.js"></script>
    
    <script src="/assets/js/range-slider.js"></script>
    <script src="/assets/js/pagination.js"></script>
</body>
</html>