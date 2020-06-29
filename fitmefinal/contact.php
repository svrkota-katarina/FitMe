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
		<link rel="stylesheet" href="style2.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/php5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<header class="site-header">
				<div class="container">
					<a href="profil.php" id="branding" class="pull-left">
						<img src="slike/logoClearBg.png" class="responsive logoF">
					</a>
                                    
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="profil.php">Profil</a></li>
							<li class="menu-item"><a href="contact.php">Kontaktirajte nas</a></li>
							<li class="menu-item"><a href="about.php">Vasi podaci</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="content">
					<div class="container">
						
						<h2 class="entry-title">Voleli bismo da cujemo Vase misljenje!</h2>
						<p>Ukoliko imate bilo kakvu primedbu,zalbu ili pitanje vezano za FitMe popunite formu u nastavku i nas korisnicki tim ce vas uskoro kontaktirati</p>
						
						<div class="contact-detail">
							<span class="location"><img src="images/icon-map-marker-alt.png"> Bulevar kralja Aleksandra 73, Beograd</span>
							<span class="email"><img src="images/icon-envelope.png"> <a href="mailto:office@companyname.com">korisnickapodrska@etf.bg.ac.rs</a></span>
							<span class="phone"><img src="images/icon-phone.png"> <a href="tel:(942)321490234">(011)3226992</a></span>
						</div>
						
						<div class="map"></div>

						<div class="contact-form">
							<div class="row">
								<div class="col-md-5">
									<input type="text" placeholder="Vase ime...">
									<input type="text" placeholder="Email...">
									
								</div>
								<div class="col-md-7">
									<textarea placeholder="Vasa poruka..."></textarea>
									<input type="submit" value="Posaljite">
								</div>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<?php include 'footer.php'; ?>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>