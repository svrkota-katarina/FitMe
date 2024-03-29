<!DOCTYPE php>

<?php
    session_start();
    
    

?>
<php lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Diatecian</title>
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


	<body class="homepage">
		
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
							<li class="menu-item"><a href="about.php">About me</a></li>
							<li class="menu-item"><a href="offer.php">My offer</a></li>
							<li class="menu-item"><a href="recipe.php">Recipes</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="hero">
				<div class="container">
					<i class="icon-cupcake logo"></i>
					<h1 class="site-title">Name Surname</h1>
					<small class="site-description">Professional Dietician</small>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block cooking-section category-block">
					<div class="container">
						<figure><img src="dummy/cooking.png" alt="cooking"></figure>
						<div class="category-content">
							<h1 class="category-title">Lorem ipsum dolor sit</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem aperiam ab, rem dignissimos ducimus soluta culpa veritatis consequuntur asperiores, ad cum, ipsum quidem harum error dolores quia eius quae.</p>
							<a href="#" class="button">Read more</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .cooking-section -->
				<div class="fullwidth-block restaurant-section category-block">
					<div class="container">
						<figure><img src="dummy/restaurant.png" alt="restaurant"></figure>
						<div class="category-content">
							<h1 class="category-title">Duis aute reprehenderit</h1>
							<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
							<a href="#" class="button">Read more</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .restaurant-section -->
				<div class="fullwidth-block fruits-section category-block">
					<div class="container">
						<figure><img src="dummy/fruits.png" alt="fruits"></figure>
						<div class="category-content">
							<h1 class="category-title">Nam libero tempore</h1>
							<p>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
							<a href="#" class="button">Read more</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .fruits-section -->
				<div class="fullwidth-block vegetables-section category-block">
					<div class="container">
						<figure><img src="dummy/vegetables.png" alt="vegetables"></figure>
						<div class="category-content">
							<h1 class="category-title">Sint molestiae recusandae</h1>
							<p>Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
							<a href="#" class="button">Read more</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .vegetables-section -->

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
					
				</div>
			</footer>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>