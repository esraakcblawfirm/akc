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
    <title><?php echo $lang['title_connection']; ?></title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/lawyer-style.css" media="screen"/>
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
                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
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

        <div class="slide background-overlay-one" style="background-image:url('images/connection.jpg'); background-position: 50% 8%; border-bottom: 2px solid #1f1f1f; border-top: 4px solid #1f1f1f;">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #ca0027">
                        <span style="font-family: 'Playfair Display', serif; ">AKCBLAWFIRM</span>
                    </h3>
                    <h4 style="font-family: 'Playfair Display', serif; color: #FFFFFF; font-size: x-large">
                        <?php echo $lang['connection_title']; ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- CONTENT -->
    <section id="content" style="background-color: #EFEFEF;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-uppercase" style="color: #ca0027;"><?php echo $lang['connection']; ?></h3>
                    <p>
                        <?php echo $lang['connection_detailsPart1']; ?><br/>
                        <?php echo $lang['connection_detailsPart2']; ?><br/>
                    </p>
                    <strong>Email: info@akcblawfirm.com - esra.akcebe@outlook.com</strong>
                </div>
                <div class="col-md-6">
                    <h3 class="text-uppercase" style="color: #ca0027;"><?php echo $lang['address']; ?></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>AKCBLAWFIRM</strong>
                                <br/><br/>
                                Nöbethane Caddesi No: 28/10-11 <br/>
                                Sirkeci / İSTANBUL <br/>
                                <abbr title="Phone"><?php echo $lang['phoneShort']; ?></abbr> (0212) 511 5038
                                <abbr title="Phone"><?php echo $lang['phoneShort']; ?></abbr> (0541) 715 1986
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address>
                                <strong>AKCBLAWFIRM USA</strong>
                                <br/><br/>
                                203 Greenland Drive, Yorktown VA <br/>
                                Virgina / USA <br/>
                                <abbr title="email">E:</abbr> info@akcblawfirm.com
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: CONTENT -->


    <!-- GET FREE CONSULTATION -->
    <section id="connection" data-parallax-image="images/LawyerSendMessage.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 form-colored text-light p-40">
                    <h3 style="color: #ca0027 !important;"><?php echo $lang['form_email_title']; ?></h3>
                    <p><?php echo $lang['form_email_text']; ?></p>
                    <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name"><?php echo $lang['form_email_name']; ?></label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name"
                                           class="form-control required name"
                                           placeholder="<?php echo $lang['form_email_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email"><?php echo $lang['form_email_address_big']; ?></label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email"
                                           class="form-control required email"
                                           placeholder="<?php echo $lang['form_email_address']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="message"><?php echo $lang['form_email_message']; ?></label>
                                    <textarea type="text" name="widget-contact-form-message" rows="9"
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
                            <h4 class="widget-title"><?php echo $lang['partners']; ?></h4>
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
