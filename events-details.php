<!DOCTYPE html>
<html lang="FR">
    <head>
        <title>Arevbo - Association des Ressortissants de la Ville de Bongouanou</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="./css/slick.min.css">
        <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
        <!-- Feather -->
        <script src="./js/feather.min.js"></script>
    </head>
    <body>
        <?php
        include('./includes/header.php');
        ?>
        <!-- Breadcrumb-->
        <div class="container">
            <div class="row">
                <?php 
                include "database.php";
                $id = isset($_POST['manger'])?$_POST['manger']: NULL;
                $q = "SELECT * FROM events WHERE idevent = '$id'";
                $s = $db->query($q);
                while($d = $s->fetch()){
                ?>
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="./events.php">Evenements</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $d['titleevent']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Events Details Content -->
        <div class="events-details">
            <div class="container">
                <h2><?php echo $d['titleevent']; ?></h2>
                <span class="events-inline">
                    <p class="events-type">Evenements</p>
                    <p class="events-divider"> | </p>
                    <p class="events-time"><i data-feather="clock"></i> <?php echo $d['datepub']; ?></p>
                </span>
                <!-- Galerie -->
                <div class="events-slide">
                    <div class="slide-main">
                        <img src="./admin/assets/img/<?php echo $d['file_name1']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name2']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name3']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name4']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name5']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name6']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name7']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name8']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name9']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name10']; ?>" alt="" class="img-fluid">
                    </div>
                    <div class="slide-nav">
                        <img src="./admin/assets/img/<?php echo $d['file_name1']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name2']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name3']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name4']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name5']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name6']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name7']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name8']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name9']; ?>" alt="" class="img-fluid">
                        <img src="./admin/assets/img/<?php echo $d['file_name10']; ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <!-- Galerie End -->  
            </div>
        </div>
        <?php 
        }
        ?>
        <!-- Events Details Content End -->
        <!-- Top the Top Buton -->
        <button onclick="topFunction()" id="top">
            <i data-feather="chevron-up"></i>
        </button>
        <!-- Top the Top Buton End -->
        <?php
        include('./includes/footer.php');
        ?>
        <!--JQuery Bootstrap JS-->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <!--Bootstrap + Popper JS -->
        <script src="./js/bootstrap.bundle.min.js"></script>
        <!-- Slick JS -->
        <script src="./js/slick.min.js"></script>
        <script>             
           $(document).ready(function(){ 
                $('.slide-main').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    fade: true,
                    autoplay: true,
                    asNavFor: '.slide-nav'
                });
                $('.slide-nav').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.slide-main',
                    centerMode: true,
                    focusOnSelect: true
                });
            });
        </script>
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