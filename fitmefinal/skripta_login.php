<?php 

session_start();

$user=$_POST['username'];
$pass=$_POST['password'];
$poruka="";
if(empty($user))
	 $poruka.="Korisnicko ime nije uneto!<br/>";
 if(empty($pass))
	 $poruka.="Lozinka nije uneta!<br/>";
 if($poruka!=" ")
 {	 
 $_SESSION['poruka']=$poruka;
 header("Location:index.php"); 
 exit();
 }

$conn=mysqli_connect("localhost","root","","fitme")
or die("Konekcija nije uspela!!!");

$upit="SELECT * FROM korisnik WHERE userkor='$user'";

$result= mysqli_query($conn, $upit)
        or die ("Neuspesno izvrsavanje upita!");
		
if(mysqli_num_rows($result)!=1){
    $_SESSION['poruka']="Korisnicko ime ne postoji u bazi!";
    header("Location:index.php");
    exit();
}

 $user_db=mysqli_fetch_array($result);
 if($user_db['pass']==$pass) {
	 $_SESSION['user']=$user;
	 header("Location::pocetna.php");
	 exit();
 }
else {
	$_SESSION['poruka']="Nije dobra lozinka,pokusajte opet!";
	  header("Location:index.php");
	  exit();
}
?>