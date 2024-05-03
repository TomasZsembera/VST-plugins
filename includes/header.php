<header class="container main-header">
    <div>
        <a href="../VST-plugins/index.php">
            <img src="../VST-plugins/img/logo.png" height="40">
        </a>
    </div>
    <!--Navigacia-->
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
            <li><a href="index.php">Domov</a></li>
            <li><a href="produkty.php">Produkty</a></li>
            <li><a href="../VST-plugins/portfolio.php">Portfólio</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <?php if (isset($_SESSION['email'])) { ?>
                <li><a href="../VST-plugins/login/logout.php">Odhlásiť sa</a></li>
            <?php } else { ?>
                <li><a href="../VST-plugins/login/login.php">Prihlásiť sa</a></li>
            <?php } ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>