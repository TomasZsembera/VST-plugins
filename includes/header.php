<header class="container main-header">
    <div>
        <a href="../public_html/index.php">
            <img src="../img/logo.png" height="40">
        </a>
    </div>
    <!--Navigacia-->
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
            <li><a href="../public_html/index.php">Domov</a></li>
            <li><a href="../public_html/produkty.php">Produkty</a></li>
            <li><a href="../public_html/portfolio.php">Portfólio</a></li>
            <li><a href="../public_html/qna.php">Q&A</a></li>
            <li><a href="../public_html/kontakt.php">Kontakt</a></li>
            <?php if (isset($_SESSION['email'])) { ?>
                <li><a href="../public_html/logout.php">Odhlásiť sa</a></li>
            <?php } else { ?>
                <li><a href="../public_html/login.php">Prihlásiť sa</a></li>
            <?php } ?>
            <li><a href="../public_html/shopping_c.php"><i class="fa fa-shopping-cart kosik"></i></a></li>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>