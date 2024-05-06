<?php
session_start();
include_once '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio">
  <meta name="keywords" content="Obrázky">
  <meta name="author" content="Tomáš Zsembera">
  <title>Moja stránka</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/banner.css">
  <link rel="stylesheet" href="../css/slider.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!--Obrázky s moznostou > alebo < -->
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Portfólio</h1>
      </div>
    </section>
    <section class="slides-container">
      <div class="slide fade">
        <img src="../img/portfolio1.jpg">

      </div>

      <div class="slide fade">
        <img src="../img/portfolio2.jpg">

      </div>

      <div class="slide fade">
        <img src="../img/portfolio3.jpg">

      </div>
      <div class="slide fade">
        <img src="../img/portfolio4.jpg">

      </div>
      <div class="slide fade">
        <img src="../img/portfolio5.jpg">

      </div>


      <a id="prev" class="prev">❮</a>
      <a id="next" class="next">❯</a>




  </main>
  <?php include_once '../includes/footer.php'; ?>
  <script src="../js/menu.js"></script>
  <script src="../js/accordion.js"></script>
  <script src="../js/slider.js"></script>
</body>

</html>