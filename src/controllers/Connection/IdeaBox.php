<?php 
    
    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $title = "bde-site-Administration-IdeaBox"; 
    $css = "style2.css";

    $database = new DatabaseConnection;

    $statement = "SELECT * from ideas";
    $query = $database->getConnection()->prepare($statement);
    $query->execute();
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();

    $statement_1 = "SELECT * from users";
    $query_1 = $database->getConnection()->prepare($statement_1);
    $query_1->execute();
    $resultat_1 = $query_1->fetchAll(PDO::FETCH_ASSOC);
    $query_1->closeCursor();

?>

<?php ob_start(); ?>

    <button><a href = "">Dashboard</a></button>

    <h1 style="text-align : center;">IDEA BOX</h1>

    <h2 style="text-align : center;">Voici la liste des idees proposees par les etudiants.</h2>

        <table style="border-collapse : collapse; margin : auto;">
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Auteur</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php foreach($resultat as $proposition) : ?>
            <form action="ConfirmIdea.php" method="POST">
                <tr>
                    <td name="name"><?= $proposition['name'] ?></td>
                    <td name="description"><?= $proposition['description'] ?></td>
                    <td>
                        <?php foreach($resultat_1 as $user) : ?>
                            <?php if($proposition['id_user'] === $user['id_user'])
                                {echo $user['surname'] . " " . $user['name'];} 
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td name="date"><?= $proposition['date'] ?></td>
                    <td><button type = "submit">confirmer</button></td>
                </tr>
            </form>
            <?php endforeach; ?>
        </table>
    

<?php $content = ob_get_clean(); ?>

<?php require('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/templates/layout.php'); ?>
