<?php
session_start();
include_once '../includes/header.php';

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
<div class="parent-container-chckt">
  <form class="colorful-form">
  <div class="chckt-group">
    <label class="chckt-label" for="name">Name:</label>
    <input required="" placeholder="Enter your name" class="chckt-input" type="text">
  </div>
  <div class="chckt-group">
    <label class="chckt-label" for="email">Email:</label>
    <input required="" placeholder="Enter your email" class="chckt-input" name="email" id="email" type="email">
  </div>
  <div class="chckt-group">
    <label class="chckt-label" for="message">Adress:</label>
    <input required="" placeholder="Enter your adress" class="chckt-input-a" name="message" id="message" type= "text">
  </div>
  <button class="chckt-button" type="submit">CHECKOUT</button>
</form>


  <div class="master-container">
  <div class="card cart">
    <label class="title">Your cart</label>
    <div class="products">
      <div class="product">
        <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
<rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
<path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
<path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
<path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
<path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
<path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
</svg>
        <div>
          <span>Cheese Burger</span>
        </div>
        
        <label class="price small">$23.99</label>
      </div>
    </div>
  </div>

  <div class="card coupons">
    <label class="title">Apply coupons</label>
    <form class="form">
        <input type="text" placeholder="Apply your coupons here" class="input_field">
        <button>Apply</button>
    </form>
  </div>

  <div class="card checkout">
    <label class="title">Checkout</label>
    <div class="details">
      <span>Your cart subtotal:</span>
      <span>47.99$</span>
      <span>Discount through applied coupons:</span>
      <span>3.99$</span>
      <span>Shipping fees:</span>
      <span>4.99$</span>
    </div>
    <div class="checkout--footer">
      <label class="price"><sup>$</sup>57.99</label>
    </div>
  </div>
</div>
</div>

  </main>


<?php include_once '../includes/footer.php'; ?>
<script src="../js/menu.js"></script>
<script src="../js/slider.js"></script>
<!--KREATIVNY KOD ZADANIE VEKU-->
<!--<script src="../js/vek.js"></script>-->
</body>

</html>