<?php 

    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;
    
    $title = "bde-site-Administration-Evenements du mois"; 
    $css = "style2.css";

    $database = new DatabaseConnection;

    $statement = "SELECT * from manifestations WHERE status_manif = 1";
    $query = $database->getConnection()->prepare($statement);
    $query->execute();
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    
?>

<?php ob_start(); ?>

    <button><a href = "">Dashboard</a></button>

    <h1 style="text-align : center;">Evenements du mois</h1>

    <h2 style="text-align : center;">Voici la liste des evenements a venir.</h2>

    <table style="border-collapse : collapse; margin : auto;">
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        <?php foreach($resultat as $manifestation) : ?>
        <tr>
            <td><?= $manifestation['name'] ?></td>
            <td><?= $manifestation['description'] ?></td>
            <td><?= $manifestation['date'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2 style = "text-align: center; font-size: 50px;">Poster une manifestation</h2>
            <h2 style = "text-align: center; font-size: 30px;">Entrez les données de la manifestation</h2>
            <form action = "scriptEvent.php" method = "POST">
            <fieldset>
                <legend>Nom de la manifestation</legend>
                <label for = "nom">nom</label> : 
                <input type = "text" name = "nom" id = "nom" placeholder = "Ex. : Concours de natation" size = "50" maxlength = "50">
            </fieldset>
            <fieldset>
                <legend>Date de la manifestation</legend>
                <label for = "date">date</label> : 
                <input type = "text" name = "date" id = "date" placeholder = "Ex. : 2023-01-01" size = "50" maxlength = "10">
            </fieldset>
            <fieldset>
                <legend>Description de la manifestation</legend>
                <label for = "description">description</label> : 
                <input type = "text" name = "description" id = "description" size = "50" maxlength = "100">
            </fieldset>
            <fieldset>
                <legend>La manifestation est-elle payante ?</legend>
                <label for = "is_paid"></label>
                <input type = "integer" name = "is_paid" id = "is_paid" placeholder = "1 pour Oui | 0 pour non" size = "50" maxlength = "2">
            </fieldset>
            <fieldset>
                <legend>Quel est le chemin d'accès vers l'image de la manifestation ?</legend>
                <label for = "image">image</label> : 
                <input type = "text" name = "image" id = "image" placeholder = "Ex. : Produits/p1.jpg" size = "50" maxlength = "100">
            </fieldset>
            <button type = "submit">Enregistrer</button>
        </form>


<?php 

    $content = ob_get_clean(); 
?>

<?php require('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/templates/layout.php') ?>
