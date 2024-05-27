<?php
session_start();
include_once '../includes/header.php';
require_once '../includes/connection.php';
require_once "../includes/class.php";
$CART = new Kosik($conn);
if (isset($_POST['remove'])) {
    $id = $_POST['id'];
    $CART->removeFromCart($id);
}
$CART = $CART->getCart();
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
    <label class="chckt-label" for="name">Meno a Priezvisko:</label>
    <input required="" placeholder="Meno" class="chckt-input" type="text">
    <br>
    <br>
    <input required="" placeholder="Priezvisko" class="chckt-input" type="text">
  </div>
  <div class="chckt-group">
    <label class="chckt-label" for="email">Email:</label>
    <input required="" placeholder="Enter your email" class="chckt-input" name="email" id="email" type="email">
  </div>
  <div class="chckt-group">
    <label class="chckt-label" for="message">Adresa:</label>
    <input required="" placeholder="Adresa" class="chckt-input-a" name="message" id="message" type= "text">
    <input required="" placeholder="Mesto" class="chckt-input-a" name="message" id="message" type= "text">
  </div>
  <button class="chckt-button" type="submit">CHECKOUT</button>
</form>




  
  <div class="master-container">
    <div class="card cart">
      <label class="title">Your cart</label>
      <div class="products">
        <?php
        
        
        if (isset($_SESSION['cart'])) {
          foreach ($_SESSION['cart'] as $index => $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '" height="60" width="60" alt="' . $product['name'] . '">';
            echo '<div><span>' . $product['name'] . '</span></div>';
            echo '<label class="price small">€' . $product['price'] . '</label>';
            echo '<form action="" method="POST">';
            echo '<input type="hidden" name="id" value="' . $index . '">';
            echo '<button type="submit" name="remove" class="rmv-btn">Remove</button>';
            echo '</form>';
            echo '</div>';
          }
        
          }
        
      
        ?>
    
      </div>
   </div>



  <?php
  $subtotal = 0;
  if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $product) {
          $subtotal += $product['price'];
      }
  }
  ?>
  
  <div class="card checkout">
      <label class="title">Checkout</label>
      <div class="details">
        <span>Total:</span>
        <span><?php echo number_format($subtotal, 2); ?>€</span>
      </div>
      <div class="checkout--footer">
        <label class="price"><?php echo number_format($subtotal, 2); ?>€</label>
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