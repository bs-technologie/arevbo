<!DOCTYPE html>
<html lang="FR">
    <head>
        <title>Arevbo - Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <!-- ChartJS CSS -->
        <link rel="stylesheet" type="text/css" href="./css/Chart.min.css">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
        <!-- Feather script-->
        <script src="./js/feather.min.js"></script>
        <!-- jsCalendar CSS -->
        <link rel="stylesheet" type="text/css" href="./css/jsCalendar.css">
        <!-- jsCalendar script -->
        <script type="text/javascript" src="./js/jsCalendar.js"></script>
        <!-- jsCalendar French script -->
        <script type="text/javascript" src="./js/jsCalendar.lang.fr.js"></script>
    </head>
    <body>
        <!-- wrapper -->
        <div class="wrapper">
            <!-- navbar -->
            <nav class="navbar navbar-expand fixed-top top-header">
                <div class="container-fluid">
                    <div class="navbar-left">
                        <a href="./index.php" class="navbar-brand">
                            <img src="./assets/logo/logo.png" alt="" width=50 height=50>
                            <p>Arevbo</p>
                        </a>
                    </div>
                    <div class="page-title">
                        <p>Evenements ajoutés</p>
                    </div>
                    <a href="./events.php" class="btn btn-success m-3">Ajouter un évènement</a>
                </div>
            </nav>
            <?php 
            include('./includes/sidebar.php');
            ?> 
            <!-- List-Events Content -->
            <div class="content">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
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
                            <tr>
                                <th scope="row"><?php echo $d['idevent']; ?></th>
                                <td>
                                    <img src="./assets/img/<?php echo $d['file_name1']; ?>" alt="" width="75" height="75">
                                </td>
                                <td><?php echo $d['titleevent']; ?></td>
                                <td><?php echo $d['datepub']; ?></td>
                                <td><?php echo $d['descripevent']; ?></td>
                                <td>
                                    <form action="./events-delete.php" method="POST">
                                        <input type="hidden" name="manger" value="<?php echo "".$d["idevent"]."" ?>"></input>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }      
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        <!--JQuery JS-->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <!--Bootstrap + Popper JS -->
        <script src="./js/bootstrap.bundle.min.js"></script>
        <!-- Feather JS -->
        <script>feather.replace()</script>
        <!-- My JQuery JS -->
        <script src="./js/main.js"></script> 
        <!-- Vanilla JS -->
        <script src="./js/app.js"></script>
    </body>
</html>