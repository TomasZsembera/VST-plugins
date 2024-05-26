<?php
session_start();
include_once '../includes/header.php';
require_once '../includes/connection.php';
require_once "../includes/class.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET['id'])) {
    $product = new Produkty($conn);
    $PRODUKT = $product->getProduct($_GET['id']);
    if ($PRODUKT) {
        echo $PRODUKT['nazov'];
    } else {
        echo "Product not found";
    }
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
        echo "<p class='product-description'>" . $PRODUKT['popis'] . "</p>";
        echo "</div></div>";
    }
?>

    </body>
</main>
<?php include_once '../includes/footer.php'; ?>


<script src="../js/menu.js"></script>
<script src="../js/slider.js"></script>