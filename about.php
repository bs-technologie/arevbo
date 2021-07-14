<!DOCTYPE html>
<html lang="FR">
    <head>
        <title>Arevbo - Association des Ressortissants de la Ville de Bongouanou</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <!--Slick CSS-->
        <link rel="stylesheet" type="text/css" href="./css/slick.css">
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
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">A Propos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- About Page Content -->
        <div class="about">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Sidebar -->
                        <?php 
                        include("./includes/pages/sidebar.php");
                        ?>
                        <!-- Sidebar End -->
                        <!-- Sidebar Content -->
                        <div class="col-lg-9">
                            <?php if (isset($_GET['history'])){include("./includes/pages/history.php");}?>
                            <?php if (isset($_GET['goal'])){include("./includes/pages/goal.php");}?>
                            <?php if (isset($_GET['teams'])){include("./includes/pages/teams.php");}?>
                            <?php if (isset($_GET['leaders'])){include("./includes/pages/leaders.php");}?>
                            <?php if (isset($_GET['city'])){include("./includes/pages/city.php");}?>
                        </div>
                        <!-- Sidebar Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Page Content End -->
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
        <script type="text/javascript">
            $(document).ready(function(){
                $('.about-caroussel').slick({
                    dots: true,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 3,
                    adaptiveHeight: true
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