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
    <title><?php echo $lang['title']; ?></title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/color-variations/red-dark.css" rel="stylesheet" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/lawyer-style.css" media="screen"/>
    <link rel="shortcut icon" href="images/fav_ico_epn_icon.ico" />
</head>

<body>
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
                                    <a class="list-entry" href="language/language.php?lang=tr">Türkçe</a>
                                    <a class="list-entry" href="language/language.php?lang=en">English</a>
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
                                <li><a href="aboutUs.php"><?php echo $lang['about']; ?></a></li>
                                <li><a href="workArea.php"><?php echo $lang['workareas']; ?></a></li>
                                <li class="dropdown"><a
                                            href="partner.php"><?php echo $lang['partners']; ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://www.alteravitam.com"><?php echo $lang['partner_1_title']; ?></a></li>
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

    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">

        <div class="slide background-overlay-one" style="background-image:url('images/slider.png');  border-bottom: 1px solid #1f1f1f; border-top: 2px solid #1f1f1f;">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #ca0027;">
                        <span style="font-family: 'Playfair Display', serif; ">AKCBLAWFIRM</span>
                    </h3>
                    <p class="lead">
                        <div style="text-align: center;">
                            <span style="font-family: 'Playfair Display', serif; color: #FFFFFF; font-size: 144%;">
                                <?php echo $lang['homePageText']; ?>
                            </span>
                        </div>
                    </p>
                    <div style="text-align: center;">
                        <a class="btn btn-red goToSection" href="#section3"><?php echo $lang['openDoor']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end: Inspiro Slider -->

    <!-- PRACTICE AREAS -->
    <section id="section2" class="p-t-100" style="background-color: #EFEFEF;">
        <div class="container">
            <div class="heading heading-center">
                <h2 style="color: #ca0027; font-family: 'Playfair Display', serif; ">AKCBLAWFIRM</h2>
                <h4 style="font-family: 'Playfair Display', serif; "><?php echo $lang['sloganGeneral']; ?></h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box effect medium square color">
                        <a href="aboutUs.php">
                            <div class="row">
                                <div class="col-md-1" style="margin-right: 0">
                                    <img src="images/square.png" style="max-width: 60px"/>
                                </div>
                                <div class="col-md-11" style="padding-left: 0">
                                    <h3 style="color: #ca0027"><?php echo $lang['about']; ?></h3>
                                    <p><?php echo $lang['aboutUsSmallText']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box effect medium square color">
                        <a href="workArea.php">
                            <div class="row">
                                <div class="col-md-1" style="margin-right: 0">
                                    <img src="images/square.png" style="max-width: 60px"/>
                                </div>
                                <div class="col-md-11" style="padding-left: 0">
                                    <h3 style="color: #ca0027"><?php echo $lang['workareassmall']; ?></h3>
                                    <p><?php echo $lang['homepage_workAreas']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box effect medium square color">
                        <a href="partner.php">
                            <div class="row">
                                <div class="col-md-1" style="margin-right: 0">
                                    <img src="images/square.png" style="max-width: 60px"/>
                                </div>
                                <div class="col-md-11" style="padding-left: 0">
                                    <h3 style="color: #ca0027"><?php echo $lang['partnerssmall']; ?></h3>
                                    <p><?php echo $lang['homepage_partners']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box effect medium square color">
                        <a href="connection.php">
                            <div class="row">
                                <div class="col-md-1" style="margin-right: 0">
                                    <img src="images/square.png" style="max-width: 60px"/>
                                </div>
                                <div class="col-md-11" style="padding-left: 0">
                                    <h3 style="color: #ca0027"><?php echo $lang['connectionsmall']; ?></h3>
                                    <p><?php echo $lang['homepage_connection']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: PRACTICE AREAS -->

    <!-- ABOUT LAWYER -->
    <section id="section3" style="">
        <div class="container" style="">
            <h3 style="color: #ca0027;"><?php echo $lang['news']; ?></h3>
            <br>
            <div class="row" id="new1">
                <div class="col-md-4">
                    <img src="images/haber1.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <h4><?php echo $lang['haber_1_title']; ?></h4>
                    <p><?php echo $lang['haber_1_details']; ?></p>
                </div>
            </div>
            <hr/>
            <div class="row" id="new2">
                <div class="col-md-8">
                    <h4><?php echo $lang['haber_2_title']; ?></h4>
                    <p><?php echo $lang['haber_2_details']; ?></p>
                </div>
                <div class="col-md-4">
                    <img src="images/haber2.jpg" class="img-responsive">
                </div>
            </div>
            <hr/>
            <div class="row" id="new3">
                <div class="col-md-4">
                    <img src="images/haber3.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <h4><?php echo $lang['haber_3_title']; ?></h4>
                    <p><?php echo $lang['haber_3_details']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end: ABOUT LAWYER -->

    <!-- GET FREE CONSULTATION -->
    <section id="section4" data-parallax-image="images/LawyerSendMessage.jpg" style="background-color: #EFEFEF;">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="color: #FFFFFF; vertical-align: center">
                    <div class="row">
                        <h3 class="text-uppercase" style="color: #ca0027;"><?php echo $lang['connection']; ?></h3>
                        <p style="color: #FFFFFF">
                            <?php echo $lang['connection_detailsPart1']; ?><br/>
                            <?php echo $lang['connection_detailsPart2']; ?><br/>
                        </p>
                        <strong>Email: info@akcblawfirm.com - esra.akcebe@outlook.com</strong>
                    </div>
                    <div class="row">
                        <br/><br/><br/>
                        <h3 class="text-uppercase" style="color: #ca0027;"><?php echo $lang['address']; ?></h3>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>AKCBLAWFIRM İSTANBUL</strong>
                                    <br/><br/>
                                    Nöbethane Caddesi No: 28/10-11 <br/>
                                    Sirkeci / İSTANBUL <br/>
                                    <span style="color: #FFFFFF;"><?php echo $lang['phone']; ?></span> +90 (0541) 715 1986 <br/>
                                    <span style="color: #FFFFFF;"><?php echo $lang['email']; ?></span> info@akcblawfirm.com
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>AKCBLAWFIRM VIRGINIA</strong>
                                    <br/><br/>
                                    203 Greenland Drive, Yorktown VA <br/>
                                    Virgina / USA <br/>
                                    <span style="color: #FFFFFF;"><?php echo $lang['phone']; ?></span> +1 (201) 899-6194 <br/>
                                    <span style="color: #FFFFFF;"><?php echo $lang['email']; ?></span> info@akcblawfirm.com
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 form-colored text-light p-20" style="padding-bottom: 10px !important; padding-top: 40px !important; padding-left: 35px !important; padding-right: 35px !important;">
                    <h3 style="color: #FFF !important;"><?php echo $lang['form_email_title']; ?></h3>
                    <p style="color: #FFF !important;;"><?php echo $lang['form_email_text']; ?></p>
                    <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" style="color: #FFF !important;;"><?php echo $lang['form_email_name']; ?></label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name"
                                           class="form-control required name"
                                           placeholder="<?php echo $lang['form_email_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label style="color: #FFF !important;;" for="email"><?php echo $lang['form_email_address_big']; ?></label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email"
                                           class="form-control required email"
                                           placeholder="<?php echo $lang['form_email_address']; ?>">
                                </div>
                                <div class="form-group">
                                    <label style="color: #FFF !important;" for="message"><?php echo $lang['form_email_message']; ?></label>
                                    <textarea type="text" name="widget-contact-form-message" rows="6"
                                              class="form-control required"
                                              placeholder="<?php echo $lang['form_email_message']; ?>"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-form center" type="submit" id="form-submit" name="submit">
                                        <?php echo $lang['form_email_btn']; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- GET FREE CONSULTATION -->

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
                            <a href="#section3" class="goToSection">
                                <h4 class="widget-title"><?php echo $lang['news']; ?></h4>
                                <ul class="list list-arrow-icons">
                                    <li><a href="#section3" class="goToSection"><?php echo $lang['haber_1_title']; ?></a></li>
                                    <li><a href="#new1" class="goToSection"><?php echo $lang['haber_2_title']; ?></a></li>
                                    <li><a href="#new2" class="goToSection"><?php echo $lang['haber_3_title']; ?></a></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <a href="partner.php"><h4 class="widget-title"><?php echo $lang['partners']; ?></h4></a>
                            <ul class="list list-arrow-icons">
                                <li><a href="http://www.alteravitam.com"><?php echo $lang['partner_1_title']; ?></a></li>
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