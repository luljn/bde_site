<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $database = new DatabaseConnection;

    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $is_paid = $_POST['is_paid'];
    $image = $_POST['image'];

    if($is_paid === '0'){

        $statement = "INSERT INTO manifestations (name,description,date,status_manif,number_of_like,is_paid,is_recurent,image)
                        VALUES
                        ('{$nom}', '{$description}', '{$date}',true,0,False,True,'{$image}');";
        $query = $database->getConnection()->prepare($statement);
        $query->execute();
        $query->closeCursor();
    }

     elseif($is_paid === '1'){

        $statement = "INSERT INTO manifestations (name,description,date,status_manif,number_of_like,is_paid,is_recurent,image)
                        VALUES
                        ('{$nom}', '{$description}', '{$date}',true,0,True,True,'{$image}');";
        $query = $database->getConnection()->prepare($statement);
        $query->execute();
        $query->closeCursor();
    }

    header("location: http://localhost:4000/src/controllers/Connection/futurEvents.php");
    exit;
