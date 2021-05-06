<?php
require "database.php";
include("session.php");
if(isset($_POST['submit'])){
	$dsg=$_POST['dsg'];
	$offadr=$_POST['offadr'];
	$doj=$_POST['doj'];
	$srly=$_POST['srly'];
	$a=$_SESSION['E_id'];
	
	$sql = "insert into occupation_details(Designation,Office_adress,Date_of_joining,Salary,E_id)
	        values('$dsg','$offadr','$doj','$srly','$a')";
	
	$run=mysqli_query($conn,$sql);
	
	if($run){
		$_SESSION['Salary']=$srly;
		header("Location:nominee_details.php?occupation_details=INSERTED");
	}
	else{
		echo '<script>alert("error!!!!")</script>';
	}
	mysqli_close($conn);
	
	
}
	
?>
<html>
<head>
<style>
	h1{
		width: 20%;
		height: 5%;
		border: 5px solid grey;
		border-radius: 20px;
		padding: 19px;
	}
	input{
		width: 100%;
		height: 5%;
		border:2px solid #000000;
		border-radius: 5px;
		padding:10px 15px;
		font-size: 15px;
	}
	td,tr{
		font-family: 'verdana';
	}
		
</style>
</head>
<body>
<form action="" method="post">
<center>
<h1>Office Details</h1>
<table>
<tr>
<td>Designation:</td>
<td><input type="text" name="dsg">
</tr>
<tr>
<td>Office adress:</td>
<td><input type="text" name="offadr">
</tr>
<tr>
<td>Date of joining:</td>
<td><input type="date" name="doj">
</tr>
<tr>
<td>Salary:</td>
<td><input type="text" name="srly">
</tr>
<tr>
<td><input type="submit" name="submit" value="Next"></td>
</tr>
</center>
</table>
</form>
</body>
</html>