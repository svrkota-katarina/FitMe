<?php

$kon= mysqli_connect("localhost", "root", "", "fitme", "3308") or die("Konekcija sa bazom nije uspela");
$upit="SELECT * FROM voli";
$rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
if($rez==null) echo("Nemate voljenih recepata");
$recepti= mysqli_fetch_all($rez, MYSQLI_ASSOC);
