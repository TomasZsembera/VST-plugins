<?php
session_start();
require_once 'connection.php';
require_once 'class.php';
$addToC = new Kosik($conn);
$addToC->addToCart($_GET['id']);
?>