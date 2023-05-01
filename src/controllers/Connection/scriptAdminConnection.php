<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/model/AdminConnection.php');
    use src\model\AdminConnection\AdminConnection;

    (new AdminConnection)->getConnection($_POST['email'], $_POST['password']);
