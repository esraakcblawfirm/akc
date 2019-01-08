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
    <title><?php echo $lang['title_partners']; ?></title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
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
                                    <a class="list-entry" href="language/language.php?lang=tr&page=partner">Türkçe</a>
                                    <a class="list-entry" href="language/language.php?lang=en&page=partner">English</a>
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

    <!-- SECTION IMAGE FULLSCREEN -->
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">

        <div class="slide background-overlay-one"
             style="background-image:url('images/partner-page.jpg'); border-bottom: 1px solid #1f1f1f; border-top: 2px solid #1f1f1f;">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #ca0027">
                        <span style="font-family: 'Playfair Display', serif; ">AKCBLAWFIRM</span>
                    </h3>
                    <h4 style="font-family: 'Playfair Display', serif; color: #FFFFFF; font-size: x-large">
                        <?php echo $lang['partner_togetherStronger']; ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- CONTENT -->
    <section id="content" style="background-color: #EFEFEF;">
        <div class="container">
            <h3 class="text-uppercase" style="color: #ca0027;"><?php echo $lang['partners']; ?></h3>
            <div class="row">
                <div class="col-md-5">
                    <h3><?php echo $lang['partner_1_title']; ?></h3>
                    <p><?php echo $lang['partner_1_details']; ?></p>
                    <p><a href="http://www.alteravitam.com">www.alteravitam.com</a></p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <h3><?php echo $lang['partner_2_title']; ?></h3>
                    <p><?php echo $lang['partner_2_details']; ?></p>
                </div>
            </div>
            <div class="row" style="align-content: center;">
                <div class="col-md-7"></div>
                <div class="col-md-4 form-colored text-light p-20" style="padding-bottom: 10px !important; padding-top: 20px !important; padding-left: 20px !important; padding-right: 20px !important;">
                    <h3 style="color: #FFF !important; font-weight: bolder;"><?php echo $lang['searchSlogan']; ?></h3>
                    <form onsubmit="myFunction()">
                        <div class="row">
                            <div class="col-md-9">
                                    <input type="text" aria-required="true" name="widget-form-search"
                                           class="form-control required name">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-form" style="margin: 0; font-size: 16px; max-width: 58px">
                                    <i class="fa fa-search fa-1x" style="color: #CA0027 !important;" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- end: CONTENT -->

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
                                    <li><a href="http://www.akcblawfirm.com/index.php#new1" ><?php echo $lang['haber_2_title']; ?></a></li>
                                    <li><a href="http://www.akcblawfirm.com/index.php#new2" ><?php echo $lang['haber_3_title']; ?></a></li>
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
<script language="JavaScript">
    $('form').submit(false);
</script>


</body>

</html>
