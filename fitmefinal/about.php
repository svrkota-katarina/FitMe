<!DOCTYPE php>
<php lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Diatecian | About Me</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/php5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="pocetna.php" id="branding" class="pull-left">
						<i class="icon-cupcake logo"></i>
						<h1 class="site-title">Name Surname</h1>
					</a>
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="about.php">About me</a></li>
							<li class="menu-item"><a href="offer.php">My offer</a></li>
							<li class="menu-item"><a href="recipe.php">Recipes</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="author-bio">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<figure class="profile-picture">
									<img src="dummy/person.jpg" alt="">
								</figure>
							</div>
							<div class="col-md-6 col-md-offset-1">
								<h2>Hello, <br> I am Name Surname</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
								<ul class="person-detail">
									<li><span class="icon"><img src="images/icon-baby.png"></span>Born: <strong>08.05.1985</strong></li>
									<li><span class="icon"><img src="images/icon-map-marker.png"></span>City: <strong>New York</strong></li>
									<li><span class="icon"><img src="images/icon-heart.png"></span>Favourites: <strong>Lorem ipsum, Dolor sit</strong></li>
									<li><span class="icon"><img src="images/icon-clock.png"></span>Experience: <strong>6 years</strong></li>
								</ul>
								</br>
								<button><a href="spisak.php">Spisak za kupovinu</button>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<footer class="site-footer">
				<div class="container">
					<i class="icon-cupcake logo"></i>
					<nav class="footer-navigation">
						<a href="about.php">About me</a>
						<a href="offer.php">My offer</a>
						<a href="recipe.php">Recipes</a>
						<a href="contact.php">Contact</a>
					</nav>
					<div class="subscribe">
						<form action="#">
							<input type="text" placeholder="Enter your email to join newsletter...">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="social-links">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="colophon">
						<p>Copyright 2014 Company name. Designed by Themezy. All right reserved</p>
					</div>
				</div>
			</footer>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>