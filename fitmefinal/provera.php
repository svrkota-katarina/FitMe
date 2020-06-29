<?php

$kon= mysqli_connect("localhost", "root", "", "fitme", "3306") or die("Konekcija sa bazom nije uspela");
if(isset($_COOKIE['voli'])){
   $idR=$_COOKIE['voli'];
  
   
   $upit="SELECT * FROM voli WHERE idR={$idR}";
   $rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
   $rez= mysqli_fetch_array($rez);
   if($rez==null) 
       $upit="INSERT INTO voli (idR, username, idV) VALUES ('{$idR}', 'kaca', NULL);";
   else 
       $upit="DELETE FROM voli WHERE idR={$idR}";
    
   $rez= mysqli_query($kon, $upit) or die("Upit neuspesno izvrsen");
   
   
   setcookie('voli', '', time()-3600);
   
}

