<?php

	$host = "localhost";
	$dbusername = "root";
	$pass = "";
	$dbname = "pension_management";
	
	
	$conn = new mysqli($host,$dbusername,$pass,$dbname);
	
	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
?>