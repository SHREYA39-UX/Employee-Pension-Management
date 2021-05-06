<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="device-width,intial-scale=1.0">
<style>
	h1{
		width: 20%;
		height: 5%;
		border: 5px solid grey;
		border-radius: 20px;
		padding: 19px;
	}
	label{
		width: 100%;
		height: 5%;
		border-radius: 5px;
		padding:10px 15px;
		font-size: 25px;
		font-family: 'verdana';
	}
	tr,td{
		font-size: 20px;
		font-family: 'verdana';
	}
	button{
		border:2px solid #000000;
		border-radius: 5px;
		padding:10px 15px;
		font-size: 15px;
		font-family: 'verdana';
	}
	input{
		border:2px solid #000000;
		border-radius: 5px;
		padding:10px 15px;
		font-size: 15px;
	}
</style>
</head>
<body>
<br><br><br>
<center>
<h1>UPDATE FORM</h1>
<form action="" method="post">

<label><strong>Select only one field which is to be updated</strong></label><br>
<table>
<tr>
<td><input type="checkbox" name="f" value="Name">Name</input>
</tr>
<tr>
<td><input type="checkbox" name="f" value="Age">Age</input>
</tr>
<tr>
<td><input type="checkbox" name="f" value="Relationship">Relationship</input>
</tr>
<tr>
<td><input type="checkbox" name="f" value="Mobile_no">Mobile_no</input>
</tr>
</table>
<br>

<label><strong>Upated info</strong></label>
<input type="text" name="upinfo" class="input">

<button type="submit" name="submit" class="sub">UPDATE</button>
</center>
</form>

<?php
require "database.php";
$info=$_GET['E_id'];
if(isset($_POST["submit"])){
	
	$field=$_POST['f'];
	$ui=$_POST['upinfo'];
	
$sql="update nominee_details set $field='$ui' where E_id='$info'";

if(mysqli_query($conn,$sql)){
	header("Location:display.php?UPDATED");
}
else{
	echo '<script>alert("error!!!!")</script>';
}
mysqli_close($conn);
		
}
?>
</body>
</html>