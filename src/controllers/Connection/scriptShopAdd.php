<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $database = new DatabaseConnection;

    

        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $categorie = $_POST['categorie'];
        $qte = $_POST['qte'];
        $image = $_POST['image'];

        $statement = "INSERT INTO products (name,description,price,id_category,stock_quantity,image)
                      VALUES
                      ('{$nom}', '{$description}', '{$prix}',{$categorie},'{$qte}','{$image}');";
        $query = $database->getConnection()->prepare($statement);
        $query->execute();
        $query->closeCursor();
    
/*
    elseif(isset($_POST['nom']) && !isset($_POST['description'])){

        $nom = $_POST['nom'];
        $statement = "DELETE FROM products WHERE name = '{$name}';";
        $query = $database->getConnection()->prepare($statement);
        $query->execute();
        $query->closeCursor();
    }
*/
    header("location: http://localhost:4000/src/controllers/Connection/shop.php");
    exit;
    