<?php
session_start();
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="qna">
  <meta name="keywords" content="Otazky">
  <meta name="author" content="Tomáš Zsembera">
  <title>Moja stránka</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/accordion.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Ak ťa to baví, dáš do toho všetko. Ak do toho dáš všetko, výjde to. Je to len otázkou času
                kedy...</em></strong></p>
        </div>
      </div>
    </section>
    <section class="container">
      <!--Otázky (Po rozkliknuti zobrazená odpoveď)-->
      <div class="accordion">
        <div class="question">Od kedy fungujeme?</div>
        <div class="answer">Približne od leta 2020. Ale úplne začiatky boli už okolo 2019.</div>
      </div>
      <div class="accordion">
        <div class="question">Ako fungujeme?</div>
        <div class="answer">Fungujeme ako trojica: Tomiiq, rolkuxx a Texx. Tomiiq sa stará o celkový zvuk a beaty, kým
          dvojica rolkuxx a Texx stoja za kreatívnou stránkou.</div>
      </div>
      <div class="accordion">
        <div class="question">Čo vlastne robíme?</div>
        <div class="answer">DOBRUHUDBU</div>
      </div>
    </section>
    </section>
    </div>
  </main>
  <?php include_once 'footer.php'; ?>
  <script src="js/accordion.js"></script>
  <script src="js/menu.js"></script>
</body>

</html>