<?php
require "database.php";
include("session.php");
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$age=$_POST['age'];
	$relation=$_POST['relation'];
	$mbno=$_POST['mbno'];
	$a=$_SESSION['E_id'];
	
	$sql = "insert into nominee_details(Name,Age,Relationship,Mobile_no,E_id)
	        values('$name','$age','$relation','$mbno','$a')";
	
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
<?php
require "database.php";
if(isset($_POST['submit'])){
$a = $_SESSION['E_id'];
$b = $_SESSION['Salary'];
$c = ($b*0.0833);
$d = ($c+500);
$e = (($d*0.03)+$d);


$sql = "insert into contribution_table(E_id,Salary,Employee_contribution,Total_contribution,Total_amount)
	        values('$a','$b','$c','$d','$e')";
	
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
<h1>Nominee Details</h1>
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="name">
</tr>
<tr>
<td>Age:</td>
<td><input type="text" name="age">
</tr>
<tr>
<td>Relationship:</td>
<td><input type="text" name="relation">
</tr>
<tr>
<td>Mobile no:</td>
<td><input type="text" name="mbno">
</tr>
<tr>
<td><input type="submit" name="submit" value="INSERTED"></td>
</tr>

</center>

</table>
</form>
</body>
</html>