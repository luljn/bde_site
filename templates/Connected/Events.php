<?php 
    
    require_once('C:/Users/User/Documents/X2026/X2 2022-2023/SEM2 X2/3 - Développement Web/Projet Web/bde_site/src/db/database.php');
    use src\db\database\DatabaseConnection;

    $title = "bde-site-Administration-Boutique"; 
    $css = "style2.css";

    $database = new DatabaseConnection;

    $statement = "SELECT * from manifestations";
    $query = $database->getConnection()->prepare($statement);
    $query->execute();
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
		<!-- font awesome Link  -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer" />
		<!-- swiper css link -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
		<!-- css file link  -->
		<link rel="stylesheet" href="style3.css" />
		<title>bde-site-Evenements</title>
	</head>
	<body>
		<!-- header start  -->
		<header class="header">
			<a href="" class="logo">CESI BDE</a>

			<nav class="navbar">
            <!--a href="http://localhost:4000/index.php">LOGIN</a-->
            <a href="Homepage.php">HOME</a>
                <a href="About.php">ABOUT US</a>
                <a href="Shop.php">BOUTIQUE</a>
                <a href="Events.php">EVENTS AND ACTIVITIES</a>
                <a href="Contact.php">CONTACT</a>
                <a href="IdeaBox.php">IDEA BOX</a>
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

		<section class="heading-link">
			<h3>Les activites que nous organisons</h3>
			<p><a href="home.html">home</a> / Evenements et Activites</p>
		</section>

    <!-- courses start -->
    <section class="courses">
      <h1 class="heading">Evenements et Activites</h1>

      <div class="box-container">
      <?php foreach($resultat as $event) :?>
        <div class="box">
          <div class="image">
            <img src= <?= $event['image'] ?> alt="">
            <h3><?= $event['name'] ?></h3>
          </div>
          <div class="content">
            <h3>Description</h3>
            <p><?= $event['description'] ?></p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <span><i class="fas fa-book"></i></span>
              <span><i class="fas fa-clock"></i></span>
            </div>
          </div>
		  <button>M'inscrire</button>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- courses end -->

		<!-- footer start  -->

		<section class="footer">
			<div class="box-container">
				<div class="box">
                <h3>news</h3>
					<p>NEW INFORMATIONS<br> EVERY WEEK</p>
					<!--form action="">
						<input type="email" placeholder="enter your email" class="email">
						<input type="submit" value="subscribe" class="btn">
					</form-->
					</form>
				</div>
				<div class="box">
					<h3>quick links</h3>
					<a href="" class="link">home</a>
					<a href="" class="link">about</a>
					<a href="" class="link">events</a>
					<a href="" class="link">contact</a>
				</div>
				<div class="box">
					<h3>useful links</h3>
					<a href="" class="link">send feedback</a>
					<a href="" class="link">ask questions</a>
					<a href="" class="link">help center</a>
					<a href="" class="link">terms of use</a>
					<a href="" class="link">private policy</a>
					<a href="index.php?action=legal" class="link">legal terms</a>
				</div>
				<div class="box">
					<h3>CESI BDE</h3>
					<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
					<div class="share">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fab fa-pinterest"></a>
					</div>
				</div>
			</div>
			<div class="credit">
            By <span>CESI BDE</span> | @Copyright all rights reserved.
			</div>
		</section>

		<!-- footer end  -->

		<!-- swiper js link  -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

		<!-- js file link  -->
		<script src="dynamic/modifs.js"></script>
	</body>
</html>