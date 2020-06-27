<?php
$conn= new mysqli('localhost','root','','fitme');
if($conn->connect_error)
{
	echo "Imate gresku";
}
?>