<!DOCTYPE php>

	<head>
		<meta charset="UTF-16">
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
<?php  
session_start();
    $idRec=$_SESSION['idR'];
    $kon= mysqli_connect("localhost", "root", "", "fitme", "3308") or die("Konekcija sa bazom nije uspela");
    $upit="SELECT * FROM recept WHERE idR='$idRec'";
    $rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
    if($rez==null) echo("Recept ne postoji");
    $recept= mysqli_fetch_array($rez);
    $upit="SELECT * FROM sast_u_red WHERE idR='$idRec'";
    $rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
    if($rez==null) echo("Sastojci ne postoje");
    $sastojci= mysqli_fetch_all($rez, MYSQLI_ASSOC);
    
?>

	<body>
		
		<div id="site-content">
			<?php include "header.php" ?>
			<main class="main-content">
				
				<div class="content">
					<div class="container">
						
						<div class="row">
							<div class="col-md-4">
                                                            <figure><img src=<?php echo "slike/".$recept['slika'].".png" ?> class="responsive recSlik"></figure>
							</div>
							<div class="col-md-7 col-md-offset-1">
								<h2 class="entry-title"><?php echo $recept['naslov'] ?></h2>
								<div class="recipe-meta">
									<span class="time"><img src="images/icon-time.png"> <?php echo $recept['vreme']." min" ?></span>
									<span class="calorie"><img src="images/icon-pie-chart.png"> <?php echo $recept['kcal']." kcal" ?></span>
									<span class="comment"><img src="images/icon-comment.png"> 2 komentara</span>
								</div>
								<div class="ingredient">
									<h3>Sastojci</h3>
									<table>
                                                                            <?php foreach ($sastojci as $jedanSas ) {
                                                                                $id=$jedanSas['idS'];
                                                                                
                                                                                $upit="SELECT * FROM sastojak WHERE idS='$id'";
                                                                                 
                                                                                $rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");  
                                                                                if($rez==null) echo("Recept ne postoji");
                                                                                $sastojak= mysqli_fetch_array($rez);
                                                                  
                                                                                echo "<tr><td><strong>".$jedanSas['kol']." ".$jedanSas['jed']."</strong></td>" ;
                                                                                echo "<td><strong>".$sastojak['ime'] ."</strong></td></tr>";
                                                                            } ?>
                                                                                
									</table>
								</div>
                                                                <p>&nbsp</p>
                                                                <?php echo "<p>".$recept['priprema']."</p>" ?>
                                                                <p>&nbsp</p>
                                                                <p>&nbsp</p>
								<section class="comments">
									<h3>Komentari (2)</h3>
									<ul class="comment-list">
										<li class="comment">
											<footer>
                                                                                            <img src="slike/kor1.jpg" class="avatar">
												<img src="images/icon-user.png">
												<h4 class="fn">korisnik1</h4>
												<span class="date">25/06/2020</span>
											</footer>
											<div class="comment-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate esse repellendus iusto vitae quasi nisi, illo totam saepe tempora quo, possimus quibusdam, debitis ullam itaque nesciunt, adipisci ab expedita assumenda?</p>
											</div>
										</li>
										<li class="comment">
											<footer>
												<img src="slike/kor2.jpg" class="avatar">
												<img src="images/icon-user.png">
												<h4 class="fn">korisnik2</h4>
												<span class="date">26/06/2020</span>
											</footer>
											<div class="comment-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptatibus aliquid officia quae quo. Architecto voluptates, inventore quisquam quia eaque pariatur quod, similique voluptatem tempora rem eius ipsa nesciunt? Eveniet?</p>
											</div>
										</li>
										
									</ul>

									<div id="respond">
										<h3>Ostavi komentar</h3>
										<form action="#" class="comment-form">
											
											<textarea placeholder="Komentar..."></textarea>
											<input type="submit" value="Postavi">
										</form>
									</div>
								</section>
							</div>
						</div>
						
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<?php include "footer.php"?>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</php>