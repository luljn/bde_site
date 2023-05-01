<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $database = new DatabaseConnection;

    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    
    /*
    $statement = "INSERT INTO manifestations(name,description,date,status_manif,is_paid,is_recurent,is_confirmed,image)
                    SELECT name,description,date,True,true,true,true,image FROM ideas WHERE name='{$name}';
                    DELETE FROM ideas WHERE name='{$name}';";*/

    /*
    $statement = "INSERT INTO manifestations (name,description,date,status_manif,number_of_like,is_paid,is_recurent,image)
                  VALUES
                  ('{$name}', '{$description}', '{$date}', 1,0,0,0,'');
                  DELETE from ideas WHERE name = '{$name}';";

    $query = $database->getConnection()->prepare($statement);
    $query->execute();
    $query->closeCursor();

    /*
    $statement_1 = "DELETE from ideas WHERE name = '{$name}'";
    $query_1 = $database->getConnection()->prepare($statement_1);
    $query_1->execute();
    $resultat_1 = $query_1->fetchAll(PDO::FETCH_ASSOC);
    $query_1->closeCursor();
    */
    header("location: http://localhost:4000/src/controllers/Connection/IdeaBox.php");
    exit;

