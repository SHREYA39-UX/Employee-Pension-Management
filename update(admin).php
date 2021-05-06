<?php
require "database.php";
$info=$_GET['E_id'];
$query = "SELECT * from contribution_table where E_id='".$info."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST["update"])){
	$query1="UPDATE contribution_table SET Total_amount='$_POST[TA]' where E_id='".$info."' ";
	$query_run=mysqli_query($conn,$query1);
	
	if($query_run){
	header("Location:admin_c.php?UPDATED");
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
<center>

<h1>UPDATE FORM</h1>
<form action="" method="POST">
		
<table>
<tr>
<td>Total amount:</td>
<td><input type="text" name="TA" required value="<?php echo $row['Total_amount'];?>">
</tr>
<tr>
<td><input type="submit" name="update" value="UPDATE" /></td>
</tr>
</table>
</center>
</body>
</html>