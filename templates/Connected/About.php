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
		<title>bde-site-About</title>
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

		<section class="heading-link">
			<h3>about us</h3>
			<p><a href="index.html">home</a> / about</p>
		</section>

		<!-- about start  -->
		<section class="about">
			<div class="image">
				<img src="IMAGES/PHOTO SLIDE 1.jfif" alt="" />
			</div>
			<div class="content">
				<h3 class="about-title">I am because we Are </h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
					nam quis accusantium natus ratione quasi magnam vero, odio impedit
					mollitia necessitatibus blanditiis dolore assumenda obcaecati
					repellendus autem at, provident maiores!
				</p>
				<div class="icons-container">
					<div class="icons">
						<img src="IMAGES/LIKES.jfif" alt="" />
						<h3>6980+</h3>
						<span>Positive likes</span>
					</div>
					<div class="icons">
						<img src="IMAGES/treated requsr.jfif" alt="" />
						<h3>300+</h3>
						<span>Treated request</span>
					</div>
					<div class="icons">
						<img src="IMAGES/reward.jfif" alt="" />
						<h3>98+</h3>
						<span>awards granted </span>
					</div>
				</div>
			</div>
		</section>
		<!-- about end  -->

		<!-- teachers start  -->
		<section class="teachers">
			<h1 class="heading">our teachers</h1>
			<div class="teachers-slider swiper">
				<div class="swiper-wrapper">
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/P1.jfif" />
							<div class="share">
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-linkedin"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-facebook-f"></a>
							</div>
						</div>
						<div class="content">
							<h3>jems melnar</h3>
							<span>senior tutor</span>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/P2.jfif" alt="" />
							<div class="share">
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-linkedin"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-facebook-f"></a>
							</div>
						</div>
						<div class="content">
							<h3>jems melnar</h3>
							<span>senior tutor</span>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/p3.jfif" alt="" />
							<div class="share">
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-linkedin"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-facebook-f"></a>
							</div>
						</div>
						<div class="content">
							<h3>jems melnar</h3>
							<span>senior tutor</span>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="IMAGES/p4.jfif" alt="" />
							<div class="share">
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-linkedin"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-facebook-f"></a>
							</div>
						</div>
						<div class="content">
							<h3>jems melnar</h3>
							<span>senior tutor</span>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="images/teacher-5.png" alt="" />
							<div class="share">
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-linkedin"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-facebook-f"></a>
							</div>
						</div>
						<div class="content">
							<h3>jems melnar</h3>
							<span>senior tutor</span>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="image">
							<img src="images/teacher-6.png" alt="" />
							<div class="share">
								<a href="#" class="fab fa-twitter"></a>
								<a href="#" class="fab fa-linkedin"></a>
								<a href="#" class="fab fa-instagram"></a>
								<a href="#" class="fab fa-facebook-f"></a>
							</div>
						</div>
						<div class="content">
							<h3>jems melnar</h3>
							<span>senior tutor</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- teachers end  -->

		<!-- reviews start -->
		<section class="reviews">
			<h1 class="heading">our students review</h1>
			<div class="reviews-slider swiper">
				<div class="swiper-wrapper">
					<div class="slide swiper-slide">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
							facilis quasi modi, totam optio suscipit rerum voluptatibus
							tenetur dolorum ullam iure quas voluptate sapiente quaerat ea
							molestias architecto? At, praesentium!
						</p>
						<img src="images/pic-1.jpg" alt="" />
						<h3>jems malnar</h3>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="slide swiper-slide">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
							facilis quasi modi, totam optio suscipit rerum voluptatibus
							tenetur dolorum ullam iure quas voluptate sapiente quaerat ea
							molestias architecto? At, praesentium!
						</p>
						<img src="images/pic-2.jpg" alt="" />
						<h3>jems malnar</h3>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="slide swiper-slide">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
							facilis quasi modi, totam optio suscipit rerum voluptatibus
							tenetur dolorum ullam iure quas voluptate sapiente quaerat ea
							molestias architecto? At, praesentium!
						</p>
						<img src="images/pic-3.jpg" alt="" />
						<h3>jems malnar</h3>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="slide swiper-slide">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
							facilis quasi modi, totam optio suscipit rerum voluptatibus
							tenetur dolorum ullam iure quas voluptate sapiente quaerat ea
							molestias architecto? At, praesentium!
						</p>
						<img src="images/pic-4.jpg" alt="" />
						<h3>jems malnar</h3>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="slide swiper-slide">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
							facilis quasi modi, totam optio suscipit rerum voluptatibus
							tenetur dolorum ullam iure quas voluptate sapiente quaerat ea
							molestias architecto? At, praesentium!
						</p>
						<img src="images/pic-5.jpg" alt="" />
						<h3>jems malnar</h3>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="slide swiper-slide">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
							facilis quasi modi, totam optio suscipit rerum voluptatibus
							tenetur dolorum ullam iure quas voluptate sapiente quaerat ea
							molestias architecto? At, praesentium!
						</p>
						<img src="images/pic-6.jpg" alt="" />
						<h3>jems malnar</h3>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- reviews end -->

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