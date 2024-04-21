<?php
// Databázové údaje
$db_host = 'localhost';
$db_name = 'VST-plugins';
$db_user = 'root';
$db_pass = '';

try {
    // Vytvorenie pripojenia
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // Nastavenie režimu výnimiek
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    // V prípade chyby
    echo "Pripojenie zlyhalo: " . $e->getMessage();
}
?>