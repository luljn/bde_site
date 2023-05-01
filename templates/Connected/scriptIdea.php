<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $database = new DatabaseConnection;

        $email = $_POST['email'];

        $nom = $_POST['name'];
        $description = $_POST['message']; // The description of the idea.
        $date = $_POST['date'];
        $email = $_POST['email'];
        $image = 'none';

        $statement = "SELECT id_user AS id FROM users WHERE email = '{$email}'";
        $query = $database->getConnection()->prepare($statement);
        $query->execute();
        $resultat = $query->fetch();
        $query->closeCursor();
        $id_user = $resultat['id'];

        $statement_1 = "INSERT INTO ideas (name,description,date,number_of_votes,is_paid,image,id_user)
                       VALUES
                       ('{$nom}','{$description}','{$date}',0,false,'{$image}',{$id_user});";
        $query_1 = $database->getConnection()->prepare($statement_1);
        $query_1->execute();
        $query_1->closeCursor();
    
    header("location: http://localhost:4000/templates/Connected/IdeaBox.php");
    exit;
    