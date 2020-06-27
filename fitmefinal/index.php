<!DOCTYPE html>
<?php

	require("core/conn.php");
	$upit = "SELECT * FROM korisnik";
	$rez = $conn->query($upit);
	$korisnici = $rez->fetch_assoc();
	    
		
	
?>
<html lang="en">
<head>
	<title>FitMe</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	 <?php							if(isset($_POST["login"]))
	{	
           $korisnickoime=$_POST['username'];
           $sifra=$_POST['password'];
           $flag=0;
		   foreach ($korisnik as $korisnici) {
			  echo "$korisnik";
			  echo "$korisnickoime";
			  echo "$sifra";
	}  }
	else { echo "Pickoo pegava";}
  ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="<?php $_SERVER['PHP_SELF']?>">
					<span class="login100-form-title">
						Prijavite se
						
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Molim Vas unesite korisnicko ime">
						<input class="input100" type="text" name="username" id="username" placeholder="Korisnicko ime">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Molim Vas unesite password">
						<input class="input100" type="password" name="pass" id="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
						
					</div>
                    <div class="text-right p-t-13 p-b-23">
						
						
					</div>
					<div class="text-right p-t-13 p-b-23">
						
						</a>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" id="login" value="P R I J A V A ">
						</input>
					</div>
             
					
						
                     <div class="flex-col-c p-t-170 p-b-40">
                        
						<label> Nemate nalog? </label>
						<a href="registracija.php" class="txt3">
							Napravite nalog na FitMe
						</a>
					</div>
				</form>
				 
			</div>
		</div>
	</div>
	
	 

</body>
</html>