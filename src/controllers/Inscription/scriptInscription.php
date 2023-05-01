<?php

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/model/Inscription.php');
    use src\model\Inscription\Inscription;

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/controllers/Connection.php');
    use src\controllers\Connection\ConnectionController;

    (new Inscription)->verifying($_POST['email']);
