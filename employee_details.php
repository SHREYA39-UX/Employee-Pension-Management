<?php
require "database.php";
session_start();
if(isset($_POST['submit'])){
	$eid=$_POST['e_id'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$mobno=$_POST['mobile_no'];
	$adress=$_POST['adress'];
	$email=$_POST['email'];
	
	
	$sql = "insert into employee_details(E_id,Name,DOB,Age,Gender,Mobile_no,Adress,Email)
	        values('$eid','$name','$dob','$age','$gender','$mobno','$adress','$email')";
	
	$run=mysqli_query($conn,$sql);
	
	if($run){
		$_SESSION['E_id']=$eid;
		header("Location:occupation_details.php?employee_details=INSERTED");
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
<body>
<form action="" method="post">
<center>
<h1>Employee Details</h1>
<table>
<tr>
<td>Employee_id:</td>
<td><input type="text" name="e_id">
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name">
</tr>
<tr>
<td>Date of birth:</td>
<td><input type="date" name="dob">
</tr>
<tr>
<td>Age:</td>
<td><input type="text" name="age">
</tr>
<tr>
<td>Gender:</td>
<td><select name="gender" >
	<option value="">--Select--</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Others">Others</option>
	</select>
</tr>
<tr>
<td>Mobile_no:</td>
<td><input type="text" name="mobile_no">
</tr>
<tr>
<td>Adress:</td>
<td><input type="text" name="adress">
</tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email">
</tr>

<tr>
<td><input type="submit" name="submit" value="Next"></td>
</tr>
</table>
</center>
</form>
</body>
</html>