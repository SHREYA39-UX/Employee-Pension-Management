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
	<a href="admin(home).php">HOME PAGE</a>
	<h1>DISPLAY DATA</h1>
	<div class="container">
	<form action= "" method= "POST">
	<input type="submit" name="search" value="DISPLAY">
	</form>
	<table>
	<h2>Contrubution Details</h2>
		<tr>
			<th>E_id</th>
			<th>Employee contribution</th>
			<th>Employer contribution</th>
			<th>Total contribution</th>
			<th>Interest rate </th>
			<th>Total amount</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		$query = "SELECT * FROM contribution_table ";
		$query_run = mysqli_query($conn,$query);
		
		while($row=mysqli_fetch_array($query_run))
		{
			?>
			<tr>
				<td><?php echo $row['E_id']; ?> </td>
				<td><?php echo $row['Employee_contribution']; ?> </td>
				<td><?php echo $row['Employer_contribution']; ?> </td>
				<td><?php echo $row['Total_contribution']; ?> </td>
				<td><?php echo $row['Interest_rate']; ?> </td>
				<td><?php echo $row['Total_amount']; ?> </td>
				<td><a href="update(admin).php?E_id=<?php echo $row['E_id']; ?> ">update</a></td>
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
