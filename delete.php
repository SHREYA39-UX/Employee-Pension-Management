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
		width: 15%;
		height: 5%;
		border:2px solid #000000;
		border-radius: 5px;
		padding:10px 15px;
		font-size: 15px;
		
	}
</style>
</head>
<body>
	<center>
	<h1>DELETE DATA</h1>
	<form action="" method="POST">
		<input type="text" name="e_id" placeholder="Enter Employee-ID"/><br><br>
		<input type="submit" name="delete" value="Delete Data">
	</form>
	</center>
</body>
</html>

<?php
require "database.php";

if(isset($_POST['delete'])){
	$eid=$_POST['e_id'];
	
	$query="DELETE FROM employee_details WHERE E_id='$eid' ";
	$query_run=mysqli_query($conn,$query);
	
	$sql="DELETE FROM occupation_details WHERE E_id='$eid' ";
	$sql_run=mysqli_query($conn,$sql);
	
	$sqli="DELETE FROM nominee_details WHERE E_id='$eid' ";
	$run=mysqli_query($conn,$sqli);
	
	$my_sqli="DELETE FROM contribution_table WHERE E_id='$eid' ";
	$run_sql=mysqli_query($conn,$my_sqli);
	
	$a="DELETE FROM withdraw_details WHERE E_id='$eid' ";
	$run_sqli=mysqli_query($conn,$a);
	
	if($query_run){
		if($sql_run){
			if($run){
				if($run_sql){
					if($run_sqli){
						header("Location:home.php?DATA_DELETED");
					}
				}
			}
		}
	}
	
	else{
		echo '<script>alert("error!!!!")</script>';
	}
	
	
}

?>
	
