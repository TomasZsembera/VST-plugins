<?php
session_start();
include_once '../includes/header.php';
require_once '../includes/connection.php';
require_once "../includes/class.php";

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
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
  <link rel="stylesheet" href="../css/banner.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


  <main>
    <div class="produkty-container">
      <?php
      $objednavky = new Objednavky($conn);
      $objednavky->getObjednavky();
      ?>
    </div>
  </main>


  <?php include_once '../includes/footer.php'; ?>
  <script src="../js/menu.js"></script>
  <script src="../js/slider.js"></script>
  <!--KREATIVNY KOD ZADANIE VEKU-->
  <!--<script src="../js/vek.js"></script>-->
</body>

</html>