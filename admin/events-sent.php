<?php
include "database.php";
function Resize_picture($fichier,$maxWidth,$maxHeight){
    $imageinfo= getimagesize("$fichier");
    $iw=$imageinfo[0];
    $ih=$imageinfo[1];
    $widthscale = $iw/$maxWidth;
    $heightscale = $ih/$maxHeight;
    $rapport = $ih/$widthscale;
    if($rapport < $maxHeight)
        {$nwidth = $maxWidth;}
    else
        {$nwidth = $iw/$heightscale;}
    if($rapport < $maxHeight)
        {$nheight = $rapport;}
    else
        {$nheight = $maxHeight;}
} 
    foreach($_FILES as $files){
    $fileName = $files["name"]; 
    $uploadPath = "./assets/img/";
    $imageUploadPath = $uploadPath . $fileName; 
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
    $imageTemp = $files['tmp_name'];
    if(move_uploaded_file($imageTemp, $imageUploadPath)){
    echo 'Bien';
}
    else{
    echo 'Echec';
    break;
    }
}
$fileName1 = $_FILES['file1']['name'];
$fileName2 = $_FILES['file2']['name'];
$fileName3 = $_FILES['file3']['name'];
$fileName4 = $_FILES['file4']['name'];
$fileName5 = $_FILES['file5']['name'];
$fileName6 = $_FILES['file6']['name'];
$fileName7 = $_FILES['file7']['name'];
$fileName8 = $_FILES['file8']['name'];
$fileName9 = $_FILES['file9']['name'];
$fileName10 = $_FILES['file10']['name'];
$titre = isset($_POST['titleevent'])?$_POST['titleevent']: NULL;
$texte = isset($_POST['descripevent'])?$_POST['descripevent']: NULL;
$s ="INSERT INTO events (titleevent, descripevent, file_name1, file_name2, file_name3, file_name4, file_name5, file_name6, file_name7, file_name8, file_name9, file_name10) VALUES('$titre', '$texte','$fileName1', '$fileName2', '$fileName3', '$fileName4', '$fileName5', '$fileName6', '$fileName7', '$fileName8', '$fileName9', '$fileName10')";
$r = $db->query($s);
?>
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
                </div>
            </nav>
            <?php 
            include('./includes/sidebar.php');
            ?>
            <!-- Events-Sent Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <h1 class="text-center">Evenement Posté !</h1>
                        <p class="lead text-center"> Votre nouvel évènement a été posté avec succès !</p>
                    </div>
                    <div class="text-center">
                        <a href="./index.php" class="btn btn-success" >Retour à l'accueil</a>
                    </div>
                </div>
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