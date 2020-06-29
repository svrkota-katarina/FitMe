<!DOCTYPE php>
<php lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>FitMe</title>
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
			
                        <?php
                        include 'header.php';
                        include 'moji.php';?>
			<main class="main-content">
				
				<div class="content">
					<div class="container">
						<div class="recipes-list">
                                                    
                                                    <?php 
                                                    
                                                    foreach ($recepti as $jedan){
                                                        $upit="SELECT * FROM recept WHERE idR={$jedan['idR']}";
                                                        $rez= mysqli_query($kon, $upit);
                                                        $recept= mysqli_fetch_assoc($rez);
							echo "<article class='recipe'>";
							echo	"<figure class='recipe-image'><img src='slike/{$recept['slika']}' alt='Food 1'></figure>";
							echo	"<div class='recipe-detail'>";
                                                        echo		"<h2 class='recipe-title'><a href='recept.php?id={$recept["idR"]}'>{$recept['naslov']}</a></h2>";
                                                        $tekst= substr($recept['priprema'], 0, 300);
							echo		"<p>{$tekst}</p>";
     							echo		"<div class='recipe-meta'>";
							echo			"<span class='time'><img src='images/icon-time.png'>{$recept['vreme']}</span>";
							echo			"<span class='calorie'><img src='images/icon-pie-chart.png'> {$recept['kcal']}</span>";
							echo 			"<span class='comment'><img src='images/icon-comment.png'>3</span>";
							echo		"</div>
								</div>
							</article>";
                                                    }?>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<?php include "footer.php" ?>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>