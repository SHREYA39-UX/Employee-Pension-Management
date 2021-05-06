<html>
<head>
<style>
h1{
	font-size: 30px;
}
table,th,td{
	border: 1px solid black;	
}

input{
		width: 10%;
		height: 5%;
		border:2px solid #000000;
		border-radius: 1px;
		padding:5px 10px;
		font-size: 15px;
}
</style>
</head>
<body>
	<center>
	<a href="admin(home).php">HOME PAGE</a>
	<h1>DISPLAY DATA OF EMPLOYEES DETAILS</h1>
	<div class="container">
	<form action= "" method= "POST">
		<input type="submit" name="search" value="DISPLAY">
	</form>
	<table>
	
		<tr>
			<th>E_id</th>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Mobile_no</th>
			<th>Adress</th>
			<th>Email</th>
			<th>Designation</th>
			<th>office Adress</th>
			<th>Date of joining</th>
			<th>Salary</th>
			<th>Nominee Name</th>
			<th>N_Age</th>
			<th>Relationship</th>
			<th>N_Mobile no</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		
		
		$query = "SELECT * FROM employee_details INNER JOIN occupation_details ON employee_details.E_id=occupation_details.E_id 
				  INNER JOIN nominee_details ON occupation_details.E_id=nominee_details.E_id ";
		$query_run = mysqli_query($conn,$query);
		
		
		
		while($row=mysqli_fetch_array($query_run))
		{
			?>
			<tr>
				<td><?php echo $row['E_id']; ?> </td>
				<td><?php echo $row['Name']; ?> </td>
				<td><?php echo $row['DOB']; ?> </td>
				<td><?php echo $row['Age']; ?> </td>
				<td><?php echo $row['Gender']; ?> </td>
				<td><?php echo $row['Mobile_no']; ?> </td>
				<td><?php echo $row['Adress']; ?> </td>
				<td><?php echo $row['Email']; ?> </td>
				<td><?php echo $row['Designation']; ?> </td>
				<td><?php echo $row['Office_adress']; ?> </td>
				<td><?php echo $row['Date_of_joining']; ?> </td>
				<td><?php echo $row['Salary']; ?> </td>
				<td><?php echo $row['name']; ?> </td>
				<td><?php echo $row['age']; ?> </td>
				<td><?php echo $row['Relationship']; ?> </td>
				<td><?php echo $row['mobile_no']; ?> </td>
			</tr>

	

			<?php
		}
			

	}

	mysqli_close($conn);

?>	
	</table>
	</div>
	
	
	
	</center>
	

</body>
</html>
