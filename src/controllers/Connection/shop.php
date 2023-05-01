<?php 
    
    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $title = "bde-site-Administration-Boutique"; 
    $css = "style2.css";

    $database = new DatabaseConnection;

    $statement = "SELECT * from products";
    $query = $database->getConnection()->prepare($statement);
    $query->execute();
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();

?>

<?php ob_start(); ?>

    <button><a href = "">Dashboard</a></button>

    <h1 style="text-align : center; font-size : 80px;">BOUTIQUE</h1>

    <h2 style="text-align : center; font-size : 40px;">Voici la liste des produits disponibles.</h2>

<table style="border-collapse : collapse; margin : auto;">
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix(en FCFA)</th>
        <th>Quantite en stock</th>
    </tr>
    <?php foreach($resultat as $produit) : ?>
    <tr>
        <td><?= $produit['name'] ?></td>
        <td><?= $produit['description'] ?></td>
        <td><?= $produit['price'] ?></td>
        <td><?= $produit['stock_quantity'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

    <h2 style = "text-align: center; font-size: 50px;">Ajouter un produit</h2>
            <h2 style = "text-align: center; font-size: 30px;">Entrez les données du produit</h2>
            <form action = "scriptShopAdd.php" method = "POST">
            <fieldset>
                <legend>Nom du produit</legend>
                <label for = "nom">nom</label> : 
                <input type = "text" name = "nom" id = "nom" placeholder = "Ex. : smartRTX" size = "50" maxlength = "50">
            </fieldset>
            <fieldset>
                <legend>Prix du produit</legend>
                <label for = "prix">prix</label> : 
                <input type = "text" name = "prix" id = "prix" size = "50" maxlength = "10">
            </fieldset>
            <fieldset>
                <legend>Description du produit</legend>
                <label for = "description">description</label> : 
                <input type = "text" name = "description" id = "description" size = "50" maxlength = "100">
            </fieldset>
            <fieldset>
                <legend>Quantite en stock</legend>
                <label for = "qte">quantite</label> : 
                <input type = "text" name = "qte" id = "qte" size = "50" maxlength = "100">
            </fieldset>
            <fieldset>
                <legend>Quelle est la categorie du produit ?</legend>
                <label for = "categorie">identifiant de la categorie</label> : 
                <input type = "text" name = "categorie" id = "categorie" placeholder = "Ex : 1" size = "50" maxlength = "2">
            </fieldset>
            <fieldset>
                <legend>Quel est le chemin d'accès vers l'image du produit ?</legend>
                <label for = "image">image</label> : 
                <input type = "text" name = "image" id = "image" placeholder = "Ex. : Produits/p1.jpg" size = "50" maxlength = "100">
            </fieldset>
            <button type = "submit">Enregistrer</button>
        </form>

        <h2 style = "text-align: center; font-size: 50px;">Supprimer un produit</h2>
            <h2 style = "text-align: center; font-size: 30px;">Entrez les données du produit</h2>
            <form action = "scriptShopDel.php" method = "POST">
            <fieldset>
                <legend>Quel est le nom du produit à supprimer ?</legend>
                <label for = "nom">nom</label> : 
                <input type = "text" name = "nom" id = "nom" placeholder = "Ex. : smartRTX" size = "50" maxlength = "50">
            </fieldset>
            <button type = "submit">Supprimer</button>
        </form>

<?php $content = ob_get_clean(); ?>

<?php require('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/templates/layout.php') ?>
