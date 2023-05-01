<?php

    namespace src\model\AdminConnection;

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/controllers/AdminHomepage.php');
    use src\controllers\AdminHomepage\AdminHomepageController;

    class AdminConnection{

         /*
            This function allow to an administrator to connect himself on the site.
        */
        public function getConnection($email, $password){

            $database = new DatabaseConnection;

            $statement_1 = "SELECT COUNT(email) AS email from users WHERE email = '{$email}';";
            $statement_2 = "SELECT password AS password, status_user AS status from users WHERE email = '{$email}';";

            $query_1 = $database->getConnection()->prepare($statement_1);
            $query_2 = $database->getConnection()->prepare($statement_2);

            $query_1->execute();
            $query_2->execute();

            $resultat_1 = $query_1->fetch();
            $resultat_2 = $query_2->fetch();

            $query_1->closeCursor();
            $query_2->closeCursor();

            if($resultat_1['email'] === 1 and password_verify($password, $resultat_2['password']) and $resultat_2['status'] === 'bde'){

                (new AdminHomepageController)->welcomeAdmin();
            }

            else{

                //echo "Adresse email ou mot de passe incorrect !!!";
                header('location: http://localhost:4000/index.php?action=homepageError');
                exit;
            }
        }
    }