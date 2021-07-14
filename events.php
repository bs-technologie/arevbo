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
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Evenements</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <?php 
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        include "database.php";
            $sql = 'SELECT COUNT(*) AS idevent FROM events';
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            $nbArticles = (int) $result['idevent'];
            $parPage = 5;
            $pages = ceil($nbArticles / $parPage);
            $premier = ($currentPage * $parPage) - $parPage;
            $sql = 'SELECT * FROM events ORDER BY idevent DESC LIMIT :premier, :parpage;';
            $query = $db->prepare($sql);
            $query->bindValue(':premier', $premier, PDO::PARAM_INT);
            $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
            $query->execute();
            ;
        while($d = $query->fetch(PDO::FETCH_ASSOC)){
        ?>  
        <!-- Events Page Content -->
        <div class="events">
            <div class="container">
                <div class="row events-list">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 bg-image" style="background-image: url('./admin/assets/img/<?php echo $d['file_name1']; ?>')"></div>
                            <div class="col-lg-8">
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
                                <form action="./events-details" method="POST">
                                    <input type="hidden" name="manger" value="<?php echo "".$d["idevent"]."" ?>"></input>
                                    <button class="btn btn-success" type="submit">Voir Plus</button>
                                </form>
                            </div>
                        </div>
                        <hr class="divider">
                    </div>
                </div>
            </div>
        </div>
        <?php
        }      
        ?>
        <!-- Events Page Content End -->
        <!-- Pagination -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                                <a class="page-link" href="?page=<?= $currentPage - 1 ?>" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">Precedent</span>
                                </a>
                            </li>
                            <?php for($page = 1; $page <= $pages; $page++): ?>
                            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>" aria-current="page">
                                <a href="?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                            <?php endfor ?>
                            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                                <a href="?page=<?= $currentPage + 1 ?>" class="page-link">
                                    <span aria-hidden="true">Suivant</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
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