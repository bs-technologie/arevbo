<!DOCTYPE html>
<html lang="FR">
    <head>
        <title>Arevbo - Association des Ressortissants de la Ville de Bongouanou</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <!--Flickity CSS-->
        <link rel="stylesheet" type="text/css" href="./css/flickity.min.css">
        <!--Owl Carousel CSS-->
        <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
        <!--AOS CSS-->
        <link rel="stylesheet" type="text/css" href="./css/aos.css">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
        <!-- Feather -->
        <script src="./js/feather.min.js"></script>
    </head>
    <body>
        <?php
        include('./includes/header.php');
        include "database.php";
        ?>
        <!-- Content -->
        <div class="content">
            <!-- Main Carousel -->
            <div class="main-carousel">
                <!-- Carousel News -->
                <?php
                $q = "SELECT * FROM actualite ORDER BY dateactu DESC LIMIT 2";
                $s = $db->query($q);
                while($d = $s->fetch()){
                ?>
                <div class="carousel-cell">
                    <div class="slider-img" style="background-image: url('./admin/assets/img/<?php echo $d['file_name']; ?>')">
                        <div class="container">
                            <div class="row slider-text">
                                <div class="col-md-8 col-sm-12 text-center" data-aos="fade-up">
                                    <h1><?php echo $d['titleactu']; ?></h1>
                                    <p class="mb-5"><?php echo substr($d['texteactu'], 0,100); ?>...</p>
                                    <form action="./news-details" method="POST">
                                        <input type="hidden" name="manger" value="<?php echo "".$d["idactu"]."" ?>"></input>
                                        <button type="submit" class="btn btn-success">En Savoir Plus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }      
                ?>
                <?php 
                $q = "SELECT * FROM events ORDER BY datepub DESC LIMIT 2";
                $s = $db->query($q);
                while($d = $s->fetch()){
                ?>
                <!-- Carousel Events -->
                <div class="carousel-cell">
                    <div class="slider-img" style="background-image: url('./admin/assets/img/<?php echo $d['file_name1']; ?>')">
                        <div class="container">
                            <div class="row slider-text">
                                <div class="col-md-8 col-sm-12 text-center" data-aos="fade-up">
                                    <h1><?php echo $d['titleevent']; ?></h1>
                                    <p class="mb-5"><?php echo $d['descripevent']; ?></p>
                                    <form action="./events-details" method="POST">
                                        <input type="hidden" name="manger" value="<?php echo "".$d["idevent"]."" ?>"></input>
                                        <button class="btn btn-success" type="submit">Voir Plus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }      
                ?>
                <!-- Carousel Contact -->
                <div class="carousel-cell">
                    <div class="slider-img" style="background-image: url('./assets/img/10.jpg')">
                        <div class="container">
                            <div class="row slider-text">
                                <div class="col-md-8 col-sm-12 text-center" data-aos="fade-up">
                                    <h1>Contactez Nous</h1>
                                    <a href="./contact.php" class="btn btn-success">Contactez-Nous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Cells End -->
            </div>
            <!-- Main Carousel End -->
            <!-- About Main -->
            <div class="about-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 data-aos="fade-up">Qui Sommes-Nous ?</h2>
                        </div>
                    </div>
                    <div class="row stretch">
                        <div class="col-lg-4">
                            <div class="fancybox" data-aos="fade-up">
                                <h2 class="fancybox-header">Qui Sommes-Nous ?</h2>
                                <p>L’Association des REssortissants de la Ville BOngouanou en abregé AREVBO a été créée le 01 Juin 1986.</p>
                                <p>Elle est régie par la loi N 60-315 du 21 septembre 1960 relative aux associations.</p> 
                                <p>Son siège est fixé à Bongouanou. Mais il peut être transféré en cas de besoin en tout autre lieu du territoire national sur décision de l’assemblée générale.</p>
                                <a href="./about.php?history" class="btn btn-success btn-sm mt-5">En Savoir Plus</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="owl-carousel owl-theme owl-loaded">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        <div class="owl-item">
                                            <img src="./assets/img/2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="owl-item">
                                            <img src="./assets/img/7.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="owl-item">
                                            <img src="./assets/img/12.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-dots">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Main End -->
            <!-- Events Main -->
            <div class="events-main">
                <div class="container">
                <!-- Events Main Title -->
                    <div class="row title">
                        <div class="col-md-7" data-aos="fade-right">
                            <a href="./events.php">
                                <h3 class="title-header">Nos Evenements</h3>
                            </a>
                        </div>
                        <div class="col-md-5" data-aos="fade-left">
                            <a href="./events.php">
                                <p>Voir tous nos evenements <i data-feather="arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
                <!-- Events Main Title End -->
                <!-- Events Main Content -->
                    <div class="row events-list" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php 
                                $q = "SELECT * FROM events ORDER BY datepub DESC LIMIT 2";
                                $s = $db->query($q);
                                while($d = $s->fetch()){
                                ?>
                                <div class="col-lg-4 bg-image mt-5" style="background-image: url('./admin/assets/img/<?php echo $d['file_name1']; ?>');"></div>
                                <div class="col-lg-8 mt-5">
                                    <h2><?php echo $d['titleevent']; ?></h2>
                                    <p class="events-desc"><?php echo $d['descripevent']; ?></p>
                                    <span class="events-inline events-rounded">
                                        <img src="./admin/assets/img/<?php echo $d['file_name2']; ?>" alt="" class="img-fluid" width="40" height="40">
                                        <img src="./admin/assets/img/<?php echo $d['file_name3']; ?>" alt="" class="img-fluid" width="40" height="40">
                                        <img src="./admin/assets/img/<?php echo $d['file_name4']; ?>" alt="" class="img-fluid" width="40" height="40">
                                        <img src="./admin/assets/img/<?php echo $d['file_name5']; ?>" alt="" class="img-fluid" width="40" height="40">
                                    </span>
                                    <span class="events-inline">
                                        <p class="events-type">Evenements</p>
                                        <p class="events-divider"> | </p>
                                        <p class="events-time"><i data-feather="clock"></i> <?php echo $d['datepub']; ?></p>
                                    </span>
                                    <form action="./events-details.php" method="POST">
                                        <input type="hidden" name="manger" value="<?php echo "".$d["idevent"]."" ?>"></input>
                                        <button type="submit" class="btn btn-success">Voir Plus</button>
                                    </form>
                                </div>
                                <?php
                                }      
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Events Main Content End -->
                </div>
            </div>
            <!-- Events Main End -->
            <!-- News Main -->
            <div class="news-main">
                <div class="container">
                    <div class="row title">
                        <div class="col-md-7" data-aos="fade-right">
                            <a href="./news.php">
                                <h3 class="title-header">Actualites</h3>
                            </a>
                        </div>
                        <div class="col-md-5" data-aos="fade-left">
                            <a href="./news.php">
                                <p>Voir l'Actualite <i data-feather="arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
                    <!-- News Main Content -->
                    <div class="row news-list">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php 
                                $q = "SELECT * FROM actualite ORDER BY dateactu DESC LIMIT 2";
                                $s = $db->query($q);
                                while($d = $s->fetch()){
                                ?>
                                <div class="col-lg-4 bg-image mt-5" style="background-image: url('./admin/assets/img/<?php echo $d['file_name']; ?>');"></div>
                                <div class="col-lg-8 mt-5">
                                    <h2><?php echo $d['titleactu']; ?></h2>
                                    <p class="news-desc"><?php echo substr($d['texteactu'], 0,100); ?>...</p>
                                    <span class="news-inline">                                        
                                        <p class="news-type">Actualites</p>
                                        <p class="news-divider"> | </p>
                                        <p class="news-time"><i data-feather="clock"></i> <?php echo $d['dateactu']; ?></p>
                                    </span>
                                    <form action="./news-details.php" method="POST">
                                        <input type="hidden" name="manger" value="<?php echo "".$d["idactu"]."" ?>"></input>
                                        <button type="submit" class="btn btn-success">En Savoir Plus</button>
                                    </form>
                                </div>
                                <?php
                                }      
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- News Main Content End -->
                </div>
            </div>
            <!-- News Main End -->
        </div>
        <!-- Content End -->
        <!-- Top the Top Buton -->
        <button onclick="topFunction()" id="top">
            <i data-feather="chevron-up"></i>
        </button>
        <!-- Top the Top Buton End -->
        <?php
        include('./includes/footer.php');
        function compter_visite(){
            global $pdo;
            $ip   = $_SERVER['REMOTE_ADDR']; 
            $date = date('Y-m-d');           
            $query = $pdo->prepare("INSERT INTO stat_visite (ip , datevisite , pagesvues) VALUES (:ip , :date , 1)
                ON DUPLICATE KEY UPDATE pagesvues = pagesvues + 1");
            $query->execute(array(
                ':ip'   => $ip,
                ':date' => $date
            ));
        }
        ?>
        <!--JQuery Bootstrap JS-->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <!--Bootstrap + Popper JS -->
        <script src="./js/bootstrap.bundle.min.js"></script>
        <!--Flickity JS -->
        <script src="./js/flickity.pkgd.min.js"></script>
        <!--Owl Carousel JS-->
        <script src="./js/owl.carousel.min.js"></script> 
        <!--AOS JS-->
        <script src="./js/aos.js"></script>
        <!-- Feather JS -->
        <script>feather.replace()</script>
        <!-- JQuery JS -->
        <script src="./js/main.js"></script> 
        <!-- Top the top JS -->
        <script>
            mybutton = document.getElementById("top");
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- Vanilla JS -->
        <script src="./js/app.js"></script>
    </body>
</html>