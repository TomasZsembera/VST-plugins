<?php
session_start();
include_once '../includes/header.php';
require_once '../includes/connection.php';
require_once "../includes/class.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
        <br>
        <br>
        <br>
        <form id="createProduct" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Product Name" id="productName" name="productName" required><br>
            <input type="number" step="0.01" placeholder="Product Price" id="productPrice" name="productPrice"
                required><br>
            <textarea placeholder="Product Description" id="productDescription" name="productDescription"
                required></textarea><br>
            <input type="file" id="productImage" name="productImage" required><br>
            <input type="submit" value="Create Product" name="submit">
        </form>


    </body>
</main>


<script src="../js/menu.js"></script>
<script src="../js/slider.js"></script>