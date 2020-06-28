<?php


//procitam pojam iz pretrage
$pretraga=$_POST['pretraga'];
$kon= mysqli_connect("localhost", "root", "", "fitme", "3308") or die("Konekcija sa bazom nije uspela");
$upit="SELECT * FROM sastojak WHERE ime='$pretraga'";
$rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
if($rez==null) echo("Sastojak ne postoji");
$sastojak= mysqli_fetch_array($rez);
$upit="SELECT idR FROM sast_u_red WHERE idS='$sastojak[idS]'";
$rez= mysqli_query($kon, $upit);
$recepti= mysqli_fetch_all($rez, MYSQLI_ASSOC);
