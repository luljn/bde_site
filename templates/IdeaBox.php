<?php

	require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
	use src\db\database\DatabaseConnection;

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles.css">
    <link rel="stylesheet" href="static/style3.css">
    <title>bde-site-Idea Box</title>
</head>
<body>
    <!-- header start  -->
		<header class="header">
			<a href="index.html" class="logo">CESI BDE</a>

			<nav class="navbar">
                <a href="index.php">LOGIN</a>
                <a href="index.php?action=accueil">HOME</a>
                <a href="index.php?action=about">ABOUT US</a>
                <a href="index.php?action=boutique">BOUTIQUE</a>
                <a href="index.php?action=events">EVENTS AND ACTIVITIES</a>
                <a href="index.php?action=contact">CONTACT</a>
                <a href="index.php?action=idea-box">IDEABOX</a>
			</nav>

			<div class="icons">
				<div id="account-btn" class="fas fa-user"></div>
				<div id="menu-btn" class="fas fa-bars"></div>
			</div>
		</header>
		<!-- header end  -->

		<!-- account form start  -->
		<div class="account-form">
			<div id="close-form" class="fas fa-times"></div>

			<div class="buttons">
				<span class="btn login-btn active">login</span>
				<span class="btn register-btn">register</span>
			</div>

			<form action="" class="login-form active">
				<h3>login now</h3>
				<input type="email" placeholder="Enter your email" class="box" />
				<input type="password" placeholder="Enter your password" class="box" />
				<div class="flex">
					<input type="checkbox" name="" id="remember-me" />
					<label for="remember-me">remember-me</label>
					<a href="#">forgot password</a>
				</div>
				<input type="submit" class="btn" value="login now" />
			</form>

			<form action="" class="register-form">
				<h3>register now</h3>
				<input type="email" placeholder="Enter your email" class="box" />
				<input type="password" placeholder="Enter your password" class="box" />
				<input
					type="password"
					placeholder="confirm your password"
					class="box" />
				<input type="submit" class="btn" value="register now" />
			</form>
		</div>
		<!-- account form end  -->

    <div id="chat-container">
        <div id="chat-header">
          <img src="IMAGES/bde.jpg" alt="Logo">
          <h1>Boîte à idée</h1>
        </div>
		<h2>Propositions d'idées</h2>
		<div id="chat-messages">
		<?php foreach($resultat as $idea) : ?>
			<h3>Nom : <?= $idea['name'] ?></h3>
			<h3>Auteur : 
				<?php foreach($resultat_1 as $user) : ?>
				<?php 
					if( $user['id_user'] === $idea['id_user']){
					echo $user['surname'];} 
				?>
			</h3>
			<?php endforeach; ?>
			<p style="font-size:15px;">description :<br> <?= $idea['description'] ?></p></br>
		<?php endforeach; ?>
		</div>
        <!--form id="chat-form">
            <label for="name">Nom de l'activite :</label>
          <input type="text" id="name" placeholder="nom" required>
          <label for="message">Description :</label>
          <textarea id="message" placeholder="description" required></textarea>
          <input type="submit" value="Envoyer">
          
        </form-->
        
      </div>
    <script src="dynamic/script.js"></script>
</body>
</html>