<!DOCTYPE php>
<php lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Diatecian | Contact</title>
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
					<div id="branding" class="pull-left">
						<i class="icon-cupcake logo"></i>
						<h1 class="site-title"><a href="pocetna.php">Name Surname</a></h1>
					</div>
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="about.php">About me</a></li>
							<li class="menu-item"><a href="offer.php">My offer</a></li>
							<li class="menu-item"><a href="recipe.php">Recipes</a></li>
							<li class="menu-item current-menu-item"><a href="contact.php">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="content">
					<div class="container">
						
						<h2 class="entry-title">Curabitur sit amet ultricies felis nunc ultrices gravida fringilla in volutpat massa vitae elementum tincidunt</h2>
						<p>Pellentesque erat erat, mattis non feugiat pharetra, viverra nec mauris. Nullam sed risus aliquam, congue nunc ac, convallis mi. Cras pellentesque sit amet urna fermentum ornare. Sed in metus justo. Cras sit amet odio eu enim condimentum pretium vitae nec enim. In aliquet dolor nisl.</p>
						
						<div class="contact-detail">
							<span class="location"><img src="images/icon-map-marker-alt.png"> 559 Avenue Street, New York</span>
							<span class="email"><img src="images/icon-envelope.png"> <a href="mailto:office@companyname.com">office@companyname.com</a></span>
							<span class="phone"><img src="images/icon-phone.png"> <a href="tel:(942)321490234">(942) 321 490 234</a></span>
						</div>
						
						<div class="map"></div>

						<div class="contact-form">
							<div class="row">
								<div class="col-md-5">
									<input type="text" placeholder="Your name...">
									<input type="text" placeholder="Email...">
									<input type="text" placeholder="Website...">
								</div>
								<div class="col-md-7">
									<textarea placeholder="Message..."></textarea>
									<input type="submit" value="Send message">
								</div>
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
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>