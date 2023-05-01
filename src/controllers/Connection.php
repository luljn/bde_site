<?php

    namespace src\controllers\Connection;

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/model/Connection.php');
    use src\model\Connection\Connection;

    class ConnectionController{

        public function execute(){

            require('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/templates/Connection.php');
        }
    }

    //(new Connection)->getConnection($_POST['email'], $_POST['password']);