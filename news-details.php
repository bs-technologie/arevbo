<!DOCTYPE html>
<html lang="FR">
    <head>
        <title>Arevbo - Association des Ressortissants de la Ville de Bongouanou</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
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
                $q = "SELECT * FROM actualite WHERE idactu = '$id'";
                $s = $db->query($q);
                while($d = $s->fetch()){
                ?>
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="./news.php">Actualités</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $d['titleactu']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- News Details Content -->
        <div class="news-details">
            <div class="container">
                <h2><?php echo $d['titleactu']; ?></h2>
                <span class="news-inline">                                        
                    <p class="news-type">Actualites</p>
                    <p class="news-divider"> | </p>
                    <p class="news-time"><i data-feather="clock"></i> <?php echo $d['dateactu']; ?></p>
                </span>
                <img src="./admin/assets/img/<?php echo $d['file_name']; ?>" alt="" class="img-fluid w-100">
                <p><?php echo $d['texteactu']; ?></p>
            </div>
        </div>
        <?php
        }      
        ?>
        <!-- News Details Content End -->
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