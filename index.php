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
    <title><?php echo $lang['title']; ?></title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/color-variations/red-dark.css" rel="stylesheet" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Charm|Courgette" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/lawyer-style.css" media="screen"/>
</head>

<body>
<div id="wrapper">
    <!-- TOPBAR -->
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
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#"><i class="fa fa-instagram"></i></a></li>
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

    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">

        <div class="slide background-overlay-one" style="background-image:url('images/slider.png');">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h3 class="text-uppercase text-medium" style="color: #CA0027; opacity: 0.6; text-align: center">
                        <span style="font-family: Myriad Pro; ">AKCBLAWFIRM</span>
                    </h3>
                    <h3 style="color: #003366; text-align: center">
                        <span style="font-family: Courgette; font-size: 80%; color: #CA0027; opacity: 0.5; text-align: center; font-style: italic">
                            ULUSAL VE ULUSLARARASI HUKUK VE DANIŞMANLIK
                        </span>
                    </h3>
                    <p class="lead">
                    <div style="text-align: center;">
                        <span style="font-family: Courgette; color: #ffffff; font-size: 144%; font-style: italic;">
                            <?php echo $lang['homePageText']; ?>
                        </span>
                    </div>
                    </p>
                    <div style="text-align: center;">
                        <a class="btn btn-red" href="#section6" id="goToSection6"><?php echo $lang['openDoor']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end: Inspiro Slider -->

    <!-- PRACTICE AREAS -->
    <section id="section2" class="p-t-100">
        <div class="container">
            <div class="heading heading-center">
                <h2>AKCBLAWFIRM</h2>
                <span class="lead">Ulusal ve Uluslararası Hukuk ve Danışmanlık </span>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box effect medium square color">
                        <div class="icon"><a href="vision.php"><i class="fa fa-lock"></i></a></div>
                        <h3><?php echo $lang['about']; ?></h3>
                        <p><?php echo $lang['aboutUsSmallText']; ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box effect medium square color">
                        <div class="icon"><a href="workArea.php"><i class="fa fa-gavel"></i></a></div>
                        <h3>Çalışma Alanlarımız</h3>
                        <p>Avukatlık büromuz ile, işlemlerinizi hukuki zeminde gerçekleştirin.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box effect medium square color">
                        <div class="icon"><a href="cozum-ortaklarimiz.html"><i class="fa fa-users"></i></a></div>
                        <h3>Çözüm Ortaklarımız</h3>
                        <p>Bu görev doğrultusunda sizlerin amacına ulaşmak için yanınızdayız.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box effect medium square color">
                        <div class="icon"><a href="publication.php"><i class="fa fa-university"></i></a></div>
                        <h3>Yayınlarımız</h3>
                        <p>Birden fazla ülkenin unsurları söz konusu olduğunda uluslararası ...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box effect medium square color">
                        <div class="icon"><a href="index.php"><i class="fa fa-truck"></i></a></div>
                        <h3>Hizmetlerimiz</h3>
                        <p>Avukatlık büromuzun sunduğu tüm hizmetlere ulaşabilirsiniz.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box effect medium square color">
                        <div class="icon"><a href="connection.php"><i class="fa fa-heart"></i></a></div>
                        <h3>İletişim Ofislerimiz</h3>
                        <p>İletişim bilgilerimize buradan ulaşabilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: PRACTICE AREAS -->

    <!-- ABOUT LAWYER -->
    <section id="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img alt="lawyer" src="images/vizyon-anasayfa.png" class="img-responsive m-b-10">
                </div>
                <div class="col-md-7">
                    <h2 class="text-medium">Vizyonumuz</h2>
                    <h3>Birlikte Düşünüp Yaratalım</h3>
                    <p>Mükemmel müşteri hizmetleri sunmak ve müşterilerin doğru fırsatları yakalamalarına yardımcı olmak
                        için dünya çapında yeteneklerimizi kullanmak, uzun süreli ve kalıcı ilişkilerden faydalanmak
                        dünya görüşümüzdür. İşimizin tadını çıkarın ve şirketteki görevimiz ne olursa olsun sıra dışı
                        bir iş yapmaya kararlıyız. Yaptığımız her işte en yüksek kişisel, etik ve profesyonel
                        standartları gözlemliyoruz ve her zaman dürüstlükle çalışıyoruz.</p>
                    <div class="clear"></div>
                    <div class="seperator"><i class="fa fa-gavel"></i></div>
                    <div class="row team-members">
                        <div class="col-md-4">
                            <a href="purpose.php">
                                <div class="team-member">
                                    <div class="team-image">
                                        <img src="images/amacimiz-anasayfa.png">
                                    </div>
                                    <div class="team-desc">
                                        <h3>Amacımız</h3>
                                        <p>Dünyanın dört bir yanındaki insanlara ulaşmayı ve size ulaşmayı
                                            hedefledik.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="publication.php">
                                <div class="team-member">
                                    <div class="team-image">
                                        <img src="images/yayinlarimiz-anasayfa.png">
                                    </div>
                                    <div class="team-desc">
                                        <h3>Yayınlarımız</h3>
                                        <p>Doğrudan Yabancı Yatırımlar için Türkiye’deki Yasal Alt Yapı (Kasım 2013)</p>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="membership.php">
                                <div class="team-member">
                                    <div class="team-image">
                                        <img src="images/uye-olunan-kuruluslar-anasayfa.png">
                                    </div>
                                    <div class="team-desc">
                                        <h3>Üye Olunan Kuruluşlar</h3>
                                        <p>İstanbul Barosu (2011) </br> Birleşik Hakemler Kurulu üye olduğumuz
                                            kuruluşlardır.</p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end: ABOUT LAWYER -->


    <!-- GET FREE CONSULTATION -->
    <section id="section6" data-parallax-image="images/iletisim-form.png">
        <div class="container">
            <div class="row">

                <div class="col-md-8"></div>
                <div class="col-md-4 background-colored text-light p-40">
                    <div class="text-small">HEMEN EMAİL YOLLA</div>
                    <p>Hızlı bir şekilde email yollayarak bilgi alabilirsiniz.</p>

                    <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Adınız ve Soyadınız</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name"
                                           class="form-control required name" placeholder="Adınız ve Soyadınız">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Adresiniz</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email"
                                           class="form-control required email" placeholder="Email Adresiniz">
                                </div>
                                <div class="form-group">
                                    <label for="message">Mesajınız</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="9"
                                              class="form-control required" placeholder="Mesajınız"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button class="btn btn-form center" type="submit" id="form-submit" name="submit">
                                        Mesajı Yolla
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
                    <div class="copyright-text text-center"> © AKCBLAWFIRM</a>
                    </div>
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
<script>
    $(document).ready(function () {
        $("#goToSection6").on('click', function (event) {
            console.log("HERE :   ddd");
            if (this.hash !== "") {
                event.preventDefault();
                // Store hash
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
</body>

</html>