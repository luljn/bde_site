<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $database = new DatabaseConnection; 

    $nom = $_POST['nom'];
    $statement = "DELETE FROM products WHERE name = '{$nom}';";
    $query = $database->getConnection()->prepare($statement);
    $query->execute();

    header("location: http://localhost:4000/src/controllers/Connection/shop.php");
    exit;
    