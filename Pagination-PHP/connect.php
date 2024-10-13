<?php
try{
    // Connexion à la base
    $db = new PDO('mysql:host=localhost;dbname=pagination_php', 'root', ''); // Le DSN à l'interieur 
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}