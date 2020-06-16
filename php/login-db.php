<?php

// Ce fichier sert uniquement à ouvrir une connexion vers la BDD, il est utilisé avec un include quand il est nécessaire
$dsn = 'mysql:dbname=iia;host=127.0.0.1';
    $username = 'root';
    $password = '';

    $db = new PDO($dsn, $username, $password);
    
?>