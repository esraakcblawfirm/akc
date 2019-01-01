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
    <link rel="stylesheet" type="text/css" href="css/lawyer-style.css" media="screen"/>

</head>

<body>
<!-- Wrapper -->
<div id="wrapper">
    <div id="topbar" class="visible-md visible-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="top-menu">
                        <li><a href="#"><?php echo $lang['phone']; ?> +90 541 715 19 86</a></li>
                        <li><a href="#">Email: info@akcblawfirm.com</a></li>
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
                                    <a class="list-entry" href="language/language.php?lang=tr&page=workArea">Türkçe</a>
                                    <a class="list-entry" href="language/language.php?lang=en&page=workArea">English</a>
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
                                    </ul>
                                </li>
                                <li><a href="workArea.php"><?php echo $lang['workareas']; ?></a></li>
                                <li class="dropdown"><a
                                            href="partner.php"><?php echo $lang['partners']; ?></a>
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
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">

        <div class="slide background-overlay-one"
             style="background-image:url('images/hakkimizda-vizyonumuz.png'); background-position: 50% 70% !important;
                    border-bottom: 3px solid #1f1f1f;">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #FFFFFF">
                        <span style="font-family: Myriad Pro; ">AKCBLAWFIRM</span>
                    </h3>
                    <h3 style="font-family: Courgette; color: #e2ee1c; margin-left: 65%;  font-style: italic; font-size: xx-large">
                        <?php echo $lang['workArea_yourSuccess']; ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <!-- Section 1 -->
    <section id="section1" style="background-color: #EFEFEF;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="min-height: available">
                    <br/>
                    <img src="images/bookcase-books-bookshelf.jpg" alt="Law Books" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h2><?php echo $lang['workareas']; ?></h2>
                    <span class="lead"><?php echo $lang['workArea_detail_1']; ?><br/><br/></span>
                    <div class="lawyer-list-items">
                        <strong>- <?php echo $lang['workArea_internationalCommerce']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_internationalLaw']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_commercialLaw']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_contractsLaw']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_businessLaw']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_smaBanking']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_maritimeLawAndMaritimeCommerce']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_aeronauticsAndSpace']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_privateLawAndLawOfPersons']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_investmentLaw']; ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section id="section2" style="background-color: #FFFFFF;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php echo $lang['workArea_industries']; ?></h2>
                    <span class="lead"><?php echo $lang['workArea_detail_2']; ?><br/><br/></span>
                    <div class="lawyer-list-items">
                        <strong>- <?php echo $lang['workArea_internationalLegalIssues']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_europeanOfHumanRights']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_aviationAndAerospace']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_internationalCommercial']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_energy']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_internationalMaritimeAndMaritime']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_smeBankingAndFinance']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_compliance']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_arbitration']; ?></strong><br/>
                        <strong>- <?php echo $lang['workArea_conciliation']; ?></strong>
                    </div>
                </div>
                <div class="col-md-6" style="min-height: available">
                    <br/>
                    <img src="images/law-building.jpg" alt="Law Building" class="img-responsive">
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
                            <h4 class="widget-title"><?php echo $lang['links']; ?></h4>
                            <ul class="list list-arrow-icons">
                                <li><a title="" href="workArea.php"><?php echo $lang['workareassmall']; ?></a></li>
                                <li><a title="" href="partner.php"><?php echo $lang['partnerssmall']; ?></a>
                                </li>
                                <li><a title="" href="connection.php"><?php echo $lang['connectionsmall']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title"><?php echo $lang['content']; ?></h4>
                            <ul class="list list-arrow-icons">
                                <li><a href="purpose.php"><?php echo $lang['purpose']; ?></a></li>
                                <li><a href="vision.php"><?php echo $lang['vision']; ?></a></li>
                                <li><a href="publication.php"><?php echo $lang['publications']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title"><?php echo $lang['partners']; ?></h4>
                            <ul class="list list-arrow-icons">
                                <li><a href="find-a-partner.html">Find A Partner</a></li>
                                <li><a href="find-a-lawyer.html">Find A Lawyer</a></li>
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
