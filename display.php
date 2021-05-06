
<html>
<head>
<style>
h1{
	font-size: 30px;
}
h2{
	font-size: 28px;
}
table,th,td{
	border:1px solid black;	
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
	<a href="home.php">HOME PAGE</a>
	<h1>DISPLAY DATA</h1>
	<div class="container">
	<form action= "" method= "POST">
		<input type="text" name="e_id" placeholder="Enter Employee-ID"/>
		<input type="submit" name="search" value="DISPLAY">
	</form>
	<table>
	<h2>Employee Details</h2>
		<tr>
			<th>E_id</th>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Mobile_no</th>
			<th>Adress</th>
			<th>Email</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		$eid=$_POST['e_id'];
		
		$query = "SELECT * FROM employee_details where E_id like '".$eid."' ";
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
				<td><a href="update(employee_details).php?E_id=<?php echo $row['E_id']; ?> ">update</a></td>
				
			</tr>

	

			<?php
		}

	}

	mysqli_close($conn);

?>	
	</table>
	<table>
	<h2>Occupation Details</h2>
	
		<tr>
			<th>Designation</th>
			<th>office Adress</th>
			<th>Date of joining</th>
			<th>Salary</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		$eid=$_POST['e_id'];
		
		$query = "SELECT * FROM occupation_details where E_id like '".$eid."' ";
		$query_run = mysqli_query($conn,$query);
		
		while($row=mysqli_fetch_array($query_run))
		{
			?>
			<tr>
				<td><?php echo $row['Designation']; ?> </td>
				<td><?php echo $row['Office_adress']; ?> </td>
				<td><?php echo $row['Date_of_joining']; ?> </td>
				<td><?php echo $row['Salary']; ?> </td>
				<td><a href="update(occupation_details).php?E_id=<?php echo $row['E_id']; ?> ">update</a></td>
			</tr>

	

			<?php
		}

	}

	mysqli_close($conn);

?>	
	</table>
	<table>
	<h2>Nominee Details</h2>
	
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Relationship</th>
			<th>Mobile no</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		$eid=$_POST['e_id'];
		
		$query = "SELECT * FROM nominee_details where E_id like '".$eid."' ";
		$query_run = mysqli_query($conn,$query);
		
		while($row=mysqli_fetch_array($query_run))
		{
			?>
			<tr>
				<td><?php echo $row['name']; ?> </td>
				<td><?php echo $row['age']; ?> </td>
				<td><?php echo $row['Relationship']; ?> </td>
				<td><?php echo $row['mobile_no']; ?> </td>
				<td><a href="update(nominee_details).php?E_id=<?php echo $row['E_id']; ?> ">update</a></td>
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



