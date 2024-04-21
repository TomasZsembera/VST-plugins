<header class="container main-header">
    <div>
        <a href="index.php">
            <img src="img/logo.png" height="40">
        </a>
    </div>
    <!--Navigacia-->
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
            <li><a href="index.php">Domov</a></li>
            <li><a href="produkty.php">Produkty</a></li>
            <li><a href="portfolio.php">Portfólio</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <?php if (isset($_SESSION['email'])) { ?>
                <li><a href="logout.php">Odhlásiť sa</a></li>
            <?php } else { ?>
                <li><a href="login.php">Prihlásiť sa</a></li>
            <?php } ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>