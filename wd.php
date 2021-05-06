<?php
require "database.php";

if(isset($_POST['submit'])){
	$e_id=$_POST['e-id'];
	$reason=$_POST['reason'];

	$sql = "insert into withdraw_details(Reason,E_id)
	        values('$reason','$e_id')";
	
	$run=mysqli_query($conn,$sql);
	
	if($run){
		header("Location:home.php");
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
		width: 15%;
		height: 5%;
		border: 3px solid grey;
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
<h1>Withdraw</h1>
<table>
<tr>
<td>E-id:</td>
<td><input type="text" name="e-id" /><br><br>
</tr>
<tr>
<td>REASON:</td>
<td><input type="text" name="reason" />
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</center>
</form>
</body>
</html>