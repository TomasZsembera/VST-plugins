<?php
require_once '../includes/connection.php';
require_once "../includes/class.php";
if (isset($_GET['id'])) {
   $delete = new Produkty($conn);
    $delete->deleteProduct($_GET['id']);
}
?>