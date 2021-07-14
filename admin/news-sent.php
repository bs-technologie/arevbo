<?php
include "database.php";
$statusMsg = " ";
$targetDir = "./assets/img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$titre = isset($_POST['titleactu'])?$_POST['titleactu']: NULL;
$texte = isset($_POST['texteactu'])?$_POST['texteactu']: NULL;
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = $db->query("INSERT INTO actualite (file_name, dateactu, titleactu, texteactu) VALUES ('".$fileName."', NOW(),'$titre', '$texte')");
            if($insert){
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
echo $statusMsg;
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
            <!-- News-Sent Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <h1 class="text-center">Actualité Postée !</h1>
                        <p class="lead text-center"> Votre nouvelle actualité a été posté avec succès !</p>
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