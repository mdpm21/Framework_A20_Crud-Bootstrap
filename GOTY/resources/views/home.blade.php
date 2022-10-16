<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Twenty Once: GOTY</title>
    <!-- <link rel="shortcut icon" href="img2/background/logo-p.png"> -->
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
</head>
<body>
    <!-- HEADER -->
    <header class="main" id="home">
        <!-- navbar -->
        <nav class="mode-bg">
            <div class="logo">
                <a href="index.html" class="mode-text">
                    TWENTY ONCE
                </a>
            </div>

            <ul>
                <li><a class="mode-text" href="/games">List</a></li>
                <li><a class="mode-text" href="#about">About Us</a></li>
                <li><a class="mode-text" href="#contact">Contact Us</a></li>
            </ul>
            <div>
                <input type="checkbox" class="checkbox" id="chk"/>
                <label class="label" for="chk">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                </label>
            </div>

            <div class="menu-toggle">
                <input type="checkbox" id="menTog"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <!-- end navbar -->

        <div class="header-container">
            <div class="header-item-left">
                <h1>GAME OF<br>THE YEAR</h1>
                <p>The Game Award for Game of the Year is an award presented annually by The Game Awards to the video game judged to be the best from that calendar year. The process begins with several dozen video game publications and websites, chosen by the Game Awards' advisory committee, to act as the jury each year. Nemo, assumenda? Libero eligendi, recusandae ab rerum eius excepturi inventore, in esse eos distinctio.</p>
                <!-- salah satu fitur pop up box (alert) -->
                <a href="/games">
                    <button class="rent-btn">List Now</button>
                </a>
                <a href="#coming-soon" onclick="alert('Coming Soon!')">
                    <button class="play-btn">Festival</button>
                </a>
                <!-- <h4>Available Service :</h4>
                <img src="img2/service/services.png" alt=""> -->
            </div>
            <div class="header-item-right">
                <img src="img2/service/GOTY-Winner.png" class="img-gif" alt="">
            </div>
        </div>
    </header>
    <!-- END HEADER -->


    <!-- MAIN CONTENT -->
    <section>
        <div class="about-container mode-bg mode-text" id="about">
            <div class="about-title">
                <h2>ABOUT US</h2>
            </div>
            <div class="about-content">
                <p class="about-item-left"><b>Twenty Once</b> is a privately held Samarinda online information service that specializes in providing games for Sony, Microsoft, and Nintendo systems starting from the sixth generation onwards. The business model of <b>Twenty Once</b> is similar to the Code subscription service PS+ and Xbox Pass. <b>Twenty Once</b> sends service to subscribers for a monthly fee.</p>
                <p class="about-item-right">Over 8,000 titles are available that can enjoy in PS+/Xbox Pass. In May 2018, Electronic Arts announced that they acquired cloud gaming technology assets and personnel from <b>Twenty Once</b> (including its Chicago outpost). <b>Twenty Once</b> is currently owned by the same ownership group as Alliance Entertainment and is operated as a stand-alone company.</p>
            </div>
        </div>

        <!-- <div class="partners-container mundur-dikit">
            <h3>Our Partners</h3>
            <div class="content-img">
                <img src="img2/partners/ovo.png" alt="">
                <img src="img2/partners/dana.png" alt="">
                <img src="img2/partners/gopay.png" alt="">
            </div>
        </div> -->

        <div class="service-container">
            <h3>Our Partners</h3>
            <div class="service-cards">
                <div class="card-panel mode-bg mode-text">
                    <img src="img2/service/ps-logo.png" class="mode-img" alt="">
                    <h4>Playstation</h4>
                    <p>PlayStation is a brand produced by Sony Interactive Entertainment. The first PlayStation console was released in Japan in December 1994, and released worldwide the following year.</p>
                </div>
                <div class="card-panel mode-bg mode-text">
                    <img src="img2/service/xbox-logo.png" class="mode-img" alt="">
                    <h4>Xbox</h4>
                    <p>Xbox is a video gaming brand created and owned by Microsoft. The brand was first introduced in the United States in November 2001, with the launch of the original Xbox console.</p>
                </div>
                <div class="card-panel mode-bg mode-text">
                    <img src="img2/service/nintendo-logo.png" class="mode-img" alt="">
                    <h4>Nintendo</h4>
                    <p>Nintendo is a multinational consumer electronics and video game company headquartered in Kyoto. Nintendo was founded on September 23, 1889 by Fusajiro Yamauchi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT -->


    <!-- FOOTER -->
    <footer class="mode-bg">
        <div class="footer-container">
            <div class="footer-title" id="contact">
                <h2>CONTACT US</h2>
            </div>
            <div class="footer-contact-item">
                <div class="footer-item">
                    <h3>Location</h3>
                    <p>28 Jackson Blvd Ste 1020 Chicago<br>IL 60604-2340<br>Phone: +628 225 126 6939</p>
                </div>
                <div class="footer-item">
                    <h3>Find Us On</h3>
                    <div class="circle-container">
                        <!-- salah satu fitur pop up box (confirm) -->
                        <div class="circle fb">
                            <a href="https://www.facebook.com/muhammad.mahardika" onclick="return confirm('You will be redirected to other website.');"><img src="img2/media-social/facebook.png" alt=""></a>
                        </div>
                        <div class="circle tw">
                            <a href="https://github.com/mdpm21" onclick="return confirm('You will be redirected to other website.');"><img src="img2/media-social/github5.png" alt=""></a>
                        </div>
                        <div class="circle ig">
                            <a href="https://www.instagram.com/_mdpm_/" onclick="return confirm('You will be redirected to other website.');"><img src="img2/media-social/instagram.png" alt=""></a>
                        </div>
                        <div class="circle wa">
                            <a href="https://api.whatsapp.com/send/?phone=6282251266939&text&type=phone_number&app_absent=0" onclick="return confirm('You will be redirected to other website.');"><img src="img2/media-social/whatsapp.png" alt=""></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="copyright">© 2022 <a href="https://instagram.com/_mdpm_/">DaffaMahardika</a>. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/dark-mode.js"></script>
    <script src="js/navbar-mobile.js"></script>
    <script src="js/pop-up-box.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>