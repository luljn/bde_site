<?php 
    
    $title = "bde-site-Espace-Administration"; 
    $css = "/static/style2.css";
?>

<?php ob_start(); ?>

<button><a href="http://localhost:4000/index.php">Retour</a></button>

    <h1 style="text-align : center; font-size: 50px">Bienvenue dans l'espace d'administration du site du BDE !!!</h1>

    <nav style="display: flex; justify-content: center; gap: 50px;">
        <button><a href="shop.php">Boutique</a></button>
        <button><a href="futurEvents.php">Evenements du mois</a></button>
        <button><a href="pastEvents.php">Evenements passes</a></button>
        <button><a href="IdeaBox.php">Idea box</a></button>
        </form>
    </nav>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
