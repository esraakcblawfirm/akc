<?php
session_start();
if (!$_SESSION["lang"]) {
    require("language/tr.php");
} else {
    require("language/" . $_SESSION["lang"] . ".php");
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="AKCBLAWFIRM"/>
    <meta name="description" content="Akcblawfirm">
    <!-- Document title -->
    <title><?php echo $lang['title_workAreas']; ?></title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/lawyer-style.css" media="screen"/>
    <link rel="shortcut icon" href="images/fav_ico_epn_icon.ico" />
</head>

<body>
<!-- Wrapper -->
<div id="wrapper">
    <div id="topbar" class="visible-md visible-lg" style="background-color: #e7ebec;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="top-menu">
                        <li><a href="#" style="color: #ca0027;"><?php echo $lang['phone']; ?> +90 541 715 19 86</a></li>
                        <li><a href="#" style="color: #ca0027;">Email: info@akcblawfirm.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="social-icons social-icons-colored-hover">
                        <ul>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/in/esra-a-0564a4170/"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/company/akcblawfirm/"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id="header">
        <div id="header-wrap">
            <div class="container">
                <div id="logo">
                    <a href="index.php" class="logo" data-dark-logo="images/<?php echo $lang['logoBlack']; ?>">
                        <img src="images/<?php echo $lang['logoBlack']; ?>" alt="Akcblawfirm Logo">
                    </a>
                </div>
                <div class="header-extras">
                    <ul>
                        <li>
                            <div class="topbar-dropdown">
                                <a class="title"><i class="fa fa-globe"></i></a>
                                <div class="dropdown-list">
                                    <a class="list-entry" href="language/language.php?lang=tr&page=workArea">Türkçe</a>
                                    <a class="list-entry" href="language/language.php?lang=en&page=workArea">English</a>
                                    <!-- <a class="list-entry" href="language/language.php?lang=de&page=workArea">Deutsch</a> -->
                                    <!-- <a class="list-entry" href="language/language.php?lang=fr&page=workArea">Français</a> -->
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
                                <li><a href="index.php"><?php echo $lang['header_mainpage']; ?></a></li>
                                <li><a href="aboutUs.php"><?php echo $lang['about']; ?></a></li>
                                <li><a href="workArea.php"><?php echo $lang['workareas']; ?></a></li>
                                <li class="dropdown"><a href="partner.php"><?php echo $lang['partners']; ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="partner.php"><?php echo $lang['partner_1_title']; ?></a></li>
                                        <li><a href="partner.php"><?php echo $lang['partner_2_title']; ?></a></li>
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
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">

        <div class="slide background-overlay-one"
             style="background-image:url('images/hakkimizda-vizyonumuz.png'); background-position: 50% 70% !important;
                    border-bottom: 2px solid #1f1f1f; border-top: 2px solid #1f1f1f;">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #ca0027">
                        <span style="font-family: 'Playfair Display', serif; ">AKCBLAWFIRM</span>
                    </h3>
                    <h4 style="font-family: 'Playfair Display', serif; color: #FFFFFF; font-size: x-large">
                        <?php echo $lang['workArea_yourSuccess']; ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- Section 1 -->
    <section id="section1" style="background-color: #EFEFEF; font-size: 12px; text-align: justify;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4" style="min-height: available">
                    <br/>
                    <img src="images/bookcase-books-bookshelf.jpg" alt="Law Books" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <h3 style="font-weight: bold; color: #ca0027;"><?php echo $lang['workareas_title']; ?></h3>
                    <span><?php echo $lang['workArea_detail_1']; ?><br/><br/></span>
                    <span><?php echo $lang['workArea_detail_2']; ?><br/><br/></span>
                    <span><?php echo $lang['workArea_detail_3']; ?><br/><br/></span>
                    <div class = "row">
                        <div class="col-md-6">
                            <strong>- <?php echo $lang['workArea_Area1']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area2']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area3']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area4']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area5']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area6']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area7']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area8']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area9']; ?></strong>
                        </div>
                        <div class="col-md-6">
                            <strong>- <?php echo $lang['workArea_Area10']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area11']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area12']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area13']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area14']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area15']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area16']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area17']; ?></strong><br/>
                            <strong>- <?php echo $lang['workArea_Area18']; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section id="section2" style="background-color: #FFFFFF; font-size: 12px; text-align: justify;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h3 style="font-weight: bold; color: #ca0027;"><?php echo $lang['workArea_industries']; ?></h3>
                    <span><?php echo $lang['workArea_Sector_detail']; ?><br/><br/></span>
                    <div style="margin-left: 2%;">
                        <strong> <?php echo $lang['workArea_Sector1']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector1_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector2']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector2_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector3']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector3_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector4']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector4_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector5']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector5_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector6']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector6_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector7']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector7_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector8']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector8_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector9']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector9_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector10']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector10_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector11']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector11_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector12']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector12_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector13']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector13_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector14']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector14_details']; ?></p>
                        <strong> <?php echo $lang['workArea_Sector15']; ?></strong><br/>
                        <p class="sector-paragraph"><?php echo $lang['workArea_Sector15_details']; ?></p>
                    </div>
                </div>
                <div class="col-md-4" style="min-height: available">
                    <br/>
                    <img src="images/SupremeCourtWestPediment.jpg" alt="Law Building" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer" class="background-dark text-grey">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title"><?php echo $lang['content']; ?></h4>
                            <ul class="list list-arrow-icons">
                                <li><a title="" href="workArea.php"><?php echo $lang['workareassmall']; ?></a></li>
                                <li><a title="" href="partner.php"><?php echo $lang['partnerssmall']; ?></a></li>
                                <li><a title="" href="connection.php"><?php echo $lang['connectionsmall']; ?></a></li>
                                <li><a title="" href="about.php"><?php echo $lang['about']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <a href="http://www.akcblawfirm.com/index.php#section3">
                                <h4 class="widget-title"><?php echo $lang['news']; ?></h4>
                                <ul class="list list-arrow-icons">
                                    <li><a href="http://www.akcblawfirm.com/index.php#section3"><?php echo $lang['haber_1_title']; ?></a></li>
                                    <li><a href="http://www.akcblawfirm.com/index.php#new1"><?php echo $lang['haber_2_title']; ?></a></li>
                                    <li><a href="http://www.akcblawfirm.com/index.php#new2"><?php echo $lang['haber_3_title']; ?></a></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <a href="partner.php"><h4 class="widget-title"><?php echo $lang['partners']; ?></h4></a>
                            <ul class="list list-arrow-icons">
                                <li><a href="partner.php"><?php echo $lang['partner_1_title']; ?></a></li>
                                <li><a href="partner.php"><?php echo $lang['partner_2_title']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/<?php echo $lang['logoWhite']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="row">
                    <div class="copyright-text text-center"> © AKCBLAWFIRM</div>
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
