<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
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
		<title>bde-site-Accueil</title>
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

			<!--div class="icons">
				<div id="account-btn" class="fas fa-user"></div>
				<div id="menu-btn" class="fas fa-bars"></div>
			</div-->
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

		<!-- home start  -->
		<section class="home">
			<div class="home-slider swiper">
				<div class="swiper-wrapper">
					<section
						class="swiper-slide slider"
						style="background-image: url(IMAGES/OIP\ \(1\).jpg)">
						<div class="content">
							<h3>all together for a better tomorrow!We Are Leaders</h3>
							<p>
								we form the bridge between the students body and school administration.
								we relay all problems and found possible solutions for each problems.
							</p>
							<a href="#" class="btn">get started</a>
						</div>
					</section>

					<section
						class="swiper-slide slider"
						style="background-image: url(IMAGES/OIP.jpg)">
						<div class="content">
							<h3>all together for a better tomorrow!We Are Leaders</h3>
							<p>
								we form the bridge between the students body and school administration.
								we relay all problems and found possible solutions for each problems.
							</p>
							<a href="#" class="btn">get started</a>
						</div>
					</section>

					<section
						class="swiper-slide slider"
						style="background-image: url(IMAGES/OIP\ \(2\).jpg)">
						<div class="content">
							<h3>all together for a better tomorrow!We Are Leaders</h3>
							<p>
								we form the bridge between the students body and school administration.
								we relay all problems and found possible solutions for each problems.
							</p>
							<a href="#" class="btn">get started</a>
						</div>
					</section>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>
		<!-- home end  -->

		<!-- subjects start  -->

		<section class="subjects">
			<h1 class="heading">Les actualites de cette semaine</h1>
			<div class="box-container">
				<div class="box">
					<img src="IMAGES/PFI.jfif" alt="" />
					<h3>conference PFI</h3>
					<p>VENDREDI 28 AVRIL</p>
				</div>
				<div class="box">
					<img src="IMAGES/SOUTENANCE.jfif" alt="" />
					<h3>Soutances X2</h3>
					<p> VENDREDI 28 AVRIL</p>
				</div>
				<div class="box">
					<img src="IMAGES/DANCE.jfif" alt="" />
					<h3>Atelier Dance</h3>
					<p>JEUDI 27 AVRIL</p>
				</div>
				<div class="box">
					<img src="IMAGES/PARAIN.jfif" alt="" />
					<h3>Atelier Parrainage</h3>
					<p>MECREDI 26 AVRIL</p>
				</div>
				<div class="box">
					<img src="IMAGES/CYBER.jfif" alt="" />
					<h3>Cyber Security Quizz</h3>
					<p>MARDI 25 AVRIL</p>
				</div>
				<div class="box">
					<img src="IMAGES/QUICK.jfif" alt="" />
					<h3>Quick Typing Competition</h3>
					<p>LUNDI 24 avril</p>
				</div>
			</div>
		</section>

		<!-- subjects end  -->

		<!-- Actuality and events  -->
		<section class="home-courses">
			<h1 class="heading">les actualites</h1>
			<div class="home-courses-slider swiper">
				<div class="swiper-wrapper">
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/vote.jfif" alt="" />
							<h3>elections BDE</h3>
						</div>
						<div class="content">
							<h3>Greve pour la connexion</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="#" class="btn">read more</a>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/GREVES.jpeg" alt="" />
							<h3>CONNEXION INTERNERT</h3>
						</div>
						<div class="content">
							<h3>Conseil dadministration</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="#" class="btn">read more</a>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/conference.jfif" alt="" />
							<h3>CONSEIL dadministration</h3>
						</div>
						<div class="content">
							<h3>conference dandree hot </h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="#" class="btn">read more</a>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/CONFERENCES.jfif" alt="" />
							<h3>CONFERENCE</h3>
						</div>
						<div class="content">
							<h3>web development</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="#" class="btn">read more</a>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="./images/course-home-5.png" alt="" />
							<h3>web development</h3>
						</div>
						<div class="content">
							<h3>web development</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="#" class="btn">read more</a>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="./images/course-home-6.png" alt="" />
							<h3>web development</h3>
						</div>
						<div class="content">
							<h3>web development</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="#" class="btn">read more</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- home courses end  -->

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
				</div>
				<div class="box">
					<h3>quick links</h3>
					<a href="index.html" class="link">home</a>
					<a href="about.html" class="link">about</a>
					<a href="courses.html" class="link">courses</a>
					<a href="contact.html" class="link">contact</a>
				</div>
				<div class="box">
					<h3>useful links</h3>
					<a href="#" class="link">send feedback</a>
					<a href="#" class="link">ask questions</a>
					<a href="#" class="link">help center</a>
					<a href="#" class="link">terms of use</a>
					<a href="#" class="link">private policy</a>
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
