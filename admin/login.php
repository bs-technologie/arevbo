<?php
include 'database.php';
session_start();
if(isset($_POST["login"])){  
     if(empty($_POST["username"]) || empty($_GET["password"])){  
          $message = '<label>Tous les champs sont requis</label>';  
}else{  
     $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
     $statement = $db->prepare($query);  
     $statement->execute(  
          array(  
               'username'     =>     $_POST["username"],  
               'password'     =>     $_POST["password"]  
               )  
          );  
     $count = $statement->rowCount();  
          if($count > 0){  
               $_SESSION["username"] = $_POST["username"];  
               header("location:dashboard.php");  
          }else{  
               $message = '<label>Mauvaises données</label>';  
          }  
     }  
}     
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
        <!--Login Content-->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 text-center">
                        <form method="GET" action="./login.php"  class="form my-5 mx-3">
                            <img src="./assets/logo/logo.png" alt="" width="75" height="75">
                            <h5>Connectez-vous à votre page administrateur</h5>
                            <label for="username" class="sr-only"></label><br>
                            <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" class="form-control" required autofocus>
                            <label for="password" class="sr-only"></label><br>
                            <input type="password" id="password" name="password" placeholder="Mot de passe" class="form-control" required autofocus>
                            <br>
                            <button type="submit" name="login" class="btn btn-success">Se Connecter</button>
                            <br>
                            <p class="text-muted my-5">© Arevbo - Admin - 2021</p>
                        </form>
                    </div>
                    <div class="col-lg-4"></div>
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