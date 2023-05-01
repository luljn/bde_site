<?php

    namespace src\model\Inscription;

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    class Inscription{

        /* 
            This function has to verify if the person who wants to make an inscription,
            is on the "general_database". 
        */
        public function verifying($email){

            $fileLocation = "C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/token.txt";
            $file = fopen($fileLocation, "r");
            $token = fread($file, filesize($fileLocation));

            $url = "http://localhost:3000/api/{$token}/students";
            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);

            if($response === false){

                echo "Erreur curl : " . curl_error($curl);
                exit();
            }

            $data = json_decode($response, true);

            if(json_last_error() !== JSON_ERROR_NONE){

                echo "Erreur de decodage JSON : " . json_last_error_msg();
                exit();
            }

            foreach($data as $student){
                
                if($email === $student['email'] and $student['location'] === 'Douala'){

                    //echo "vous pouvez vous inscrire au site de ce BDE :) !";
                    $this->Inscription($student['name'], $student['surname'], $student['location'], $student['email'], password_hash($_POST['password'], PASSWORD_DEFAULT));
                    
                    header('location: http://localhost:4000/index.php');
                    exit;
                }
                
                else{

                    /*echo "vous ne pouvez pas vous inscrire au site de ce BDE !!!!!!!<br>
                    <a href = 'http://localhost:4000/index.php'>Login Page</a>";*/
                    continue;
                }
            }

            echo "vous ne pouvez pas vous inscrire au site de ce BDE !!!!!!!<br>
                  <a href = 'http://localhost:4000/index.php'>Login Page</a>";
                
            curl_close($curl);
        }

        /*
            This function proceeds to the inscription of a student on the site.
        */
        public function Inscription($name, $surname, $location, $email, $password){

            $database = new DatabaseConnection;

            $statement_1 = "SELECT COUNT(email) AS email FROM users WHERE email = '{$email}'";

            $query_1 = $database->getConnection()->prepare($statement_1);
            $query_1->execute();
            $resultat_1 = $query_1->fetch();
            $query_1->closeCursor();

            /*
                If the email address used to make the inscription,
                is already in the database(the user already has an account but try to make an inscription).
            */
            if($resultat_1['email'] === 1){

                header('location: http://localhost:4000/index.php?action=inscriptionError');
                exit;
            }

            $statement = "INSERT INTO users (name,surname,location,email,password,status_user) 
                          VALUES  
                          ('{$name}', '{$surname}', '{$location}', '{$email}', '{$password}', 'student')";

            $query = $database->getConnection()->prepare($statement);
            $query->execute();
            $query->closeCursor();
        }
    }
