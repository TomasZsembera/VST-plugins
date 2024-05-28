<?php
session_start();
include_once '../includes/header.php';
require_once '../includes/connection.php';
require_once "../includes/class.php";
if (isset($_GET['id'])) {
    $product = new Produkty($conn);
    $PRODUKT = $product->getProduct($_GET['id']);
}
if (isset($_POST['submit'])) {
    $objednavky = new Kosik($conn);
    $objednavky->addToCart($_POST['produkt_id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Doplnenie metadata-->
    <meta name="description" content="Main">
    <meta name="keywords" content="Domov">
    <meta name="author" content="Tomáš Zsembera">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<main>

    <body>
<?php 
    if ($PRODUKT) {
        echo "<div class='product-container'>";
        echo "<img class='product-image' src='../img/" . $PRODUKT['obrazok'] . "' alt='product'>";
        echo "<div class='product-info'>";
        echo "<h1 class='product-title'>" . $PRODUKT['nazov'] . "</h1>";
        echo "<p class='product-title'>" . $PRODUKT['cena'] . " €</p>";
        echo "<form method='POST'>";
        echo "<input type='hidden' name='produkt_id' value='" . $PRODUKT['produkt_id'] . "'>";
        echo "<input type='submit' name='submit' class='pridat' value='Pridať do košíka'>";
        echo "</form>";
        echo "<p class='product-description'>" . $PRODUKT['popis'] . "</p>";
        echo "</div></div>";
    }
?>
    

    </body>
</main>
<?php include_once '../includes/footer.php'; ?>


<script src="../js/menu.js"></script>
<script src="../js/slider.js"></script>