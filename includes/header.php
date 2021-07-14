 <!-- Header -->
        <!-- Mobile Nav -->
        <div id="Mobile-Nav" class="nav-overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
            <div class="nav-content">
                <a href="./about.php?history">A Propos</a>
                <a href="./events.php?events">Evenements</a>
                <a href="./news.php?news">Actualites</a>
                <a href="./contact.php?contact">Nous Joindre</a>
            </div>
        </div>
        <!-- Search Nav -->
        <div id="Search-Nav" class="overlay">
            <span class="closebtn" onclick="closeSearch()">x</span>
            <div class="overlay-content">
                <form action="./search.php" method="POST">
                    <input type="text" placeholder="Rechercher..." name="search">
                    <button type="submit">
                        <i data-feather="search"></i>
                    </button>
                </form>
            </div>
        </div>
        <!--Header Content -->
        <header>
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container">
                    <!-- Menu burger -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()">
                        <i data-feather="menu"></i>
                    </button>
                    <!-- Logo -->
                    <a href="./index.php" class="navbar-brand">
                        <img src="./assets/logo/logo.png" alt="Logo" class="img-brand">
                    </a>
                    <!-- Liens Navbar -->
                    <div class="navbar-menu">
                        <ul class="navbar-nav">
                            <li>
                                <a href="./about.php?history">A Propos</a>
                            </li>
                            <li>
                                <a href="./events.php">Evenements</a>
                            </li>
                            <li>
                                <a href="./news.php">Actualites</a>
                            </li>
                            <li>
                                <a href="./contact.php">Nous Joindre</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Search Navbar -->
                    <div class="navbar-search" onclick="openSearch()">
                        <button class="btn-search">
                            <i data-feather="search"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </header>