<?php
$serverName ="localhost";
$userName   ="root";
$password   ="";
$dbName     ="library";

$conn = mysqli_connect("$serverName","$userName","$password","$dbName");

if(!$conn){
	die("Conection failed: " . mysqli_connect_error());
}



?>