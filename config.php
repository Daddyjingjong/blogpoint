<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'blogpointdb';

$connection = mysqli_connect($hostname, $username ,$password,$databasename);

if($connection == false){
echo "Connection not successful<br>";
die("ERROR:".mysqli_connect_error());
}








?>