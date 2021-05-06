<?php

	include "database.php";
	session_start();
	
	if(isset($_POST["register-submit"])){
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$pass2 = $_POST['confirmpass'];
		
		
		if(empty($firstname) || empty($lastname) || empty($email) || empty($pass) || empty($pass2) ){
			header("Location:register.php?error=All Fields Are Empty");
			exit();
		}
		$conn_e = "SELECT * FROM user WHERE email='".$email."' AND role='user'";         //concatenation
		$rel_e = mysqli_query($conn,$conn_e);
		
		if(mysqli_num_rows($rel_e) > 0){
			header("Location:register.php?error=This email is already registered");
			exit();
		}
		if($pass != $pass2){
			header("Location:register.php?error=Passwords Donot match");
			exit();
		}
		if($pass == $pass2){
			$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
			
			$sql = "INSERT INTO user(firstname,lastname,email,pass) VALUES('".$firstname."','".$lastname."','".$email."','".$pass_hash."')";
			$row =mysqli_query($conn,$sql);
			if($row){
				 $_SESSION['firstname']=$firstname;
				 $_SESSION['lastname']=$lastname;
				$_SESSION['email']= $email;
				header("Location:login.php?register=successfull");
			}
			else{
				header("Location:register.php?error=MY SQL ERROR");
			exit();
			}
		}
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>login system in php</title>
	<link rel="stylesheet" type="text/css" href="css/register.css" />
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
	
	
	
</head>
<body>
		<div class="container">
			<div class="row">
				
				<div class="col-md-5 offset-md-4">
					
					<form action="register.php" method="POST">
						
							<h1 class="text-center text-info">REGISTER USER</h1>
							<div class="form-group">
								<p class="text-center text-danger">
									<?php
										if(isset($_GET['error'])){
											echo $_GET['error'];
										}
									?>
								</p>
							</div>
							<div class="form-group">
								<label for="firstname">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter first name" />
							</div>
							<div class="form-group">	
                                <label for="lastname">Last Name</label>							
								<input type="text" name="lastname" class="form-control" placeholder="Enter last name" />
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email" />
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter password" />
							</div>
							<div class="form-group">
								<label for="confirmpass">Confirm Password</label>
								<input type="password" name="confirmpass" class="form-control" placeholder="Confirm password" />
							</div>
							<div class="form-group">
								
									<input type="submit" name="register-submit" 
									class="btn btn-block bg-info" value="Register">
				
							</div>
							<div class="form-group text-center">
								<p>Already a member ?
									<a href="login.php" class="text-center text-info">Login
									Here</a>
								</p>
							</div>					
					</form>
				</div>
			</div>
		</div>	
</body>
</html>