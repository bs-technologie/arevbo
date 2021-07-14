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
            <?php
            include "database.php";
            ?>
            <nav class="navbar navbar-expand fixed-top top-header">
                <div class="container-fluid">
                    <div class="navbar-left">
                        <a href="./index.php" class="navbar-brand">
                            <img src="./assets/logo/logo.png" alt="" width=50 height=50>
                            <p>Arevbo</p>
                        </a>
                    </div>
                    <div class="page-title">
                        <p>Dashboard</p>
                    </div>
                    <form action="./search.php" class="navbar-search m-3" method="POST">
                        <div class="d-flex">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Rechercher...">
                            </div>
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-success">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
            <?php 
            include('./includes/sidebar.php');
            ?>
            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Cards -->
                    <div class="row">
                        <?php 
                        $q = "SELECT COUNT(*) AS nombre FROM stat_visite";
                        $s = $db->query($q);
                        while($d = $s->fetch()){
                        ?>
                        <!-- Card Visitors -->
                        <div class="col-12 col-lg-6 col-xl-3">
                            <div class="card card-visitors">
                                <div class="card-body">
                                    <p class="card-title">Nombres de visiteurs</p>
                                    <p class="card-data"><?php echo $d['nombre'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }      
                        ?>
                        <!-- Card News -->
                        <?php 
                        $q = "SELECT COUNT(*) AS nombre FROM actualite";
                        $s = $db->query($q);
                        while($d = $s->fetch()){
                        ?>
                        <div class="col-12 col-lg-6 col-xl-3">
                            <a href="./list-news.php" class="card card-news">
                                <div class="card-body">
                                    <p class="card-title">Actualites ajoutées</p>
                                    <p class="card-data"><?php echo $d['nombre']; ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                        }      
                        ?>
                        <!-- Card Events -->
                        <?php 
                        $q = "SELECT COUNT(*) AS nombre FROM events";
                        $s = $db->query($q);
                        while($d = $s->fetch()){
                        ?>
                        <div class="col-12 col-lg-6 col-xl-3">
                            <a href="./list-events.php" class="card card-events">
                                <div class="card-body">
                                    <p class="card-title">Evenements ajoutés</p>
                                    <p class="card-data"><?php echo $d['nombre']; ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                        }      
                        ?>
                        <!-- Card Messages -->
                        <?php 
                        $q = "SELECT COUNT(*) AS nombre FROM contact";
                        $s = $db->query($q);
                        while($d = $s->fetch()){
                        ?>
                        <div class="col-12 col-lg-6 col-xl-3">
                            <a href="./contact.php" class="card card-contact">
                                <div class="card-body">
                                    <p class="card-title">Boîte de reception</p>
                                    <p class="card-data"><?php echo $d['nombre']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                        <?php
                        }      
                        ?>
                    <!-- Charts -->
                    <!-- Main Chart -->
                    <div class="row charts">
                        <div class="col-12">
                            <div class="card">
                                <canvas id="mainChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Others Charts -->
                    <div class="row charts">
                        <!-- Pie Charts -->
                        <div class="col-lg-4">
                            <div class="card">
                                <canvas id="secondChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                        <!-- Views Charts -->
                        <div class="col-lg-4">
                            <div class="card">
                                <canvas id="thirdChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                        <!-- Calendar Charts -->
                        <div class="col-lg-4">
                            <div class="card align-items-center">
                                <!-- JS Calendar -->
                                <div class="auto-jsCalendar orange" 
                                data-language="fr" 
                                data-day-format="DDD"
                                data-month-format="month YYYY"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--JQuery JS-->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <!--Bootstrap + Popper JS -->
        <script src="./js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS JS -->
        <script src="./js/Chart.bundle.min.js"></script>
        <script>
            var ctx = document.getElementById('mainChart');
            var mainChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        <script>
            var cty = document.getElementById('secondChart');
            var secondChart = new Chart(cty, {
                type: 'doughnut',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        <script>
            var ctz = document.getElementById('thirdChart');
            var thirdChart = new Chart(ctz, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        <!-- Feather JS -->
        <script>feather.replace()</script>
        <!-- My JQuery JS -->
        <script src="./js/main.js"></script> 
        <!-- Vanilla JS -->
        <script src="./js/app.js"></script>
    </body>
</html>