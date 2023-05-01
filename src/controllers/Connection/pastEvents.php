<?php 

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;
    
    $title = "bde-site-Administration-Evenements passes"; 
    $css = "style2.css";

    $database = new DatabaseConnection;

    $statement = "SELECT * from manifestations WHERE status_manif = 0";
    $query = $database->getConnection()->prepare($statement);
    $query->execute();
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();

?>

<?php ob_start(); ?>

    <button><a href = "">Dashboard</a></button>

    <h1 style="text-align : center;">Evenements passes</h1>

    <h2 style="text-align : center;">Voici la liste des evenements passes.</h2>

    <table style="border-collapse : collapse; margin : auto;">
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Date</th>
            <th></th>
        </tr>
        <?php foreach($resultat as $manifestation) : ?>
        <tr>
            <td><?= $manifestation['name'] ?></td>
            <td><?= $manifestation['description'] ?></td>
            <td><?= $manifestation['date'] ?></td>
            <td><button>Administrer</button></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php $content = ob_get_clean(); ?>

<?php require('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/templates/layout.php') ?>
