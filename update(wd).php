<?php
require "database.php";
$info=$_GET['E_id'];
$query = "SELECT * from withdraw_details where E_id='".$info."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST["update"])){
	$query1="UPDATE withdraw_details SET Withdraw_status='$_POST[WS]',Withdrawer='$_POST[WD]',Withdraw_date='$_POST[WI]',Withdraw_amount='$_POST[WA]',Pending_amount='$_POST[PA]' 
				where E_id='".$info."' ";
	$query_run=mysqli_query($conn,$query1);
	
	if($query_run){
	header("Location:admin(wd).php?UPDATED");
}
else{
	echo '<script>alert("error!!!!")</script>';
}
mysqli_close($conn);
		
}

?>

<html>
<body>
<head>
<style>
	h1{
		width: 20%;
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
	select{
		width: 100%;
		height: 5%;
		border: 2px solid #000000;
		border-radius: 5px;
		padding:10px 15px;
		font-size: 15px;
		
	}
</style>
</head>
<center>

<h1>UPDATE FORM</h1>
<form action="" method="POST">
		
<table>
<tr>
<td>Withdraw_status:</td>
<td><select name="WS" >
	<option value="">--Select--</option>
	<option value="Pending">Pending</option>
	<option value="Updated">Updated</option>
	</select>
</tr>
<tr>
<td>Withdrawer:</td>
<td><select name="WD" >
	<option value="">--Select--</option>
	<option value="Employer">Employer</option>
	<option value="Nominee">Nominee</option>
	</select>
</tr>
<tr>
<td>Withdraw Date:</td>
<td><input type="date" name="WI" />
</tr>
<tr>
<td>Withdraw amount:</td>
<td><input type="text" name="WA" />
</tr>
<tr>
<td>Pending amount:</td>
<td><input type="text" name="PA" />
</tr>
<tr>
<td><input type="submit" name="update" value="UPDATE"></td>
</tr>
</table>
</center>
</body>
</html>