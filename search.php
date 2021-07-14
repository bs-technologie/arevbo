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
        ?>
        <!-- Breadcrumb-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rechercher</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <?php
            include "database.php";
            $resultRecherche = array();
            if(isset($_POST['search'])) {
            $chainesearch = trim(strip_tags($_POST['search']));  
            $requete = 'SELECT * FROM actualite WHERE titleactu LIKE :searchString OR texteactu LIKE :searchString'; 
            $res = $db->prepare($requete);
            $res->bindValue(':searchString', '%'.$chainesearch.'%');
            if($res->execute()){
                $resultRecherche = $res->fetchAll(PDO::FETCH_ASSOC);
            }
            else {
                var_dump($res->errorInfo());
            die;
            }
        ?>
        <!-- Search Page Content -->
        <div class="search-page">
            <div class="container">
                <h1>Resultats de votre recherche : <?php echo $_POST['search']; ?></h1>
                <hr class="divider">
                <?php
                    if(!empty($resultRecherche)){ 
                    foreach($resultRecherche as $donnees){
                ?>
                <div class="row news-list">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 bg-image" style="background-image: url('./admin/assets/img/<?php echo $donnees['file_name']; ?>')"></div>
                            <div class="col-lg-8">
                                <h2><?php echo $donnees['titleactu']; ?></h2>
                                <p class="news-desc"><?php echo substr($donnees['texteactu'], 0,100); ?>...</p>
                                <span class="news-inline">                                        
                                    <p class="news-type">Actualites</p>
                                    <p class="news-divider"> | </p>
                                    <p class="news-time"><i data-feather="clock"></i> <?php echo $donnees['dateactu']; ?></p>
                                </span>
                                <form action="./news-details" method="POST">
                                    <input type="hidden" name="manger" value="<?php echo "".$donnees["idactu"]."" ?>"></input>
                                    <button type="submit" class="btn btn-success">En Savoir Plus</button>
                                </form>
                            </div>
                        </div> 
                        <hr class="divider"> 
                        <?php            
                                }
                            }else {
                                    echo '<h4 class="text-center">Dommage il n\'y a pas d\'articles correspondant à votre recherche :-(</h4>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Search Page Content End -->
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