<?php
include_once '../includes/header.php';
require_once '../includes/connection.php';
require_once '../includes/class.php';
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $heslo = $_POST['heslo'];

    $login = new Login($conn);
    $login->login($email, $heslo);
}
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kontakt">
    <meta name="keywords" content="Formular">
    <meta name="author" content="Tomáš Zsembera">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <main>

        <section class="container">
            <div class="row">

                <div class="col-50 text-center">
                    <h3>Login</h3>
                    <!--formulár-->
                    <form id="contact" method="post">
                        <input type="email" placeholder="email" id="email" name="email" required><br>
                        <input type="password" placeholder="heslo" id="heslo" name="heslo" required><br>
                        <input type="submit" value="Log In" name="submit">
                    </form>



                </div>
            </div>
        </section>
    </main>
    <?php include_once '../includes/footer.php'; ?>
    <script src="../js/menu.js"></script>
</body>

</html>