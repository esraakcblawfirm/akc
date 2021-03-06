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
    <title><?php echo $lang['title_aim']; ?></title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
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
                                    <a class="list-entry" href="language/language.php?lang=tr&page=aboutUs">Türkçe</a>
                                    <a class="list-entry" href="language/language.php?lang=en&page=aboutUs">English</a>
                                    <!-- <a class="list-entry" href="language/language.php?lang=de&page=aboutUs">Deutsch</a> -->
                                    <!-- <a class="list-entry" href="language/language.php?lang=fr&page=aboutUs">Français</a> -->
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
                                <li class="dropdown"><a
                                            href="partner.php"><?php echo $lang['partners']; ?></a>
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
             style="background-image:url('images/amacimiz-hakkimizda.png'); border-bottom: 1px solid #1f1f1f; border-top: 2px solid #1f1f1f;">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #ca0027">
                        <span style="font-family: 'Playfair Display', serif; ">AKCBLAWFIRM</span>
                    </h3>
                    <h4 style="font-family: 'Playfair Display', serif; color: #FFFFFF; font-size: x-large">
                        <?php echo $lang['aim_slogan']; ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end: SECTION IMAGE FULLSCREEN -->


    <!-- Section 1 -->
    <section id="section1" style="background-color: #EFEFEF;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4" style="min-height: available">
                    <img src="images/hakkimizda-amacimiz.png" alt="Law Books" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <h3 class="text-uppercase" style="font-weight: bold; color: #ca0027;"><?php echo $lang['aim_title']; ?></h3>
                    <span ><?php echo $lang['aim_detail']; ?></span>
                    <br/><br/>
                    <br/><br/><br/>
                    <a href="connection.php"
                       class="btn btn-outline btn-dark"><span><?php echo $lang['aim_button_text']; ?></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section id="section2" style="background-color: #FFFFFF;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-uppercase" style="font-weight: bold; color: #ca0027;"><?php echo $lang['vision_title']; ?></h3>
                    <span class=""><?php echo $lang['vision_detail']; ?></span>
                    <br/>
                    <br/>
                    <br/>
                    <a href="connection.php" class="btn btn-outline btn-dark"><span><?php echo $lang['vision_button_text']; ?></span></a>
                </div>
                <div class="col-md-4" style="min-height: available">
                    <img src="images/aaron-mello.jpg" alt="Law Books" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section id="section3" style="background-color: #EFEFEF;">
        <div class="container-fluid">
            <div class="row" style="display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display:         flex; flex-wrap: wrap;">
                <div class="col-md-4" style="display: flex; flex-direction: column;">
                    <img src="images/library.jpg" alt="Law Books" class="img-responsive">
                </div>
                <div class="col-md-8 imageForAboutUs" style="display: flex; flex-direction: column;">
                    <h3  class="text-uppercase" style="font-weight: bold; color: #ca0027;"><?php echo $lang['publications_title']; ?></h3>
                    <span>
                        <strong><?php echo $lang['publications_pub_1_title']; ?> &nbsp;&nbsp;&nbsp; (<a style="color: blue" target="_blank" href="https://jurix.com.tr/article/16477"><?php echo $lang['seePublication']; ?></a>)</strong><br/>
                        <?php echo $lang['publications_pub_1_detail']; ?><br/>
                        <strong><?php echo $lang['publications_pub_2_title']; ?> &nbsp;&nbsp;&nbsp; (<a style="color: blue" target="_blank" href="https://issuu.com/aiglobalmedia/docs/acquisition_international_november_/46"><?php echo $lang['seePublication']; ?></a>)</strong><br/>
                        <?php echo $lang['publications_pub_2_detail']; ?><br/>
                        <strong><?php echo $lang['publications_pub_3_title']; ?>   </strong><br/>
                        <strong><?php echo $lang['publications_pub_4_title']; ?>   </strong><br/>
                        <strong><?php echo $lang['publications_pub_5_title']; ?>   </strong><br/>
                        <?php echo $lang['publications_pub_5_detail']; ?><br/>
					</span>
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
