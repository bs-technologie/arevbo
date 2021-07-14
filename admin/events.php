<!DOCTYPE html>
<html lang="FR">
    <head>
        <title>Arevbo - Admin</title>
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
                        <p>Ajouter un évènement</p>
                    </div>
                </div>
            </nav>
            <?php 
            include('./includes/sidebar.php');
            ?>
            <!--Events Content -->
            <div class="content">
                <form action="./events-sent.php" class="form m-3" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="text-info">Titre de l'évènement :</label><br>
                        <input type="text" id="titleevent" name="titleevent" class="form-control" placeholder="Ecrivez votre titre..." required>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-info">Choisir une image de presentation :</label><br>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                        <input type="file" name="file1" size="50000000">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-info">Choisir des images pour la galerie :</label><br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file2" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file3" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file4" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file5" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file6" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file7" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file8" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file9" size="50000000">
                                </div>
                                <div class="col-md-3 my-1">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                                    <input type="file" name="file10" size="50000000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="text-info">Description de l'évènement :</label><br>
                        <textarea id="descripevent" name="descripevent" class="form-control" placeholder="Ecrivez une description..." cols="30" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success" value="Ajouter un évènement">
                    </div>
                </form>
            </div>
        </div>
        <!--JQuery JS-->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <!--Bootstrap + Popper JS -->
        <script src="./js/bootstrap.bundle.min.js"></script>
        <!-- Feather JS -->
        <script>feather.replace()</script>
        <!-- JQuery JS -->
        <script src="./js/main.js"></script> 
        <!-- Vanilla JS -->
        <script src="./js/app.js"></script>
    </body>
</html>