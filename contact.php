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
                            <li class="breadcrumb-item active" aria-current="page">Nous Joindre</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Contact Page Content -->
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="./message-sent.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom :</label>
                                        <input type="text" id="name" name ="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Telephone :</label>
                                        <input type="text" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="messages">Ecrire un Message :</label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Envoyer un Message" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 mt-5 pl-2 pl-lg-5 contact-info">
                        <div class="col-md-8 mx-auto">
                            <h4 class="mb-5">Info Contact</h4>
                            <p class="d-inline-block mb-5">
                                <i data-feather="map-pin"></i>
                                <span>Angre 22e, Cocody-Abidjan, Côte d'Ivoire</span>
                            </p>
                            <p class="d-inline-block mb-5">
                                <i data-feather="phone"></i>
                                <span>+225 00 12 34 56</span>
                            </p>
                            <p class="d-inline-block">
                                <i data-feather="mail"></i>
                                <span>info@arevbo.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Page Content End -->
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
</html>