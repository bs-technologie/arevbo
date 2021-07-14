<?php 
include "database.php";
if(isset($_POST['submit'])){
$name = isset($_POST['name'])?$_POST['name']: NULL;
$phone = isset($_POST['phone'])?$_POST['phone']: NULL;
$email = isset($_POST['email'])?$_POST['email']: NULL;
$message = isset($_POST['message'])?$_POST['message']: NULL;
$q = "INSERT INTO contact(nom, telephone, email, messages) VALUES('$name', '$phone' ,'$email', '$message')";
$r = $db->prepare($q);
$r->execute();
}
?>
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
                            <li class="breadcrumb-item active" aria-current="page">Message envoyé</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Message Page Content -->
        <div class="message">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Votre message a bien été envoyé, nous vous remercions d'avoir pris de votre temps.</h3>
                </div>
                <div class="row justify-content-center mt-3">
                    <a class="btn btn-success" href="./index.php">Retour à l'accueil</a>
                </div>
            </div>
        </div>
        <!-- Message Page Content End -->
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