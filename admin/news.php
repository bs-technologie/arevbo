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
                        <p>Ajouter une actualité</p>
                    </div>
                </div>
            </nav>
            <?php 
            include('./includes/sidebar.php');
            ?>
            <!--News Content -->
            <div class="content">
                <form class="form m-3" action="./news-sent.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="text-info">Titre de l'article :</label><br>
                        <input type="text" id="titleactu" name="titleactu" class="form-control" placeholder="Ecrivez le titre..." required>        
                    </div>
                    <div class="form-group">
                        <label for="" class="text-info">Choisir une image de présentation :</label><br>
                        <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                        <input type="file" name="file" size="50000000" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="texteactu" class="text-info">Ecrire l'article :</label><br>
                            <textarea id="texteactu" name="texteactu" class="form-control" placeholder="Ecrivez votre article..." cols="30" rows="10 " required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success" value="Ajouter l'actualité">
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