<?php 
// rootBike rootBlackmores
	$db = new mysqli("localhost","rootBlackmores","Champpseedd45","bikeclub");
	if (mysqli_connect_errno()) {
	  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_set_charset($db,"utf8");
?>	