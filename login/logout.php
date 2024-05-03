<?php
session_start();

// Zrušenie session premenných
session_unset();
session_destroy();

// Presmerovanie na domovskú stránku alebo inú stránku
header('Location: ../index.php');
exit();
?>