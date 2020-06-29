<?php 

session_start();

$user=$_POST['username'];
$pass=$_POST['password'];
$poruka="";
if(empty($user))
	 $poruka.="Korisnicko ime nije uneto!<br/>";
 if(empty($pass))
	 $poruka.="Lozinka nije uneta!<br/>";
 if($poruka!="")
 {	 
 $_SESSION['poruka']=$poruka;
 header("Location:index.php"); 
 exit();
 }
 echo "ULOGOVAN";
echo $user;
echo $pass;
$conn=mysqli_connect("localhost","root","","fitme","3306")
or die("Konekcija nije uspela!!!");

$upit="SELECT * FROM korisnik WHERE username='$user'";

$result= mysqli_query($conn, $upit)
        or die ("Neuspesno izvrsavanje upita!");
		
if(mysqli_num_rows($result)!=1){
    $_SESSION['poruka']="Korisnicko ime ne postoji u bazi!";
    header("Location:index.php");
    exit();
}

 $user_db=mysqli_fetch_array($result);
 if($user_db['password']==$pass) {
	 $_SESSION['user']=$user;
	 header("Location:profil.php");
	 exit();
 }
else {
	$_SESSION['poruka']="Nije dobra lozinka,pokusajte opet!";
	  header("Location:index.php");
	  exit();
}
?>