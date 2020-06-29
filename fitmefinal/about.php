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
		<link rel="stylesheet" href="style2.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/php5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
		
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
				
				<div class="author-bio">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<figure class="profile-picture">
									<img src="slike/slikakorisnik.jpg" alt="">
								</figure>
							</div>
							<div class="col-md-6 col-md-offset-1">
								<h2>Dobro dosli korisnice <br> kaca</h2>
								<p>Na ovoj strani mozete videti Vase korisnicke podatke,kao i izmeniti pojedine stavke klikom na dugme izmena podataka </p>
								<ul class="person-detail">
									<li><span class="icon"><img src="images/icon-baby.png"></span>Datum rodjenja: <strong>08.05.1985</strong></li>
									<li><span class="icon"><img src="images/icon-map-marker.png"></span>Grad: <strong>Beograd,Srbija</strong></li>
									<li><span class="icon"><img src="images/icon-heart.png"></span>Omiljena jela: <strong>Ovsena kasa, Paradajz corba</strong></li>
									<li><span class="icon"><img src="images/icon-clock.png"></span>Korisnik na FitMe: <strong>6 godina 3 meseca</strong></li>
								</ul>
								</br>
								<button><a href="#">Izmena podataka</button>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<?php include 'footer.php'; ?>

        </div>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>