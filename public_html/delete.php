<?php
require_once '../includes/connection.php';
require_once "../includes/class.php";

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

if (isset($_GET['id'])) {
   $delete = new Produkty($conn);
    $delete->deleteProduct($_GET['id']);
}
?>