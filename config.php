<?php

$server="localhost";
$username="root";
$password="";
$database =  "spark_bank"; 


$conn = mysqli_connect($server,$username,$password,$database);

  if(!$conn){
	die("connection to this database failed due to".
	mysqli_connect_error());
}

	// $conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');

	// if(!$conn){
	// 	die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	// }

?>