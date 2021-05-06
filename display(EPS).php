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
	<h1>EMPLOYEE PENSION SCHEME DETAILS</h1>
	<div class="container">
	<form action= "" method= "POST">
		<input type="text" name="e_id" placeholder="Enter Employee-ID"/>
		<input type="submit" name="search" value="DISPLAY">
	</form>
	<table>
	<h2>Contrubution Details</h2>
		<tr>
			<th>Employee contribution</th>
			<th>Employer contribution</th>
			<th>Total contribution</th>
			<th>Interest rate </th>
			<th>Total amount</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		$eid=$_POST['e_id'];
		
		$query = "SELECT * FROM contribution_table where E_id like '".$eid."' ";
		$query_run = mysqli_query($conn,$query);
		
		while($row=mysqli_fetch_array($query_run))
		{
			?>
			<tr>
				<td><?php echo $row['Employee_contribution']; ?> </td>
				<td><?php echo $row['Employer_contribution']; ?> </td>
				<td><?php echo $row['Total_contribution']; ?> </td>
				<td><?php echo $row['Interest_rate'];; ?> </td>
				<td><?php echo $row['Total_amount']; ?> </td>
			</tr>

	

			<?php
		}

	}

	mysqli_close($conn);

?>	

	</table>
	<table>
	<h2>Withdraw Details</h2>
		<tr>
			<th>Reason</th>
			<th>Withdraw status</th>
			<th>Withdrawer</th>
			<th>Withdraw date</th>
			<th>Withdaw_amount</th>
			<th>Pending_amount</th>
		</tr>
	<?php
	require "database.php";
	if(isset($_POST['search'])){
		$eid=$_POST['e_id'];
		
		$query = "SELECT * FROM withdraw_details where E_id like '".$eid."' ";
		$query_run = mysqli_query($conn,$query);
		
		while($row=mysqli_fetch_array($query_run))
		{
			?>
			<tr>
				<td><?php echo $row['Reason']; ?> </td>
				<td><?php echo $row['Withdraw_status']; ?> </td>
				<td><?php echo $row['Withdrawer'];; ?> </td>
				<td><?php echo $row['Withdraw_date']; ?> </td>
				<td><?php echo $row['Withdraw_amount']; ?> </td>
				<td><?php echo $row['Pending_amount']; ?> </td>
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
