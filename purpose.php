<?php
session_start();
if (!$_SESSION["lang"]) {
    require("language/tr.php");
} else {
    require("language/" . $_SESSION["lang"] . ".php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="AKCBLAWFIRM"/>
    <meta name="description" content="Akcblawfirm">
    <!-- Document title -->
    <title>AKCBLAWFIRM - Amacımız</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
<!-- Wrapper -->
<div id="wrapper">
    <!-- TOPBAR -->
    <div id="topbar" class="visible-md visible-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="top-menu">
                        <li><a href="#">Telefon: +90 541 715 19 86</a></li>
                        <li><a href="#">Email: info@akcblawfirm.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="social-icons social-icons-colored-hover">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: TOPBAR -->


    <!-- Header -->
    <header id="header">
        <div id="header-wrap">
            <div class="container">
                <div id="logo">
                    <a href="index.php" class="logo" data-dark-logo="images/logo-black.png">
                        <img src="images/logo-black.png" alt="Akcblawfirm Logo">
                    </a>
                </div>

                <div class="header-extras">
                    <ul>
                        <li>
                            <div class="topbar-dropdown">
                                <a class="title"><i class="fa fa-globe"></i></a>
                                <div class="dropdown-list">
                                    <a class="list-entry" href="language/language.php?lang=tr&page=purpose">Türkçe</a>
                                    <a class="list-entry" href="language/language.php?lang=en&page=purpose">English</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="mainMenu-trigger">
                    <button class="lines-button x"><span class="lines"></span></button>
                </div>

                <div id="mainMenu" class="light">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="index.php"><?php echo $lang['mainpage']; ?></a></li>
                                <li class="dropdown"><a href="vision.php"><?php echo $lang['about']; ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="vision.php"><?php echo $lang['vision']; ?></a></li>
                                        <li><a href="purpose.php"><?php echo $lang['purpose']; ?></a></li>
                                        <li><a href="publication.php"><?php echo $lang['publications']; ?></a></li>
                                        <li><a href="membership.php"><?php echo $lang['members']; ?></a></li>
                                    </ul>
                                </li>
                                <li><a href="workArea.php"><?php echo $lang['workareas']; ?></a></li>
                                <li class="dropdown"><a
                                            href="cozum-ortaklarimiz.html"><?php echo $lang['partners']; ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="find-a-partner.html">Find A Partner</a></li>
                                        <li><a href="find-a-lawyer.html">Find A Lawyer</a></li>
                                    </ul>
                                </li>
                                <li><a href="connection.php"><?php echo $lang['connection']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <!-- end: Header -->

    <!-- SECTION IMAGE FULLSCREEN -->
    <section class="fullscreen" data-parallax-image="images/amacimiz-hakkimizda.png">
        <div class="container">
            <div class="container-fullscreen">
                <div class="text-middle">
                    <div class="text-light" style="">
                        <h4 class="text-uppercase m-b-0"><font color="#FFCC00">AKCBLAWFIRM</font></h4>
                        <h1 class="text-uppercase text-large"><font color="#FFFFFF">BİRLİKTE</font> <br><font
                                    color="#FFFFFF">DÜŞÜNÜP</font><br><font color="#FFFFFF">YARATALIM</font></h1>
                        <a href="#" class="btn btn-red">KAPIMIZI AÇIN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- IMAGE BLOCK -->
    <section id="image-block" class="image-block no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"
                     style="height:609px;background:url(images/hakkimizda-amacimiz.png) 50% 50% / cover no-repeat;">
                </div>
                <div class="col-md-6">
                    <div class="heading heading text-left">
                        <h2>AMACIMIZ</h2>
                        <span class="lead">Dünyanın dört bir yanındaki insanlara ulaşmayı ve size ulaşmayı hedefledik. <br/><br>Tüm hukuki süreçte en
verimli ve en doğru şekilde çözüm önerileri sunmak ve sizleri en iyi şekilde temsil etmek bizim görevimizdir. <br/><br>Bu görev doğrultusunda sizlerin amacına ulaşmak için tüm şeffaflığımızla sizlerleyiz.<br/>
						
					</span>
                    </div>
                    <a href="#" class="btn btn-outline btn-dark"><span>BİRLİKTE DÜŞÜNÜP YARATALIM!</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: IMAGE BLOCK -->

    <!-- FOOTER -->
    <footer id="footer" class="background-dark text-grey">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title">LİNKLER</h4>
                            <ul class="list list-arrow-icons">
                                <li><a title="" href="hakkimizda.html">Hakkımızda </a></li>
                                <li><a title="" href="workArea.php">Çalışma Alanlarımız</a></li>
                                <li><a title="" href="cozum-ortaklarimiz.html">Çözüm Ortaklarımız</a></li>
                                <li><a title="" href="connection.php">İletişim</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title">İÇERİK LİNKLERİ</h4>
                            <ul class="list list-arrow-icons">
                                <li><a href="purpose.php">Amacımız</a></li>
                                <li><a href="workArea.php">Alanlarımız</a></li>
                                <li><a href="workArea.php">Hizmetlerimiz</a></li>
                                <li><a href="publication.php">Yayınlarımız</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title">ÇÖZÜM ORTAKLARIMIZ</h4>
                            <ul class="list list-arrow-icons">
                                <li><a href="find-a-partner.html">Find A Partner</a>
                                </li>
                                <li><a href="find-a-lawyer.html">Find A Lawyer</a>
                                </li>
                                <li><a href="find-a-consulting.html">Find A Consulting</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <img src="images/logo-white.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="row">
                    <div class="copyright-text text-center"> © AKCBLAWFIRM </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: FOOTER -->

</div>
<!-- end: Wrapper -->

<!-- Go to top button -->
<a id="goToTop" class="scroll-to" href="body"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
<!--Plugins-->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<!--Template functions-->
<script src="js/functions.js"></script>


</body>

</html>
